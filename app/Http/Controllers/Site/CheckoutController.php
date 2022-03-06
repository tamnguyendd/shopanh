<?php

namespace App\Http\Controllers\Site;

use Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Services\PayPalService;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Cartalyst\Stripe\Exception\CardErrorException;
use Stripe;
use Cartalyst\Stripe\Exception\MissingParameterException;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Support\Carbon;

class CheckoutController extends Controller
{
    //
    protected $payPal;

    protected $orderRepository;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['delivered'];

    public function __construct(OrderContract $orderRepository, PayPalService $payPal)
    {
        $this->payPal = $payPal;
        $this->orderRepository = $orderRepository;
    }

    public function getCheckout()
    {
        return view('site.pages.checkout');
    }

    public function infor()
    {
        return view('site.pages.checkoutinfor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        $contents = Cart::instance('default')->content()->map(function ($item) {
            $values = '';

            foreach ($item->options as $key => $value) {
                $values = $values . $key . ': ' . $value . ', ';
            }

            if ($values == '') {
                //Log::info('values of item that was placed is null ');
                return $item->model->slug.', '.$item->qty;
            }
            else {
                //Log::info('values of item that was placed: ' . $values);
                //return $item->model->slug.', '.$values.', '.$item->qty;
                //return $item->model->slug.', '.$item->qty;
    
                return $item->model->slug . ', ' . $values . $item->qty;
            }
                
        })->values()->toJson();

        try {

            $charge = Stripe::charges()->create([
                'source' => $request->stripeToken,
                'amount' => Cart::instance('default')->total(0, '', ''),
                'currency' => 'JPY',
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                    'notes'    => $request->notes,
                    //'discount' => collect(session()->get('coupon'))->toJson(),
                ],

            ]);

            /*
            $charges = $stripe->charges()->all();
            foreach ($charges['data'] as $charge) {
                var_dump($charge['id']);
            }
            */
            
            // insert into order table and order items table
            $order = $this->orderRepository->storeOrderDetails($request->all(), 'Stripe', null);
            
            if ($order) {

                $order_update = Order::where('id', $order->id)->first();

                $order_update->delivered = Carbon::now();

                $order_update->status = 'processing';
                $order_update->payment_status = $charge['paid'];
                $order_update->payment_method = $charge['calculated_statement_descriptor'];
                $order_update->charge_id      = $charge['id'];
                $order_update->name_on_card   = $request->name_on_card;
                
                $order_update->brand                = $charge['payment_method_details']['card']['brand'];
                $order_update->funding              = $charge['payment_method_details']['card']['funding'];
                $order_update->exp_month            = $charge['payment_method_details']['card']['exp_month'];
                $order_update->exp_year             = $charge['payment_method_details']['card']['exp_year'];
                $order_update->address_check        = $charge['payment_method_details']['card']['checks']['address_line1_check'];
                $order_update->postal_code_check    = $charge['payment_method_details']['card']['checks']['address_postal_code_check'];
                $order_update->cvc_check            = $charge['payment_method_details']['card']['checks']['cvc_check'];
                $order_update->last4                = $charge['payment_method_details']['card']['last4'];

                $order_update->error = null;

                $order_update->save();

                $order_number = $order_update->order_number;

                // destroy cart items
                Cart::instance('default')->destroy();

                

                return view('site.pages.success', compact('order_number'));
            }
            else {
                // refound Stripe
                $id = $charge['id'];
                $refund = Stripe::refunds()->create($id);
                Log::info('$order refund: ');
                Log::info($refund);

                return redirect()->back()->with('error','Order not placed');
            }
            
        } catch (CardErrorException $e) {
            
            $error = $e->getMessage();
            // insert into order table and order items table with error
            $order = $this->orderRepository->storeOrderDetails($request->all(), 'Stripe', $error);

            $charges = Stripe::charges()->all();
            $charge = $charges['data'][0];

            if ($order) {

                $order_update = Order::where('id', $order->id)->first();

                //$order_update->status = 'processing';
                $order_update->payment_status = $charge['paid'];
                $order_update->payment_method = $charge['calculated_statement_descriptor'];
                $order_update->charge_id      = $charge['id'];
                $order_update->name_on_card   = $request->name_on_card;
                
                $order_update->brand                = $charge['payment_method_details']['card']['brand'];
                $order_update->funding              = $charge['payment_method_details']['card']['funding'];
                $order_update->exp_month            = $charge['payment_method_details']['card']['exp_month'];
                $order_update->exp_year             = $charge['payment_method_details']['card']['exp_year'];
                $order_update->address_check        = $charge['payment_method_details']['card']['checks']['address_line1_check'];
                $order_update->postal_code_check    = $charge['payment_method_details']['card']['checks']['address_postal_code_check'];
                $order_update->cvc_check            = $charge['payment_method_details']['card']['checks']['cvc_check'];
                $order_update->last4                = $charge['payment_method_details']['card']['last4'];

                $order_update->error = $error;

                $order_update->save();

                $order_number = $order_update->order_number;

                // destroy cart items
                Cart::instance('default')->destroy();
                //Log::info('$order was placed with error: ' . $order);
                return view('site.pages.failure', compact('error', 'order_number'));
            }
            else {
                // refound Stripe
                $id = $charge['id'];
                $refund = Stripe::refunds()->create($id);
                Log::info('$order refund: ');
                Log::info($refund);

                return redirect()->back()->with('error','Order not placed');
            }

            //return redirect()->back()->with('error', $e->getMessage() . ' But your order was placed!', [$errors]);
        }
        catch (MissingParameterException  $e){
            $error = 'Something went wrong. <br> Please try to payment again or back homepage';
            return view('site.pages.failure', compact('error'));
        }
    }

    public function placeOrder(Request $request)
    {
        // Before storing the order we should implement the
        // request validation which I leave it to you
        //$order = $this->orderRepository->storeOrderDetails($request->all(), null);
    
        // You can add more control here to handle if the order
        // is not stored properly
        //if ($order) {
            //$this->payPal->processPayment($order);
            //return redirect()->route('checkout.payment.complete', [$order]);
        //}
    
        //return redirect()->back()->with('message','Order not placed');
    }

    public function complete(Request $request)
    {
        $charges = Stripe::charges()->all();
            Log::info('last4');
            //Log::info($charges['data'][0]['source']['last4']);
            //Log::info($charges['data'][0]);
            Log::info('paid:');
            if ($charges['data'][0]['paid'] == false) {
                Log::info('false');
            }
            else {
                Log::info('true');
            }
            Log::info($charges['data'][0]['paid']);
            
            Log::info('calculated_statement_descriptor:');
            Log::info($charges['data'][0]['calculated_statement_descriptor']);
            Log::info('payment_method:');
            Log::info($charges['data'][0]['payment_method']);
            Log::info('payment_method_details:');
            Log::info('brand:');
            Log::info($charges['data'][0]['payment_method_details']['card']['brand']);
            Log::info('exp_month:');
            Log::info($charges['data'][0]['payment_method_details']['card']['exp_month']);
            Log::info('exp_year:');
            Log::info($charges['data'][0]['payment_method_details']['card']['exp_year']);
            Log::info('funding: (credit)');
            Log::info($charges['data'][0]['payment_method_details']['card']['funding']);
            Log::info('last4: ');
            Log::info($charges['data'][0]['payment_method_details']['card']['last4']);
            Log::info('checks: address_line1_check');
            Log::info($charges['data'][0]['payment_method_details']['card']['checks']['address_line1_check']);
            Log::info('checks: address_postal_code_check');
            Log::info($charges['data'][0]['payment_method_details']['card']['checks']['address_postal_code_check']);
            Log::info('checks: cvc_check (pass or fail)');
            Log::info($charges['data'][0]['payment_method_details']['card']['checks']['cvc_check']);
            //paid => false || true : payment_status
            //payment_method => card_1JUPMlDq7S3lTZH2AvFR8Pmu : charge_id
            //payment_method_details[]

        return view('site.pages.success');
    }

    public function failure()
    {
        return view('site.pages.failure');
    }
}
