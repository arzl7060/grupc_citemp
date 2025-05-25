<?php
namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    public function NoFaktor()
    {
        $tgl = date('Ymd'); // inisiasi format tgl
        $query = $this->db->query("SELECT MAX(RIGHT(no_faktor,4)) as no_urut from orders where DATE(tanggal)='$tgl'");
        $hasil = $query->getRowArray();
        if ($hasil['no_urut'] > 0) {
            $tmp = $hasil['no_urut'] + 1;
            $kd = sprintf("%04s", $tmp);
        } else {
            $kd = "560001"; // jika tidak sama, maka mulai dari
        }
        $no_faktor = date('Ymd') . $kd;
        return $no_faktor;
    }

    public function cekProduk($kode_produk)
    {
        return $this->db->table('produk')
            ->join('kategori', 'kategori.id_kategori=produk.id_kategori')
            ->join('satuan', 'satuan.id_satuan=produk.id_satuan')
            ->where('produk.kode_produk', $kode_produk)
            ->get()
            ->getRowArray();
    }
}