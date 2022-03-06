<?php
use App\Exceptions\Handler;
use GuzzleHttp\Middleware;

Route::group(['prefix'  =>  'admin'], function () {

    // login route
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    // chec Auth
    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');

        // setting route
        Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
        Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');

        // categories route
        Route::group(['prefix'  =>   'categories'], function() {
            Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
            Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
            Route::post('/store', 'Admin\CategoryController@store')->name('admin.categories.store');
            Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('admin.categories.edit');
            Route::post('/update', 'Admin\CategoryController@update')->name('admin.categories.update');
            Route::get('/{id}/delete', 'Admin\CategoryController@delete')->name('admin.categories.delete');
        });

        // attributes route
        Route::group(['prefix'  =>   'attributes'], function() {

            Route::get('/', 'Admin\AttributeController@index')->name('admin.attributes.index');
            Route::get('/create', 'Admin\AttributeController@create')->name('admin.attributes.create');
            Route::post('/store', 'Admin\AttributeController@store')->name('admin.attributes.store');
            Route::get('/{id}/edit', 'Admin\AttributeController@edit')->name('admin.attributes.edit');
            Route::post('/update', 'Admin\AttributeController@update')->name('admin.attributes.update');
            Route::get('/{id}/delete', 'Admin\AttributeController@delete')->name('admin.attributes.delete');
            
            // attribute values route
            Route::post('/get-values', 'Admin\AttributeValueController@getValues');
            Route::post('/add-values', 'Admin\AttributeValueController@addValues');
            Route::post('/update-values', 'Admin\AttributeValueController@updateValues');
            Route::post('/delete-values', 'Admin\AttributeValueController@deleteValues');
        });

        // brands route
        Route::group(['prefix'  =>   'brands'], function() {

            Route::get('/', 'Admin\BrandController@index')->name('admin.brands.index');
            Route::get('/create', 'Admin\BrandController@create')->name('admin.brands.create');
            Route::post('/store', 'Admin\BrandController@store')->name('admin.brands.store');
            Route::get('/{id}/edit', 'Admin\BrandController@edit')->name('admin.brands.edit');
            Route::post('/update', 'Admin\BrandController@update')->name('admin.brands.update');
            Route::get('/{id}/delete', 'Admin\BrandController@delete')->name('admin.brands.delete');
        
        });

        // products route
        Route::group(['prefix' => 'products'], function () {

            Route::get('/', 'Admin\ProductController@index')->name('admin.products.index');
            Route::get('/create', 'Admin\ProductController@create')->name('admin.products.create');
            Route::post('/store', 'Admin\ProductController@store')->name('admin.products.store');
            Route::get('/edit/{id}', 'Admin\ProductController@edit')->name('admin.products.edit');
            Route::post('/update', 'Admin\ProductController@update')->name('admin.products.update');
            Route::get('/{id}/delete', 'Admin\ProductController@delete')->name('admin.products.delete');
        
            Route::post('/images/upload', 'Admin\ProductImageController@upload')->name('admin.products.images.upload');
            Route::get('/images/{id}/delete', 'Admin\ProductImageController@delete')->name('admin.products.images.delete');
        
            // Load attributes on the page load
            Route::get('/attributes/load', 'Admin\ProductAttributeController@loadAttributes');
            // Load product attributes on the page load
            Route::post('/attributes', 'Admin\ProductAttributeController@productAttributes');
            // Load option values for a attribute
            Route::post('/attributes/values', 'Admin\ProductAttributeController@loadValues');
            // Add product attribute to the current product
            Route::post('/attributes/add', 'Admin\ProductAttributeController@addAttribute');
            // Delete product attribute from the current product
            Route::post('/attributes/delete', 'Admin\ProductAttributeController@deleteAttribute');
            
        });

        // orders route
        Route::group(['prefix' => 'orders'], function () {
            Route::get('/', 'Admin\OrderController@index')->name('admin.orders.index');
            Route::get('/{order}/show', 'Admin\OrderController@show')->name('admin.orders.show');
        });

        // slides route
        Route::group(['prefix'  =>   'slides'], function() {

            Route::get('/', 'Admin\SlideController@index')->name('admin.slides.index');
            Route::get('/create', 'Admin\SlideController@create')->name('admin.slides.create');
            Route::post('/store', 'Admin\SlideController@store')->name('admin.slides.store');
            Route::get('/{id}/edit', 'Admin\SlideController@edit')->name('admin.slides.edit');
            Route::post('/update', 'Admin\SlideController@update')->name('admin.slides.update');
            Route::get('/{id}/delete', 'Admin\SlideController@delete')->name('admin.slides.delete');
        
        });

        // sales route
        Route::group(['prefix'  =>   'sales'], function() {

            Route::get('/', 'Admin\SaleController@index')->name('admin.sales.index');
            Route::get('/create', 'Admin\SaleController@create')->name('admin.sales.create');
            Route::post('/store', 'Admin\SaleController@store')->name('admin.sales.store');
            Route::get('/{id}/edit', 'Admin\SaleController@edit')->name('admin.sales.edit');
            Route::post('/update', 'Admin\SaleController@update')->name('admin.sales.update');
            Route::get('/{id}/delete', 'Admin\SaleController@delete')->name('admin.sales.delete');
        
        });

    });

});