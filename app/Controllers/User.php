<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
class User extends BaseController
{
    protected $UserModel;

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->UserModel = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'User',
            'menu' => 'masterdata',
            'submenu' => 'user',
            'page' => 'v_user',
            $data = $this->UserModel->findAll()
        ];
        return view('v_template', $data);
    }

    public function insertUser(){
        session()->setFlashdata('success', 'User berhasil ditambahkan!');
        return redirect()->to('/v_user');
    }

    public function updateUser(){
        session()->setFlashdata('success', 'User berhasil diperbarui!');
        return redirect()->to('/v_user');
    }

    public function deleteUser(){
        session()->setFlashdata('success', 'User berhasil dihapus!');
        return redirect()->to('/v_user');
    }

}

