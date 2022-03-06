<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Contracts\CategoryContract;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Slide;
use App\Models\Sale;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryContract $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale = Sale::whereActive(1)
                    ->where('sale_exp', '>', Carbon::now())->first();
        $slides = Slide::whereShow(1)->get(); // Slide::where('show', 1)->get()
        $categories = $this->categoryRepository->all();
        $recommend_products = Product::inRandomOrder()->limit(6)->get();
        $brands = Brand::select('name', 'logo')->get();
        return view('site.pages.homepage', compact('slides', 'categories', 'recommend_products', 'brands', 'sale'));
    }
}
