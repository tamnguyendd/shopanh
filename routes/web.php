<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

require 'admin.php'; // routes/admin.php

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// home
Route::get('/', 'Site\HomeController@index')->name('homepage');

// category show route
Route::get('/category/{slug}', 'Site\CategoryController@show')->name('category.show');

// product show route
Route::get('/product/{slug}', 'Site\ProductController@show')->name('product.show');
Route::post('/product/add', 'Site\ProductController@addTo')->name('product.add');

// search result
//Route::get('/search/{slug}', 'Site\ProductController@search')->name('search.result');
//Route::get('/search/{slug}', 'Site\ProductController@search')->name('search.result');

Route::get('/search/', 'Site\ProductController@search')->name('search.result');

// cart
Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
Route::get('/cart/item/{id}/minus', 'Site\CartController@minusItem')->name('checkout.cart.minus');
Route::get('/cart/item/{id}/plus', 'Site\CartController@plusItem')->name('checkout.cart.plus');
Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/item/switchToWishlist/{id}', 'Site\CartController@switchToWishlist')->name('checkout.cart.switchToWishlist');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');

Route::get('/wishlist', 'Site\WishlistController@index')->name('wishlist.index');
Route::get('/wishlist/switchToCart/{id}', 'Site\WishlistController@switchToCart')->name('wishlist.switchToCart');
Route::get('/wishlist/{id}/remove', 'Site\WishlistController@destroy')->name('wishlist.remove');
Route::get('/wishlist/clear', 'Site\WishlistController@clearList')->name('wishlist.clear');

// Auth
Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
    Route::get('/checkout/information', 'Site\CheckoutController@infor')->name('checkout.infor');
    Route::post('/checkout/order', 'Site\CheckoutController@store')->name('checkout.place.order');

    Route::get('checkout/payment/complete', 'Site\CheckoutController@complete')->name('checkout.payment.complete');
    Route::get('checkout/payment/failure', 'Site\CheckoutController@failure')->name('checkout.payment.failure');

    // categories route
    Route::group(['prefix'  =>   'account'], function() {
        Route::get('/orders', 'Site\AccountController@getOrders')->name('account.orders');
        Route::get('/profile', 'Site\AccountController@getProfile')->name('account.profile');
        Route::post('/profile', 'Site\AccountController@updateProfile')->name('account.profile.update');
        
        Route::get('/change-password', function() {
            return view('site.pages.account.change');
        })->name('account.changepw');
        Route::post('/change-password', 'Site\AccountController@changePassword')->name('account.changepw.update');

        Route::get('/addresslist', 'Site\AccountController@getAddress')->name('account.address');

        Route::get('/wishlist', 'Site\AccountController@getWishlist')->name('account.wishlist');
    });
    
});


// others
Route::view('/others/filter', 'site.pages.others.filter');
Route::view('/others/banners', 'site.pages.others.banners');
Route::view('/others/features', 'site.pages.others.features');
Route::view('/others/forms', 'site.pages.others.forms');
Route::view('/others/itemside', 'site.pages.others.itemside');
