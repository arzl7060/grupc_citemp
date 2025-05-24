<?php
namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';      // Nama tabel utama
    protected $primaryKey = 'id_produk';   // Primary key tabel Anda (asumsi 'id_produk' bukan 'id')
    protected $useAutoIncrement = true;    // Default: true
    protected $returnType = 'array';       // Default: array. Bisa juga 'object'
    protected $useSoftDeletes = false;     // Default: false (true jika ingin soft delete)

    // Kolom yang diizinkan untuk di-insert atau di-update
    // PENTING: Semua kolom yang akan diisi dari user input harus ada di sini untuk keamanan (mass assignment)
    protected $allowedFields = ['kode_produk', 'nama_produk', 'id_kategori', 'harga_beli', 'harga_jual', 'stok', 'id_satuan']; // Contoh


    public function allData()
    {
        return $this->db->table('produk')
            ->join('kategori', 'kategori.id=produk.id_kategori')
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


