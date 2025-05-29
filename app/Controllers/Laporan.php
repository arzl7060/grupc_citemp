<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\KategoriModel;
use App\Models\SatuanModel;
use App\Models\AdminModel;
class Laporan extends BaseController
{
    protected $ProdukModel;
    protected $KategoriModel;
    protected $SatuanModel;
    protected $AdminModel;
    public function __construct()
    {
        $this->ProdukModel = new ProdukModel();
        $this->KategoriModel = new KategoriModel();
        $this->SatuanModel = new SatuanModel();
        $this->AdminModel = new AdminModel();
    }
    public function printProduk()
    {
        $data = [
            'title' => 'Laporan Data Produk',
            // 'subtitle' => 'Kategori',
            'menu' => 'laporan',
            // 'submenu' => 'kategori',
            'page' => 'laporan/v_printDataProduk',
            'produk' => $this->ProdukModel->allData(),
            'web' => $this->AdminModel->detailData(),
            // 'kategori' => $this->KategoriModel->allData(),
        ];
        return view('laporan/v_templatePrint', $data);
    }

}

