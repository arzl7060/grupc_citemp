<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenjualanModel;
class Penjualan extends BaseController
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
            'title' => 'Penjualan',
            'no_faktor' => $this->PenjualanModel->NoFaktor(),
        ];
        return view('v_penjualan2', $data);
    }

    public function cekProduk()
    {
        $kode_produk = $this->request->getPost('kode_produk');
        $produk = $this->PenjualanModel->cekProduk($kode_produk);
        if ($produk) {
            $data = [
                'nama_produk' => $produk['nama_produk'],
                'harga_jual' => $produk['harga_jual'],
                'nama_satuan' => $produk['nama_satuan'],
                'nama_kategori' => $produk['nama_kategori']
            ];

        } else {
            $data = [
                'nama_produk' => '',
                'harga_jual' => 0,
                'nama_satuan' => '',
                'nama_kategori' => ''
            ];
        }
        return $this->response->setJSON($data);
    }

}
