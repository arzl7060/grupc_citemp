<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    public function DataHarian($tgl)
    {
        return $this->db->table('rincian')
            ->join('produk', 'produk.kode_produk=rincian.kode_produk')
            ->join('orders', 'orders.no_faktor=rincian.no_faktor')
            ->where('orders.tanggal', $tgl)
            ->select('rincian.kode_produk')
            ->select('produk.nama_produk')
            ->select('rincian.harga')
            ->groupBy('rincian.kode_produk')
            ->selectSum('rincian.qty')
            ->selectSum('rincian.total_harga')
            ->get()->getResultArray();
    }

    public function DataBulanan($bulan, $tahun)
    {
        return $this->db->table('rincian')
            ->join('orders', 'orders.no_faktor=rincian.no_faktor')
            ->where('month(orders.tanggal)', $bulan)
            ->where('year(orders.tanggal)', $tahun)
            ->select('orders.tanggal')
            ->groupBy('orders.tanggal')
            ->selectSum('rincian.total_harga')
            ->get()->getResultArray();
    }

    public function DataTahunan($tahun)
    {
        return $this->db->table('rincian')
            ->join('orders', 'orders.no_faktor=rincian.no_faktor')
            ->where('year(orders.tanggal)', $tahun)
            ->select('month(orders.tanggal) as bulan')
            ->groupBy('month(orders.tanggal)')
            ->selectSum('rincian.total_harga')
            ->get()->getResultArray();
    }
}
