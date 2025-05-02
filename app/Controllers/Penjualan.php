<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use CodeIgniter\HTTP\ResponseInterface;
class Penjualan extends BaseController
{
    protected $OrderModel;

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->OrderModel = new OrderModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Penjualan',
            'subtitle' => '',
            'menu' => 'penjualan',
            'page' => 'v_penjualan',
            $data = $this->OrderModel->findAll()
        ];
        return view('v_template', $data);
    }



}
