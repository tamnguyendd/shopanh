<?php

namespace App\Contracts;

interface OrderContract
{
    public function storeOrderDetails($params, $payment_method, $error);

    public function listOrders(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    public function findOrderByNumber($orderNumber);

    public function findOrdersByUser($user_id);

    
}