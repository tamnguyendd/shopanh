<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Sale;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Cart;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('site.partials.nav', function ($view) {
            $view->with('categories', Category::orderByRaw('-name ASC')->get()->nest());
        });

        View::composer('site.partials.header', function ($view) {
            $id = 0;
            $user = Auth::user();
            if ($user){
                $id = $user['id'];
            }

            $view->with('cartCount', Cart::instance('default')->count());
            
            $view->with('wishListCount', Cart::instance('wishlist')->count());

            $orderlist = DB::table('orders')
                        ->where('user_id', '=', $id)
                        ->where('status', '!=', 'completed')
                        ->get();//Order::where('user_id', '=', $id)->get();
            $orderCount = $orderlist->count();
            $view->with('orderCount', $orderCount);

            $categories = Category::where('id', '<>', 1)->get();
            $view->with('categories', $categories);

        });
        
    }
}
