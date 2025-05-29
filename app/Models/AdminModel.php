<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
  public function Grafik()
  {
    return $this->db->table('rincian')
    ->join('jual','jual.no_faktur=rincian.no_faktor')
    ->where('month(jual.tgl_jual)',date('m'))
    ->where('year(jual.tgl_jual)',date('Y'))
    ->select('jual.tgl_jual')
    ->groupby('jual.tgl_jual')
    ->selectSum('rincian.total_harga')
    ->get()->getResultArray();
  }  

  public function pendapatanHariIni()
  {
    return $this->db->table('rincian')
    ->join('jual','jual.no_faktur=rincian.no_faktor')
    ->where('jual.tgl_jual',date('Y-m-d'))
    ->groupby('jual.tgl_jual')
    ->selectSum('rincian.total_harga')
    ->get()->getRowArray();
  }

  public function pendapatanBulanIni()
  {
    return $this->db->table('rincian')
    ->join('jual','jual.no_faktur=rincian.no_faktor')
    ->where('month(jual.tgl_jual)',date('m'))
    ->where('year(jual.tgl_jual)',date('Y'))
    ->groupby('month(jual.tgl_jual)')
    ->selectSum('rincian.total_harga')
    ->get()->getRowArray();
  }
  public function pendapatanTahunIni()
  {
    return $this->db->table('rincian')
    ->join('jual','jual.no_faktur=rincian.no_faktor')
    ->where('year(jual.tgl_jual)',date('Y'))
    ->groupby('year(jual.tgl_jual)')
    ->selectSum('rincian.total_harga')
    ->get()->getRowArray();
  }

  public function jumlahProduk()
  {
    return $this->db->table('produk')->countAll();
  }

  public function jumlahKategori()
  {
    return $this->db->table('kategori')->countAll();
  }

  public function jumlahJual()
  {
    return $this->db->table('jual')
        ->where('MONTH(tgl_jual)', date('m')) 
        ->where('YEAR(tgl_jual)', date('Y'))  
        ->countAllResults(); 
  
      }

  public function jumlahUser()
  {
    return $this->db->table('users')->countAll();
  }
}