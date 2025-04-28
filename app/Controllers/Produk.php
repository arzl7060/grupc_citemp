<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use CodeIgniter\HTTP\ResponseInterface;
class Produk extends BaseController
{
    protected $ProdukModel;

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->ProdukModel = new ProdukModel();
    }
    public function index()
    {
        
        $data = $this->ProdukModel->findAll();
        return view('nama_view/',$data);
    }
}
