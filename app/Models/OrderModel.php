<?php
namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders'; // Pastikan ini ada di dalam model OrderModel

    public function getOrdersWithUser()
    {
        return $this->select('orders.*, users.username')
            ->join('users', 'users.id = orders.id_kasir')
            ->findAll();
    }

}