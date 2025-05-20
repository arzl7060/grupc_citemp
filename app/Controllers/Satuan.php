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

        // $data = $this->SatuanModel->findAll();
        // return view('nama_view/',$data);
    }
}
