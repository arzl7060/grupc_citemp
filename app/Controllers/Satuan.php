<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SatuanModel;
class Satuan extends BaseController
{
    protected $SatuanModel;

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->SatuanModel = new SatuanModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Satuan',
            'menu' => 'masterdata',
            'submenu' => 'satuan',
            'page' => 'v_satuan',
            'satuan' => $this->SatuanModel->allData(),
        ];
        return view('v_template', $data);
    }

    public function insertSatuan()
    {
        $data = ['nama_satuan' => $this->request->getPost('nama_satuan')];
        $this->SatuanModel->insertSatuan($data); // post to db
        session()->setFlashdata('success', 'Satuan berhasil ditambahkan!');
        return redirect()->to('Satuan');
    }

    public function updateSatuan($id_satuan)
    {
        $data = [
            'id_satuan' => $id_satuan,
            'nama_satuan' => $this->request->getPost('nama_satuan')
        ];
        $this->SatuanModel->updateSatuan($data); // post to db
        session()->setFlashdata('success', 'Satuan berhasil diperbarui!');
        return redirect()->to('Satuan');
    }

    public function deleteSatuan($id_satuan)
    {
        $data = [
            'id_satuan' => $id_satuan,
        ];
        $this->SatuanModel->deleteSatuan($data); // post to db
        session()->setFlashdata('success', 'Satuan berhasil dihapus!');
        return redirect()->to('Satuan');
    }

}

