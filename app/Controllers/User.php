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
        
        $data = $this->UserModel->findAll();
        return view('nama_view/',$data);
    }
}
