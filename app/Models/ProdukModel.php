<?php
namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kode_produk', 'id_kategori', 'nama_produk', 'harga_beli', 'harga_jual', 'id_satuan', 'stok'];

    protected $useTimestamps = false;

    protected $validationRules = [
        'kode_produk' => 'required|min_length[3]|max_length[100]',
        'id_kategori' => 'required|numeric',
        'nama_produk' => 'required|min_length[3]|max_length[100]',
        'harga_beli' => 'required|numeric',
        'harga_jual' => 'required|numeric',
        'id_satuan' => 'required|numeric',
        'stok' => 'required|numeric'
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;

    // Join dengan tabel kategori
    public function getProdukWithKategori()
    {
        return $this->select('produk.*, kategori.nama_kategori')
            ->join('kategori', 'kategori.id = produk.id_kategori')
            ->findAll();
    }
}