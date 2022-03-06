<?php

namespace App\Repositories;

use App\Models\Product;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Contracts\ProductContract;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Models\OrderItem;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * giống số lượng function của ProductContract
 * @package \App\Repositories
 */
class ProductRepository extends BaseRepository implements ProductContract
{
    use UploadAble;

    /**
     * ProductRepository constructor.
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listProducts(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }
    
	/**
	 * Paginate all
	 * @param  integer $perPage
	 * @param  array   $columns
	 * @return \Illuminate\Pagination\Paginator          
	 */
	public function paginate($perPage = 16, $columns = array('*'))
	{
		return $this->paginate($perPage, $columns);
	}

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findProductById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param $cat_slug
     * @param $orderBy
     * @param $keyword
     * @return mixed
     */
    public function findProductsInCategoryByWords($category_id, $keyword, $orderBy)
    {
        $products = Product::Join('product_categories as pc', 'products.id', '=', 'pc.product_id')
            ->where('pc.category_id', $category_id)
            ->where(function($query) use ($keyword)
            {
                $query->where('products.name', 'LIKE', "%{$keyword}%")
                ->orWhere('products.slug', 'LIKE', "%{$keyword}%")
                ->orWhere('products.summary', 'LIKE', "%{$keyword}%")
                ->orWhere('products.overview', 'LIKE', "%{$keyword}%")
                ->orWhere('products.description', 'LIKE', "%{$keyword}%")
                ->orWhere('products.specification', 'LIKE', "%{$keyword}%");
            })
            ->where('products.status', 1)

            ->when(($orderBy == 'lowToHigh'), function ($query) {
                return $query->orderBy("price", "asc");
            })
            ->when(($orderBy == 'highToLow'), function ($query) {
                return $query->orderBy("price", "desc");
            })
            ->when(($orderBy == '' || $orderBy == 'lastest'), function ($query) {
                return $query->orderBy("products.created_at", "desc");
            })
            ->paginate(12);
/*
        if($orderBy == 'lowToHigh') {
            $products = Product::Join('product_categories as pc', 'products.id', '=', 'pc.product_id')
            ->where('pc.category_id', $category_id)
            ->where(function($query) use ($keyword)
            {
                $query->where('products.name', 'LIKE', "%{$keyword}%")
                ->orWhere('products.slug', 'LIKE', "%{$keyword}%")
                ->orWhere('products.summary', 'LIKE', "%{$keyword}%")
                ->orWhere('products.overview', 'LIKE', "%{$keyword}%")
                ->orWhere('products.description', 'LIKE', "%{$keyword}%")
                ->orWhere('products.specification', 'LIKE', "%{$keyword}%");
            })
            ->where('products.status', 1)
                ->orderBy("price", "asc")
                ->paginate(12);
        }
        elseif($orderBy == 'highToLow') {
            $products = Product::Join('product_categories as pc', 'products.id', '=', 'pc.product_id')
            ->where('pc.category_id', $category_id)
            ->where(function($query) use ($keyword)
            {
                $query->where('products.name', 'LIKE', "%{$keyword}%")
                ->orWhere('products.slug', 'LIKE', "%{$keyword}%")
                ->orWhere('products.summary', 'LIKE', "%{$keyword}%")
                ->orWhere('products.overview', 'LIKE', "%{$keyword}%")
                ->orWhere('products.description', 'LIKE', "%{$keyword}%")
                ->orWhere('products.specification', 'LIKE', "%{$keyword}%");
            })
            ->where('products.status', 1)
                ->orderBy("price", "desc")
                ->paginate(12);
        }
        else {
            $products = Product::Join('product_categories as pc', 'products.id', '=', 'pc.product_id')
            ->where('pc.category_id', $category_id)
            ->where(function($query) use ($keyword)
            {
                $query->where('products.name', 'LIKE', "%{$keyword}%")
                ->orWhere('products.slug', 'LIKE', "%{$keyword}%")
                ->orWhere('products.summary', 'LIKE', "%{$keyword}%")
                ->orWhere('products.overview', 'LIKE', "%{$keyword}%")
                ->orWhere('products.description', 'LIKE', "%{$keyword}%")
                ->orWhere('products.specification', 'LIKE', "%{$keyword}%");
            })
            ->where('products.status', 1)
            ->orderBy("products.created_at", "desc")
            ->paginate(12);
        }
*/
        return $products;
    }

    /**
     * @param $orderBy
     * @param $keyword
     * @return mixed
     */
    public function findProductsByWords($keyword, $orderBy)
    {
        /*
        $annonces = Annonce::when($request->term, function ($query, $term) {
            return $query->where('title', 'like', "%{$term}%");
        })->when($request->categorie, function ($query, $categorie) {
            return $query->where('categorie', 'like', "%{$categorie}%");
        })->when($request->price && in_array($request->price, ['more-expensive', 'less-expensive']), function ($query) use ($request) {
            return $query->orderBy('price', $request->price == 'less-expensive' ? 'asc' : 'desc');
        }, function ($query) {
            return $query->orderByDesc('id');
        })->paginate(15);
        */

        $products = Product::where(function($query) use ($keyword)
                {
                    $query->where('name', 'LIKE', "%{$keyword}%")
                    ->orWhere('slug', 'LIKE', "%{$keyword}%")
                    ->orWhere('summary', 'LIKE', "%{$keyword}%")
                    ->orWhere('overview', 'LIKE', "%{$keyword}%")
                    ->orWhere('description', 'LIKE', "%{$keyword}%")
                    ->orWhere('specification', 'LIKE', "%{$keyword}%");
                })
                ->whereStatus(1)
                ->when(($orderBy == 'lowToHigh'), function ($query) {
                    return $query->orderBy("price", "asc");
                })
                ->when(($orderBy == 'highToLow'), function ($query) {
                    return $query->orderBy("price", "desc");
                })
                ->when(($orderBy == '' || $orderBy == 'lastest'), function ($query) {
                    return $query->orderBy("created_at", "desc");
                })
                ->paginate(12);

/*
        if($orderBy == 'lowToHigh') {
            $products = Product::where(function($query) use ($keyword)
                {
                    $query->where('name', 'LIKE', "%{$keyword}%")
                    ->orWhere('slug', 'LIKE', "%{$keyword}%")
                    ->orWhere('summary', 'LIKE', "%{$keyword}%")
                    ->orWhere('overview', 'LIKE', "%{$keyword}%")
                    ->orWhere('description', 'LIKE', "%{$keyword}%")
                    ->orWhere('specification', 'LIKE', "%{$keyword}%");
                })
                ->whereStatus(1)
                ->orderBy("price", "asc")
                ->paginate(12);
        }
        elseif($orderBy == 'highToLow') {
            $products = Product::where(function($query) use ($keyword)
                {
                    $query->where('name', 'LIKE', "%{$keyword}%")
                    ->orWhere('slug', 'LIKE', "%{$keyword}%")
                    ->orWhere('summary', 'LIKE', "%{$keyword}%")
                    ->orWhere('overview', 'LIKE', "%{$keyword}%")
                    ->orWhere('description', 'LIKE', "%{$keyword}%")
                    ->orWhere('specification', 'LIKE', "%{$keyword}%");
                })
                ->whereStatus(1)
                ->orderBy("price", "desc")
                ->paginate(12);
        }
        else {
            $products = Product::where(function($query) use ($keyword)
                {
                    $query->where('name', 'LIKE', "%{$keyword}%")
                    ->orWhere('slug', 'LIKE', "%{$keyword}%")
                    ->orWhere('summary', 'LIKE', "%{$keyword}%")
                    ->orWhere('overview', 'LIKE', "%{$keyword}%")
                    ->orWhere('description', 'LIKE', "%{$keyword}%")
                    ->orWhere('specification', 'LIKE', "%{$keyword}%");
                })
                ->whereStatus(1)
                ->orderBy("created_at", "desc")
                ->paginate(12);
        }
        */
        return $products;
    }


    /**
     * @param array $params
     * @return Product|mixed
     */
    public function createProduct(array $params)
    {
        try {
            $collection = collect($params);

            $featured = $collection->has('featured') ? 1 : 0;
            $status = $collection->has('status') ? 1 : 0;

            $merge = $collection->merge(compact('status', 'featured'));

            $product = new Product($merge->all());

            $product->save();

            if ($collection->has('categories')) {
                $product->categories()->sync($params['categories']);
            }
            return $product;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateProduct(array $params)
    {
        $product = $this->findProductById($params['product_id']);

        $collection = collect($params)->except('_token');

        $featured = $collection->has('featured') ? 1 : 0;
        $status = $collection->has('status') ? 1 : 0;

        $merge = $collection->merge(compact('status', 'featured'));

        $product->update($merge->all());

        if ($collection->has('categories')) {
            $product->categories()->sync($params['categories']);
        }

        return $product;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteProduct($id)
    {
        $product = $this->findProductById($id);

        $product->delete();

        return $product;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function findProductBySlug($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return $product;
    }


}