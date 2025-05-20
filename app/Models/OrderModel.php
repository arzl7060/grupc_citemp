<?php
namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['no_faktor', 'id_kasir', 'tanggal', 'jam', 'total', 'status', 'kembalian'];

    protected $useTimestamps = false;

    protected $validationRules = [
        'no_faktor' => 'required',
        'id_kasir' => 'required|numeric',
        'tanggal' => 'required|valid_date',
        'jam' => 'required|valid_time',
        'total' => 'required|numeric',
        'status' => 'required|in_list[pending,selesai]',
        'kembalian' => 'required|numeric'
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;

    // Join dengan tabel users
    public function getOrdersWithUser()
    {
        return $this->select('orders.*, users.username')
            ->join('users', 'users.id = orders.id_kasir')
            ->findAll();
    }
}