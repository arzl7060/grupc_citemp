<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AdminModel;

class Admin extends BaseController
{   
    protected $AdminModel;

    public function __construct()
    {
        $this->AdminModel = new AdminModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'subtitle' => '',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'dashboard',
            'grafik' => $this->AdminModel->Grafik(),
            'p_hari_ini' => $this->AdminModel->pendapatanHariIni(),
            'p_bulan_ini' => $this->AdminModel->pendapatanBulanIni(),
            'p_tahun_ini' => $this->AdminModel->pendapatanTahunIni(),
            'jml_produk' => $this->AdminModel->jumlahProduk(),
            'jml_kategori' => $this->AdminModel->jumlahKategori(),
            'jml_jual' => $this->AdminModel->jumlahJual(),
            'jml_user' => $this->AdminModel->jumlahUser(),
        ];
        return view('v_template', $data);

    }

    public function Cek()
    {
        echo dd($this->AdminModel->pendapatanHariIni());
    }
}
