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
        $cart = \Config\Services::cart();
        $data = [
            'title' => 'Penjualan2',
            'no_faktor' => $this->PenjualanModel->NoFaktor(),
            'cart' => $cart->contents(),
            'grand_total' => $cart->total(),
            'produk' => $this->PenjualanModel->allProduk(),
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
                'harga_beli' => $produk['harga_beli'],
                'nama_satuan' => $produk['nama_satuan'],
                'nama_kategori' => $produk['nama_kategori']
            ];

        } else {
            $data = [
                'nama_produk' => '',
                'harga_jual' => 0,
                'harga_beli' => 0,
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
                'nama_satuan' => $this->request->getPost('nama_satuan'),
                'modal' => $this->request->getPost('harga_beli'),
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
        return redirect()->to(base_url('Penjualan2'));
    }

    // Method untuk menghapus item dari keranjang belanja
    public function removeCart($rowid)
    {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        return redirect()->to('/penjualan2');
    }

    public function simpanTransaksi()
    {
        $cart = \Config\Services::cart();
        $produk = $cart->contents();
        $no_faktor = $this->PenjualanModel->NoFaktor();
        $dibayar = str_replace(',', '', $this->request->getPost('dibayar'));
        $kembalian = str_replace(',', '', $this->request->getPost('kembalian'));
        foreach ($produk as $key => $value) {
            $data = [
                'no_faktor' => $no_faktor,
                'kode_produk' => $value['id'],
                'modal' => $value['options']['modal'],
                'harga' => $value['price'],
                'qty' => $value['qty'],
                'total_harga' => $value['subtotal'],
                'untung' => ($value['price'] - $value['options']['modal']) * $value['qty'],
            ];
            $this->PenjualanModel->insertRinciPenjualan($data);
        }
        $data = [
            'no_faktor' => $no_faktor,
            'id_kasir' => session()->get('id_user'),
            'tanggal' => date('Y-m-d'),
            'jam' => date('H:i:s'),
            'total' => $cart->total(),
            'dibayar' => $dibayar,
            'kembalian' => $kembalian,
        ];
        $this->PenjualanModel->insertPenjualan($data);
        $cart->destroy();
        session()->setFlashdata('success', 'Transaksi berhasil disimpan!');
        return redirect()->to('Penjualan2');
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
