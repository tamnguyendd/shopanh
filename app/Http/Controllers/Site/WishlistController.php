<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.pages.wishlist');
    }

    /**
     * Clear wish list and redirect back home page
     *
     * @return \Illuminate\Http\Response
     */
    public function clearList()
    {
        Cart::instance('wishlist')->destroy();
    
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('wishlist')->remove($id);
        
        return redirect()->back()->with('message', 'Item has been removed! -- wishlist');
    }
    
    /**
     * Switch item for wish list to shopping cart
     *
     * @param int $id (the item ID)
     * @return \Illuminate\Http\Response
     *
     */
    public function switchToCart($id)
    {
        $item = Cart::instance('wishlist')->get($id);
        
        $options = [];
        if ($item->options != '') {
            foreach ($item->options as $key => $value) {
                $options = [$key => $value];
            }
        }
        //Log::info($options);
        Cart::instance('wishlist')->remove($id);
        
        Cart::instance('default')->add($item->id, $item->name, $item->image, $item->qty, $item->price, $options)
            ->associate('App\Models\Product');

        return redirect()->back()->with('message', 'Item has been moved to your Cart!');
    }



}
