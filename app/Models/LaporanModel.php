<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    public function DataHarian($tgl)
    {
        return $this->db->table('rincian')
        ->join('produk','produk.kode_produk=rincian.kode_produk')
        ->join('jual','jual.no_faktur=rincian.no_faktor')
        ->where('jual.tgl_jual',$tgl)
        ->select('rincian.kode_produk')
        ->select('produk.nama_produk')
        ->select('rincian.harga_jual')
        ->groupBy('rincian.kode_produk')
        ->selectSum('rincian.qty')
        ->selectSum('rincian.total_harga')
        ->get()->getResultArray();
    } 

    public function DataBulanan($bulan,$tahun)
    {
        return $this->db->table('rincian')
        ->join('jual','jual.no_faktur=rincian.no_faktor')
        ->where('month(jual.tgl_jual)',$bulan)
        ->where('year(jual.tgl_jual)',$tahun)
        ->select('jual.tgl_jual')
        ->groupBy('jual.tgl_jual')
        ->selectSum('rincian.total_harga')
        ->get()->getResultArray();
    } 

    public function DataTahunan($tahun)
    {
        return $this->db->table('rincian')
        ->join('jual','jual.no_faktur=rincian.no_faktor')
        ->where('year(jual.tgl_jual)',$tahun)
        ->select('month(jual.tgl_jual) as bulan')
        ->groupBy('month(jual.tgl_jual)')
        ->selectSum('rincian.total_harga')
        ->get()->getResultArray();
    } 
}
