<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;
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
            'kategori' => $this->KategoriModel->allData(),
        ];
        return view('v_template', $data);
    }

    public function insertKategori()
    {
        $data = ['nama_kategori' => $this->request->getPost('nama_kategori')];
        $this->KategoriModel->insertKategori($data); // post to db
        session()->setFlashdata('success', 'Kategori berhasil ditambahkan!');
        return redirect()->to('/v_kategori');
    }

    public function updateKategori($id)
    {
        $data = [
            'id' => $id,
            'nama_kategori' => $this->request->getPost('nama_kategori')
        ];
        $this->KategoriModel->updateKategori($data); // post to db
        session()->setFlashdata('success', 'Kategori berhasil diperbarui!');
        return redirect()->to('/v_kategori');
    }

    public function deleteKategori($id)
    {
        $data = [
            'id' => $id
        ];
        $this->KategoriModel->deleteKategori($data); // post to db
        session()->setFlashdata('success', 'Kategori berhasil dihapus!');
        return redirect()->to('/v_kategori');
    }

}

