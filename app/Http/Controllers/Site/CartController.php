<?php

namespace App\Http\Controllers\Site;

use Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Darryldecode\Cart\Cart as CartCart;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    //
    public function getCart()
    {
        return view('site.pages.cart');
    }

    public function removeItem($id)
    {
        Cart::instance('default')->remove($id);
        
        return redirect()->back()->with('message', 'Item has been removed!');
    }

    public function clearCart()
    {
        Cart::instance('default')->destroy();
    
        return redirect('/');
    }
    
    /**
     * update a cart
     *
     * @param $id (the item ID)
     * @param array $data
     *
     * the $data will be an associative array, you don't need to pass all the data, only the key value
     * of the item you want to update on it
     */
    public function updateCart($id)
    {
        $data = [
            'qty' => 2,
        ];
        Cart::instance('default')->update($id, $data);
    
        return redirect()->back()->with('message', 'cart updated successfully.');
    }
    
    /**
     * update a cart
     *
     * @param $id (the item ID)
     * @param array $data
     *
     * the $data will be an associative array, you don't need to pass all the data, only the key value
     * of the item you want to update on it
     */
    public function minusItem($id)
    {
        $items = Cart::instance('default')->content();
        foreach($items as $item)
        {
            if ($item->rowId == $id) {
                $qty = $item->qty;
                break;
            }
        }
        //Log::info($qty);
        if ($qty <= 1) {
            return redirect()->back()->with('error', 'item quantity was minimum');
        }
        else {
            $qty = $qty - 1;
            Cart::instance('default')->update($id, $qty); // Will update the quantity
        
            return redirect()->back()->with('message', 'Item quantity was changed!');
        }
    }
    
    /**
     * update a cart
     *
     * @param $id (the item ID)
     * @param array $data
     *
     * the $data will be an associative array, you don't need to pass all the data, only the key value
     * of the item you want to update on it
     */
    public function plusItem($id)
    {
        
        $items = Cart::instance('default')->content();
        foreach($items as $item)
        {
            if ($item->rowId == $id) {
                $qty = $item->qty;
                break;
            }
        }
        //Log::info($qty);
        if ($qty >= $item->model->quantity) {
            return redirect()->back()->with('error', 'item quantity was maximum');
        }
        else {

            $qty = $qty + 1;
            Cart::instance('default')->update($id, $qty); // Will update the quantity
        
            return redirect()->back()->with('message', 'Item quantity was changed!');
        }
    }

    
    /**
     * Switch item for shopping cart to wish list
     *
     * @param int $id (the item ID)
     * @return \Illuminate\Http\Response
     *
     */
    public function switchToWishlist($id)
    {
        $item = Cart::instance('default')->get($id);
        
        $options = [];
        if ($item->options != '') {
            foreach ($item->options as $key => $value) {
                $options = [$key => $value];
            }
        }
        //Log::info($options);
        Cart::instance('default')->remove($id);
        
        Cart::instance('wishlist')->add($item->id, $item->name, $item->image, $item->qty, $item->price, $options)
            ->associate('App\Models\Product');

        return redirect()->back()->with('message', 'Item has been moved to your Wish list!');
    }



}
