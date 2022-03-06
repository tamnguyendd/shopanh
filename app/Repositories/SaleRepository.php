<?php

namespace App\Repositories;

use App\Models\Sale;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Contracts\SaleContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Illuminate\Support\Facades\Log;

/**
 * Class CategoryRepository
 *
 * @package \App\Repositories
 */
class SaleRepository extends BaseRepository implements SaleContract
{
    use UploadAble;

    /**
     * CategoryRepository constructor.
     * @param Sale $model
     */
    public function __construct(Sale $model)
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
    public function listSales(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findSaleById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Sale|mixed
     */
    public function createSale(array $params)
    {
        try {
            $collection = collect($params);

            $active = $collection->has('active') ? 1 : 0;

            $merge = $collection->merge(compact('active'));

            $sale = new Sale($merge->all());

            $sale->save();

            return $sale;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateSale(array $params)
    {
        $sale = $this->findSaleById($params['id']);

        $collection = collect($params)->except('_token');

        $active = $collection->has('active') ? 1 : 0;

        $merge = $collection->merge(compact('active'));

        $sale->update($merge->all());

        return $sale;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteSale($id)
    {
        $sale = $this->findSaleById($id);

        $sale->delete();

        return $sale;
    }
}