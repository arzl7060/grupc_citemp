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
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Produk',
            'menu' => 'masterdata',
            'submenu' => 'produk',
            'page' => 'v_produk',   
            $data = $this->ProdukModel->findAll()
        ];
        return view('v_template', $data);
    }

    public function insertData(){
        session()->setFlashdata('success', 'Produk berhasil ditambahkan!');
        return redirect()->to('/v_produk');
    }

    public function updateData(){
        session()->setFlashdata('success', 'Produk berhasil diperbarui!');
        return redirect()->to('/v_produk');
    }

    public function deleteData(){
        session()->setFlashdata('success', 'Produk berhasil dihapus!');
        return redirect()->to('/v_produk');
    }

}
