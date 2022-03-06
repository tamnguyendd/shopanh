<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(config('app.env') === 'herokuapp') {
            \URL::forceScheme('https');
        }

        //
        Schema::defaultStringLength(191);
        View::share('value', 'key');

        $settings=DB::table('settings')->pluck('value', 'key')->toArray();
        //$setting = array_values($settings);
        View::share('settings',$settings);
        //Log::info($settings);

        Paginator::useBootstrap();
    }
}
