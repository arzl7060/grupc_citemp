<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderDetailModel extends Model
{
    protected $table = 'order_detail';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_order', 'id_produk', 'qty', 'harga_satuan', 'subtotal'];
}
