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
            // 'cart' => $cart->contens(),
            // 'grand_total' => $cart->total(),
            // 'produk' => $this->PenjualanModel->allProduk()
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

    public function insertCart()
    {
        $cart = \Config\Services::cart();
        $cart->insert([
            'id' => $this->request->getPost('kode_produk'),
            'qty' => $this->request->getPost('qty'),
            'price' => $this->request->getPost('harga_jual'),
            'name' => $this->request->getPost('nama_produk'),
            'options' => [
                'nama_kategori' => $this->request->getPost('nama_kategori'),
                'nama_satuan' => $this->request->getPost('nama_satuan')
            ]
        ]);
        return redirect()->to('/penjualan2');
    }

    public function viewCart()
    {
        $cart = \Config\Services::cart();
        $data = $cart->contents();
        echo dd($data);
    }
    public function resetCart()
    {
        $cart = \Config\Services::cart();
        $cart->destroy();
        return redirect()->to('/penjualan2');
    }

    // Method untuk menghapus item dari keranjang belanja
    public function removeCart($id_row)
    {
        $cart = \Config\Services::cart();
        $cart->remove($id_row);
        return redirect()->to('/penjualan2');
    }

    // public function updateCart()
    // {
    //     $cart = \Config\Services::cart();
    //     $kode_produk = $this->request->getPost('kode_produk');
    //     $qty = $this->request->getPost('qty');
    //     $cart->update([
    //         'rowid' => $kode_produk,
    //         'qty' => $qty
    //     ]);
    //     return redirect()->to('/penjualan2');
    // }
}
