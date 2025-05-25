<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenjualanModel;
class Penjualan2 extends BaseController
{
    protected $PenjualanModel;

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->PenjualanModel = new PenjualanModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Penjualan2',
            'no_faktor' => $this->PenjualanModel->NoFaktor(),
        ];
        return view('v_penjualan2', $data);
    }



}
