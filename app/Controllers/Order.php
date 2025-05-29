<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class Order extends BaseController
{
    protected $OrderModel;
    protected $AdminModel;

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->OrderModel = new OrderModel();
        $this->AdminModel = new \App\Models\AdminModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Transaksi',
            'subtitle' => '',
            'menu' => 'transaksi',
            'submenu' => '',
            'page' => 'v_order',
            'order' => $this->OrderModel->getOrdersWithUser(),
        ];
        return view('v_template', $data);
    }

    public function printOrder()
    {
        $data = [
            'title' => 'Laporan Data Order',
            'menu' => 'laporan',
            'page' => 'laporan/v_printDataOrder',
            'order' => $this->OrderModel->getOrdersWithUser(),
            'web' => $this->AdminModel->detailData(),
        ];
        return view('laporan/v_templatePrint', $data);
    }

}
