<?php

namespace App\Controllers;

use App\Controllers\BaseController;
class Contact extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'About Us',
            'subtitle' => '',
            'menu' => 'about us',
            'submenu' => '',
            'page' => 'contact',
        ];
        return view('v_template', $data);
    }
}