<?php

namespace App\Http\Controllers\Admin;


use App\Contracts\BrandContract;
use App\Contracts\CategoryContract;
use App\Contracts\ProductContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreProductFormRequest;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends BaseController
{
    protected $brandRepository;

    protected $categoryRepository;

    protected $productRepository;

    public function __construct(
        BrandContract $brandRepository,
        CategoryContract $categoryRepository,
        ProductContract $productRepository
    )
    {
        $this->brandRepository = $brandRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    // Other functions here
    public function index()
    {
        $products = $this->productRepository->listProducts();
    
        $this->setPageTitle('Products', 'Products List');
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $brands = $this->brandRepository->listBrands('name', 'asc');
        $categories = $this->categoryRepository->listCategories('name', 'asc');
    
        $this->setPageTitle('Products', 'Create Product');
        return view('admin.products.create', compact('categories', 'brands'));
    }

    public function store(StoreProductFormRequest $request)
    {
        $params = $request->except('_token');
    
        $product = $this->productRepository->createProduct($params);

        $msg = 'Product「'. $product->name . '」added successfully';

        if (!$product) {
            return $this->responseRedirectBack('Error occurred while creating product.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', $msg, 'success', false, false);
    }

    public function edit($id)
    {
        $product = $this->productRepository->findProductById($id);
        $brands = $this->brandRepository->listBrands('name', 'asc');
        $categories = $this->categoryRepository->listCategories('name', 'asc');
    
        Log::info('$product edit');
        Log::info($product);
        $this->setPageTitle('Products', 'Edit Product');
        return view('admin.products.edit', compact('categories', 'brands', 'product'));
    }

    public function update(StoreProductFormRequest $request)
    {
        $params = $request->except('_token');

        $product = $this->productRepository->updateProduct($params);

        $msg = 'Product「'. $product->name . '」updated successfully';
        Log::info('$product');
        Log::info($product);
        if (!$product) {
            return $this->responseRedirectBack('Error occurred while updating product.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', $msg, 'success', false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $targetProduct = $this->productRepository->findProductById($id);

        $product_img = DB::table('product_images')->where('product_id', '=', $id);
        if($product_img){
            DB::table('product_images')->where('product_id', '=', $id)->delete();
        }

        $product_att = DB::table('product_attributes')->where('product_id', '=', $id);//product_attributes
        if($product_att){
            DB::table('product_attributes')->where('product_id', '=', $id)->delete();
        }

        $product_categories = DB::table('product_categories')->where('product_id', '=', $id);//product_categories
        if($product_categories){
            DB::table('product_categories')->where('product_id', '=', $id)->delete();
        }

        $product = $this->productRepository->deleteProduct($id);

        $msg = 'Product 「'.$targetProduct->name.'」 deleted successfully';

        if (!$product) {
            return $this->responseRedirectBack('Error occurred while deleting product.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', $msg ,'success',false, false);
    }




}