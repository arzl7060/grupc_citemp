<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Setting extends BaseController
{


    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor

    }
    public function index()
    {
        $data = [
            'title' => 'Setting',
            'subtitle' => '',
            'menu' => 'setting',
            'submenu' => '',
            'page' => 'v_setting',
        ];
        return view('v_template', $data);
    }



}
