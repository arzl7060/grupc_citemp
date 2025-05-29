<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
            'grafik' => $this->AdminModel->grafik(),
            'pendapatanHariIni' => $this->AdminModel->pendapatanHariIni(),
            'pendapatanBulanIni' => $this->AdminModel->pendapatanBulanIni(),
            'pendapatanTahunIni' => $this->AdminModel->pendapatanTahunIni(),
            'jumlahProduk' => $this->AdminModel->jumlahProduk(),
            'jumlahKategori' => $this->AdminModel->jumlahKategori(),
            'jumlahOrder' => $this->AdminModel->jumlahOrder(),
            'jumlahUser' => $this->AdminModel->jumlahUser(),
        ];
        return view('v_template', $data);
    }
    public function Setting()
    {
        $data = [
            'title' => 'Setting',
            'subtitle' => 'Setting',
            'menu' => 'setting',
            'submenu' => '',
            'page' => 'v_setting',
            'setting' => $this->AdminModel->detailData(),
        ];
        return view('v_template', $data);
    }

    public function updateSetting()
    {
        $data = [
            'id' => '1',
            'nama_toko' => $this->request->getPost('nama_toko'),
            'slogan' => $this->request->getPost('slogan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telpon' => $this->request->getPost('no_telpon'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
        $this->AdminModel->updateSetting($data); // post to db
        session()->setFlashdata('success', 'Setting berhasil diperbarui!');
        return redirect()->to('Admin/Setting');
    }
}
