<?php
namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{

    public function detailData()
    {
        return $this->db->table('setting')
            ->where('id', '1')
            ->get()
            ->getRowArray();
    }

    public function updateSetting($data)
    {
        $this->db->table('setting')->where('id', $data['id'])->update($data);
    }

    public function grafik()
    {
        return $this->db->table('rincian')
            ->join('orders', 'orders.no_faktor=rincian.no_faktor')
            ->where('month(orders.tanggal)', date('m'))
            ->where('year(orders.tanggal)', date('Y'))
            ->select('orders.tanggal')
            ->groupBy('orders.tanggal')
            ->selectSum('rincian.total_harga')
            ->selectSum('rincian.untung')
            ->get()->getResultArray();
    }
    public function pendapatanHariIni()
    {
        $result = $this->db->table('rincian')
            ->join('orders', 'orders.no_faktor=rincian.no_faktor')
            ->where('(orders.tanggal)', date('Y-m-d'))
            ->groupBy('orders.tanggal')
            ->selectSum('rincian.total_harga')
            ->get()->getRowArray();

        return $result ?? ['total_harga' => 0];
    }
    public function pendapatanBulanIni()
    {
        $result = $this->db->table('rincian')
            ->join('orders', 'orders.no_faktor=rincian.no_faktor')
            ->where('month(orders.tanggal)', date('m'))
            ->where('year(orders.tanggal)', date('Y'))
            ->groupBy('month(orders.tanggal)')
            ->selectSum('rincian.total_harga')
            ->get()->getRowArray();


        return $result ?? ['total_harga' => 0];
    }
    public function pendapatanTahunIni()
    {
        $result = $this->db->table('rincian')
            ->join('orders', 'orders.no_faktor=rincian.no_faktor')
            ->where('year(orders.tanggal)', date('Y'))
            ->groupBy('year(orders.tanggal)')
            ->selectSum('rincian.total_harga')
            ->get()->getRowArray();

        return $result ?? ['total_harga' => 0];
    }
    public function jumlahProduk()
    {
        return $this->db->table('produk')
            ->countAllResults();
    }

    public function jumlahKategori()
    {
        return $this->db->table('kategori')
            ->countAllResults();
    }

    public function jumlahUser()
    {
        return $this->db->table('users')
            ->countAllResults();
    }

    public function jumlahOrder()
    {
        return $this->db->table('orders')
            ->countAllResults();
    }
}