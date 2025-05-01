<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Product extends BaseController
{
    public function index()
    {
        $data = [
            'page' => 'v_product',
        ];
        return view('v_template',$data);
    }
}
