<?php

namespace App\Repositories;

use Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use App\Contracts\OrderContract;
use Illuminate\Support\Facades\Log;

class OrderRepository extends BaseRepository implements OrderContract
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function storeOrderDetails($params, $payment_method, $error)
    {
        //$tax = (config('cart.tax') * Cart::instance('default')->subtotal(0, '', '')) / 100;
        $order = Order::create([
            'order_number'      =>  'ORD-'.strtoupper(uniqid()),
            'user_id'           =>  auth()->user()->id,
            'status'            =>  'pending',
            'tax'               =>  Cart::instance('default')->tax(0, '', ''),
            'sub_total'         =>  Cart::instance('default')->subtotal(0, '', ''),
            'grand_total'       =>  Cart::instance('default')->total(0, '', ''),
            'item_count'        =>  Cart::instance('default')->count(),
            'payment_status'    =>  0,
            'payment_method'    =>  $payment_method,
            'error'             =>  $error,
            'shipped'           =>  0,
            'first_name'        =>  $params['first_name'],
            'last_name'         =>  $params['last_name'],
            'address'           =>  $params['address'],
            'city'              =>  $params['city'],
            'prefecture'        =>  $params['state'],
            'country'           =>  $params['country'],
            'post_code'         =>  $params['post_code'],
            'phone_number'      =>  $params['phone_number'],
            'notes'             =>  $params['notes']
        ]);
    
        if ($order) {
    
            $items = Cart::content();
            
            foreach ($items as $item)
            {
                // A better way will be to bring the product id with the cart items
                // you can explore the package documentation to send product id with the cart
                $product = Product::where('name', $item->name)->first();
                Log::info('json_encode($item->options)');
                Log::info(json_encode($item->options));
                $orderItem = new OrderItem([
                    'product_id'    =>  $product->id,
                    'quantity'      =>  $item->qty,
                    'price'         =>  $item->subtotal,
                    'image'         =>  $item->image,
                    'attributes'    =>  $item->options
                ]);
    
                $order->items()->save($orderItem);
            }
        }
    
        return $order;
    }

    public function listOrders(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    public function findOrderByNumber($orderNumber)
    {
        return Order::where('order_number', $orderNumber)->first();
    }

    public function findOrdersByUser($user_id) {
        // SELECT * FROM `orders` WHERE `user_id` = 2 ORDER BY `orders`.`id` DESC;
        return Order::where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->get();
    }
    
}