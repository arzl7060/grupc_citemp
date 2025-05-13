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
            'title' => 'Master Data',
            'subtitle' => 'Kategori',
            'menu' => 'masterdata',
            'submenu' => 'kategori',
            'page' => 'v_kategori',
            $data = $this->KategoriModel->findAll()
        ];
        return view('v_template', $data);
    }

    public function insertKategori(){
        session()->setFlashdata('success', 'Kategori berhasil ditambahkan!');
        return redirect()->to('/v_kategori');
    }

    public function updateKategori(){
        session()->setFlashdata('success', 'Kategori berhasil diperbarui!');
        return redirect()->to('/v_kategori');
    }

    public function deleteKategori(){
        session()->setFlashdata('success', 'Kategori berhasil dihapus!');
        return redirect()->to('/v_kategori');
    }

}

