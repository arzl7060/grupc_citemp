<?php namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['user_id', 'tanggal_order', 'total', 'status', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'user_id'       => 'required|numeric',
        'tanggal_order' => 'required|valid_date',
        'total'         => 'required|numeric',
        'status'        => 'required|in_list[pending,selesai]'
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // Join dengan tabel users
    public function getOrdersWithUser()
    {
        return $this->select('orders.*, users.username')
                    ->join('users', 'users.id = orders.user_id')
                    ->findAll();
    }
}