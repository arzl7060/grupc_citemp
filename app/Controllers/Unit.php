<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UnitModel;
class Unit extends BaseController
{
    protected $UnitModel;

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->UnitModel = new UnitModel();
    }
    public function index()
    {

        // $data = $this->UnitModel->findAll();
        // return view('nama_view/',$data);
    }
}
