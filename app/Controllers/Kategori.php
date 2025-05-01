<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;
use CodeIgniter\HTTP\ResponseInterface;
class User extends BaseController
{
    protected $KategoriModel;

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->KategoriModel = new KategoriModel();
    }
    public function index()
    {
        
        $data = $this->KategoriModel->findAll();
        return view('nama_view/',$data);
    }
}
