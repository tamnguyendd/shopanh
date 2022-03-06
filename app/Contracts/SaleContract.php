<?php

namespace App\Contracts;

/**
 * Interface SaleContract
 * @package App\Contracts
 */
interface SaleContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listSales(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findSaleById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createSale(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateSale(array $params);

    /**
     * @param $id
     * @return bool
     */
    public function deleteSale($id);
}