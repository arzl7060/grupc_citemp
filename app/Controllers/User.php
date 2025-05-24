<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

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
            'user' => $this->UserModel->allData(),
        ];
        return view('v_template', $data);
    }

    public function insertUser()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getPost('role'),
        ];
        $this->UserModel->insertUser($data); // post to db
        session()->setFlashdata('success', 'User berhasil ditambahkan!');
        return redirect()->to('User');
    }

    public function updateUser($id)
    {
        // 1. Ambil password yang di-submit dari form
        $submittedPassword = $this->request->getPost('password');
        $data = [
            'id' => $id,
            'username' => $this->request->getPost('username'),
            'role' => $this->request->getPost('role'),
        ];
        if (!empty($submittedPassword)) {
            $data['password'] = password_hash($submittedPassword, PASSWORD_DEFAULT);
        }
        $this->UserModel->updateUser($data);
        session()->setFlashdata('success', 'User berhasil diperbarui!');
        return redirect()->to('User');
    }

    public function deleteUser($id)
    {
        $data = [
            'id' => $id,
        ];
        $this->UserModel->deleteUser($data);
        session()->setFlashdata('success', 'User berhasil dihapus!');
        return redirect()->to('User');
    }

}

