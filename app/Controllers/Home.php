<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
use Config\Services;        // Tambahkan ini untuk akses Services

class Home extends BaseController
{
    protected $UserModel; // Deklarasi properti untuk model

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->UserModel = new UserModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Login',
        ];
        return view('v_login', $data);
    }

    public function login()
    {
        // 1. Definisikan aturan validasi
        $rules = [
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi.'
                ]
            ]
        ];

        // 2. Jalankan validasi
        if (!$this->validate($rules)) {
            // Jika validasi gagal, kembalikan ke halaman login
            // dan kirimkan error ke view
            session()->setFlashdata('errors', $this->validator->getErrors());
            return redirect()->back()->withInput(); // withInput() untuk mempertahankan input lama
        }

        // Jika validasi berhasil, lanjutkan proses login
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Panggil method loginUser dari UserModel
        $user = $this->UserModel->loginUser($username, $password);

        if ($user) {
            // Set session data jika login berhasil
            session()->set('id_user', $user['id']);
            session()->set('username', $user['username']);
            session()->set('role', $user['role']);
            if ($user['role'] == 'admin') {
                return redirect()->to(base_url('Admin')); // Redirect ke halaman admin
            } else {
                return redirect()->to(base_url('Penjualan')); // Redirect ke halaman kasir
            }
        } else {
            // Set flashdata untuk pesan error jika login gagal
            session()->setFlashdata('error', 'Username atau password salah!');
            return redirect()->to(base_url('Home')); // Redirect kembali ke halaman login
        }
    }

    public function logout()
    {
        // Hapus session
        session()->remove('id_user');
        session()->remove('username');
        session()->remove('role');
        session()->setFlashdata('success', 'Anda telah logout!');
        return redirect()->to(base_url('Home')); // Redirect ke halaman login
    }
}