<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
// use App\Models\ProdukModel;
// use App\Models\AdminModel;
use App\Models\LaporanModel;


class Laporan extends BaseController
{
    protected $LaporanModel;
    
    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        // $this->ProdukModel = new ProdukModel();
        // $this->AdminModel = new AdminModel();
        $this->LaporanModel = new LaporanModel();
    }

    public function LaporanHarian()
    {
        $data = [
            'title' => 'Laporan',
            'subtitle' => 'Laporan Harian',
            'menu' => 'laporan',
            'submenu' => 'laporan-harian',
            'page' => 'laporan/v_laporan_harian',
        ];
        return view('v_template', $data);
    }

    public function viewLaporanHarian()
    {
        $tgl = $this->request->getPost('tgl'); 
        $data = [
            'title' => 'Laporan Harian Penjualan',
            'dataharian' => $this->LaporanModel->DataHarian($tgl),
            'tgl'=> $tgl,
        ];
        $response = [
            'data' => view('laporan/v_table_laporan_harian',$data)
        ];
        echo json_encode($response);
        // echo dd($this->LaporanModel->DataHarian($tgl));
    }   

    public function PrintLaporanHarian($tgl)
    {
        $data = [
            'title' => 'Laporan Harian Penjualan',
            'page' => 'laporan/v_print_lap_harian',
            'dataharian' => $this->LaporanModel->DataHarian($tgl),
            'tgl'=> $tgl,
        ];
        return view('laporan/v_temp_print_laporan', $data);
    }

    public function LaporanBulanan()
    {
        $data = [
            'title' => 'Laporan',
            'subtitle' => 'Laporan Bulanan',
            'menu' => 'laporan',
            'submenu' => 'laporan-bulanan',
            'page' => 'laporan/v_laporan_bulanan',
        ];
        return view('v_template', $data);
    }

    public function viewLaporanBulanan()
    {
        $bulan = $this->request->getPost('bulan'); 
        $tahun = $this->request->getPost('tahun');
        $data = [
            'title' => 'Laporan Bulanan Penjualan',
            'databulanan' => $this->LaporanModel->DataBulanan($bulan,$tahun),
            'bulan'=> $bulan,
            'tahun'=> $tahun,
        ];
        $response = [
            'data' => view('laporan/v_table_laporan_bulanan',$data)
        ];
        echo json_encode($response);
        // echo dd($this->LaporanModel->DataHarian($tgl));
    }   

    public function PrintLaporanBulanan($bulan,$tahun)
    {
        $data = [
            'title' => 'Laporan Bulanan Penjualan',
            'page' => 'laporan/v_print_lap_bulanan',
            'databulanan' => $this->LaporanModel->DataBulanan($bulan,$tahun),
            'bulan'=> $bulan,
            'tahun'=> $tahun,
        ];
        return view('laporan/v_temp_print_laporan', $data);
    }

    public function LaporanTahunan()
    {
        $data = [
            'title' => 'Laporan',
            'subtitle' => 'Laporan Tahunan',
            'menu' => 'laporan',
            'submenu' => 'laporan-tahunan',
            'page' => 'laporan/v_laporan_tahunan',
        ];
        return view('v_template', $data);
    }

    public function viewLaporanTahunan()
    {
        $tahun = $this->request->getPost('tahun');
        $data = [
            'title' => 'Laporan Tahunan Penjualan',
            'datatahunan' => $this->LaporanModel->DataTahunan($tahun),
            'tahun'=> $tahun,
        ];
        $response = [
            'data' => view('laporan/v_table_laporan_tahunan',$data)
        ];
        echo json_encode($response);
    }   

    public function PrintLaporanTahunan($tahun)
    {
        $data = [
            'title' => 'Laporan Tahunan Penjualan',
            'page' => 'laporan/v_print_lap_tahunan',
            'datatahunan' => $this->LaporanModel->DataTahunan($tahun),
            'tahun'=> $tahun,
        ];
        return view('laporan/v_temp_print_laporan', $data);
    }
}