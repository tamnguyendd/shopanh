<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\CategoryContract;
use App\Contracts\SaleContract;
use App\Contracts\BrandContract;
use App\Models\Category;
use App\Models\Sale;
use App\Models\Product;
use DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    protected $categoryRepository, $saleRespository, $brandRespository;

    public function __construct(CategoryContract $categoryRepository, SaleContract $saleRespository, BrandContract $brandRespository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->saleRespository = $saleRespository;
        $this->brandRespository = $brandRespository;
    }

    public function show(Request $request, $slug)
    {

        $orderBy = $request->has('filter') ? $request->input('filter') : '';

        if($request->has('brand')) {
            $brands = $request->brand;
        }
        $brands = $request->has('brand') ? $request->input('brand') : '';
        
        if($request->input('min_price') == '') {
            $min_price = 0;
        }
        else {
            $min_price = $request->input('min_price');
        }

        if($request->input('max_price') == '') {
            $max_price = 99999999;
        }
        else {
            $max_price = $request->input('max_price');
        }

        $sale = Sale::whereActive(1)->where('sale_exp', '>', Carbon::now())->first();
        
        $category = $this->categoryRepository->findBySlug($slug);
        if($category){
            $products = $category->products()->when(($orderBy == '' || $orderBy == 'lastest'), function ($query) {
                return $query->orderBy('products.created_at', 'desc');
            })->when(($orderBy == 'lowToHigh'), function ($query) {
                return $query->orderBy('price', 'asc');
            })->when(($orderBy == 'highToLow'), function ($query) {
                return $query->orderBy('price', 'desc');
            })->when(($orderBy == 'highToLow'), function ($query) {
                return $query->orderBy('price', 'desc');
            })->when(($min_price || $max_price), function ($query) use($min_price, $max_price) {
                return $query->whereBetween('price', [$min_price, $max_price]);
            })->when($brands, function ($query) use($brands) {
                return $query->Join('brands', 'products.brand_id', '=', 'brands.id')
                ->whereIn('brands.slug', $brands);
            })->paginate(12);
        }
        else {
            return view('site.pages.404');
        }
        $brands = $category->products()->distinct('products.brand_id')
                            ->Join('brands', 'products.brand_id', '=', 'brands.id')
                            ->pluck('brands.name', 'brands.slug')->toarray();
                            //var_dump($brands);
        
        //$parent = $category->parent;
        //Log::error($category);
        //return view('site.pages.category', compact('category'));
        
        return view('site.pages.category', compact('category', 'sale', 'products', 'orderBy', 'brands'));
    }
}