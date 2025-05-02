<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'subtitle' => '',
            'page' => 'dashboard',
            'menu' => 'dashboard',

        ];
        return view('v_template', $data);
    
    }
}
