<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SatuanModel;
class Satuan extends BaseController
{
    protected $SatuanModel;

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->SatuanModel = new SatuanModel();
    }
    public function index()
    {

        // 'order' = $this->OrderModel->allData();
        return view('v_penjualan2');
    }
}
