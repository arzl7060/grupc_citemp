<?php
namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    public function allData()
    {
        return $this->db->table('produk')
            ->join('kategori', 'kategori.id_kategori=produk.id_kategori')
            ->join('satuan', 'satuan.id_satuan=produk.id_satuan')
            ->orderBy('produk.id', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function insertProduk($data)
    {
        $this->db->table('produk')->insert($data);
    }

    public function updateProduk($data)
    {
        $this->db->table('produk')->where('id', $data['id'])->update($data);
    }
    public function deleteProduk($data)
    {
        $this->db->table('produk')->where('id', $data['id'])->delete($data);
    }
}


