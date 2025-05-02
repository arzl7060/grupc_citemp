<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;
use CodeIgniter\HTTP\ResponseInterface;
class Kategori extends BaseController
{
    protected $KategoriModel;

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->KategoriModel = new KategoriModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Kategori',
            'subtitle' => '',
            'menu' => 'kategori',
            'page' => 'v_kategori',
            $data = $this->KategoriModel->findAll()
        ];
        return view('v_template', $data);
    }



}
