<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use CodeIgniter\HTTP\ResponseInterface;
class Order extends BaseController
{
    protected $OrderModel;

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->OrderModel = new OrderModel();
    }
    public function index()
    {
        
        $data = $this->OrderModel->findAll();
        return view('nama_view/',$data);
    }

}
