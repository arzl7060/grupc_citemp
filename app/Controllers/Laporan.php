<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\KategoriModel;
use App\Models\SatuanModel;
class Laporan extends BaseController
{
    protected $ProdukModel;
    protected $KategoriModel;
    protected $SatuanModel;
    public function __construct()
    {
        $this->ProdukModel = new ProdukModel();
        $this->KategoriModel = new KategoriModel();
        $this->SatuanModel = new SatuanModel();
    }
    public function printProduk()
    {
        $data = [
            'title' => 'Laporan Data Produk',
            // 'subtitle' => 'Kategori',
            // 'menu' => 'masterdata',
            // 'submenu' => 'kategori',
            // 'page' => 'v_kategori',
            'produk' => $this->ProdukModel->allData(),
            // 'kategori' => $this->KategoriModel->allData(),
        ];
        return view('laporan/v_templatePrint', $data);
    }

}

