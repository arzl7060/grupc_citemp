<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
class Setting extends BaseController
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
            'title' => 'Setting',
            'subtitle' => '',
            'menu' => 'setting',
            'submenu' => '',
            'page' => 'v_setting',
            $data = $this->UserModel->findAll()
        ];
        return view('v_template', $data);
    }



}
