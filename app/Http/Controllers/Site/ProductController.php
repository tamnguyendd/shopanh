<?php

namespace App\Http\Controllers\Site;

use Cart;
use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Contracts\CategoryContract;
use App\Http\Controllers\Controller;
use App\Contracts\AttributeContract;
use App\Models\Sale;
use Illuminate\Support\Carbon;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    //
    protected $productRepository;
    protected $attributeRepository;
    protected $categoryRepository;

    public function __construct(ProductContract $productRepository, AttributeContract $attributeRepository, CategoryContract $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->attributeRepository = $attributeRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function show($slug)
    {
        $sale = Sale::whereActive(1)->where('sale_exp', '>', Carbon::now())->first();
        $product = $this->productRepository->findProductBySlug($slug);
        $attributes = $this->attributeRepository->listAttributes();
        $category = $product->categories->first();
        
        //Log::info($category->products);
        /* 
            select `pc`.`category_id`, `pc`.`product_id`,  `p`.`name`,
            (SELECT `pim`.`full` from `product_images` as `pim` WHERE `p`.`id` = `pim`.`product_id` LIMIT 1)
            from `product_categories` as `pc` 
            inner join `products` as `p` on `pc`.`product_id` = `p`.`id` 
            where `pc`.`category_id` = 2 and `p`.`id` <> 6

            $sub = Abc::where(..)->groupBy(..); // Eloquent Builder instance

            $count = DB::table( DB::raw("({$sub->toSql()}) as sub") )
                ->mergeBindings($sub->getQuery()) // you need to get underlying Query Builder
                ->count();
        */
        // SELECT * FROM order_items as o INNER JOIN products as p ON p.id = o.product_id GROUP BY o.product_id;
        /*
        $popular_products = DB::table('order_items as o')->join('products as p','p.id', 'o.product_id')
        ->groupBy('o.product_id')
        ->select('p.*')
        ->limit(3)->get();
        */

        $sub = DB::table('product_images as pim')
                    ->select('pim.full')
                    ->whereColumn('p.id', 'pim.product_id')
                    ->limit(1);
                    
        $popular_products = DB::table('order_items as o')->join('products as p','p.id', 'o.product_id')
                                ->groupBy('o.product_id')
                                ->select('p.*')
                                ->selectSub($sub, 'image')
                                ->limit(3)->get();
        //Log::warning($popular_products);
        /*
        DB::table('products as p')
                                ->select('p.name', 'p.sku', 'p.description', 'p.slug')
                                ->selectSub($sub, 'image')
                                ->inRandomOrder()->limit(3)->get();
        */
        $related_products = DB::table('product_categories as pc')
                                ->select('p.name', 'p.sku', 'p.summary', 'p.slug')
                                ->selectSub($sub, 'image')
                                ->join('products as p', 'pc.product_id', 'p.id')
                                ->where('pc.category_id', $category->id)
                                ->where('p.id', '<>', $product->id)
                                ->inRandomOrder()->limit(3)->get();
        //Log::info($popular_products);


        //dd($product);
        return view('site.pages.details', compact('product', 'attributes', 'category', 'popular_products', 'related_products', 'sale'));
    }

    public function search(Request $request)
    {
        $orderBy = $request->has('filter') ? $request->input('filter') : '';
        Log::info("orderBy");
        Log::info($orderBy);
        $search = $request->input('search');
        $category = $request->input('category_name');
        $sale = Sale::whereActive(1)->where('sale_exp', '>', Carbon::now())->first();

        if($category == 'all') {
            $cat_name = 'All categories';

            $products = $this->productRepository->findProductsByWords($search, $orderBy);
        }
        else {
            $cate = $this->categoryRepository->findBySlug($category);

            $products = $this->productRepository->findProductsInCategoryByWords($cate->id, $search, $orderBy);

            $cat_name = $cate->name;
        }
        // Return the search view with the resluts compacted
        return view('site.pages.search', compact('products', 'search', 'cat_name', 'sale', 'orderBy'));
    }
    /*
    public function search($slug)
    {
        //$product = $this->productRepository->findProductBySlug($slug);
        //$attributes = $this->attributeRepository->listAttributes();
        //dd($product);
        //return view('site.pages.search', compact('product', 'attributes'));
        if ($slug == 1) {
            return view('site.pages.search1');
        }
        return view('site.pages.search');
    }
*/
    public function addTo(Request $request)
    {
        /*
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->productId;
        });
        
        if($duplicates->isNotEmpty()){
            return redirect()->back()->with('error', 'Item is already in your cart! Tips: in your cart, you can change number of quantity items.');
        }
        */

        $product = $this->productRepository->findProductById($request->input('productId'));
        $options = $request->except('_token', 'productId', 'price', 'qty', 'addTo');
        $images = ProductImage::where('product_id', $request->input('productId'))->first();
        $image = '';
        if ($images) {
            $image = $images->full;
        }
        
        switch($request->addTo) {

            case 'cart': 
                Cart::instance('default')->add($request->input('productId'), $product->name, $image, $request->input('qty'), $request->input('price'), $options)
                    ->associate('App\Models\Product');
                //Log::warning(Cart::instance('default')->content());
                return redirect()->back()->with('message', 'Item was added to your cart!');
            break;
        
            case 'wishlist': 
                
                Cart::instance('wishlist')->add($request->input('productId'), $product->name, $image, $request->input('qty'), $request->input('price'), $options)
                    ->associate('App\Models\Product');
                
                return redirect()->back()->with('message', 'Item was added to your wishlist!');
            break;
        }
        
    }


}