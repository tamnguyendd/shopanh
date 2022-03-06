<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Contracts\OrderContract;

class AccountController extends Controller
{
    use UploadAble;

    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    //
    public function getOrders()
    {
        $id = auth()->user()->id;
        $orders = $this->orderRepository->findOrdersByUser($id);
        //Log::info($orders);
        
        //$order = $this->orderRepository->findOrderByNumber($orderNumber);

        return view('site.pages.account.orders', compact('orders'));
    }

    public function getProfile()
    {
        // Retrieve the currently authenticated user...
        // $profile = auth()->user();
        // Log::warning($profile);
        // Retrieve the currently authenticated user's ID...
        $id = auth()->id();
        $profile = User::where('id', $id)->first();
        
        return view('site.pages.account.index', compact('profile', $profile));
    }

    // update Profile
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProfile(Request $request)
    {
        $id = auth()->id();
        $profile = User::where('id', $id)->first();
        //Log::warning('$id'.$id);
        $this->validate($request, [

            'last_name'      =>  'required|max:100',
            'first_name'     =>  'required|max:100',
            'avatar'         =>  'mimes:jpg,jpeg,png|max:1000',
            'phone'          =>  'required|max:13',
            'zip'            =>  'max:7',
            'address'        =>  'required|max:191',
            'city'           =>  'required|max:100',
            'country'        =>  'max:100'
        ]);
        
        $avatar = $profile->avatar;
        
        if ($request->hasfile('avatar')) {
            if ($avatar != null) {
                $this->deleteOne($profile->avatar);
            }
            $avatar = $this->uploadOne($request->file('avatar'), 'users/avatar'); // img
            
            //Log::warning('has avatar and updated: '.$avatar);
        }

        $profile = User::where('id', '=', $id)
                ->update([
                    'last_name' => $request->last_name,
                    'first_name' => $request->first_name,
                    'gender' => $request->gender,
                    'avatar' => $avatar,
                    'phone' => $request->phone,
                    'zip' => $request->zip,
                    'address' => $request->address,
                    'city' => $request->city,
                    'country' => $request->country,
                
                ]);
        return redirect()->back()->with('message', 'profile updated successfully.');
        //return view('site.pages.account.index', compact('profile', $profile));
    }

    public function changePassword(Request $request) {
        $user = auth()->user();
    
        $userPassword = $user->password;
        
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:8',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password'=>'password not match']);
        }

        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->back()->with('message', 'password updated successfully.');
    }

    public function getAddress()
    {
        // Retrieve the currently authenticated user...
        // $profile = auth()->user();
        // Log::warning($profile);
        // Retrieve the currently authenticated user's ID...
        $id = auth()->id();
        $profile = User::where('id', '=', $id)->first();
        
        return view('site.pages.account.address', compact('profile', $profile));
    }

    public function getWishlist()
    {
        // Retrieve the currently authenticated user...
        // $profile = auth()->user();
        // Log::warning($profile);
        // Retrieve the currently authenticated user's ID...
        $id = auth()->id();
        $profile = User::where('id', '=', $id)->first();
        
        return view('site.pages.account.wishlist', compact('profile', $profile));
    }

}