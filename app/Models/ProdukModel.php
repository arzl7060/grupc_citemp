<?php namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama_produk', 'kategori_id', 'harga', 'stok', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'nama_produk' => 'required|min_length[3]|max_length[100]',
        'kategori_id' => 'required|numeric',
        'harga'       => 'required|numeric',
        'stok'        => 'required|numeric'
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // Join dengan tabel kategori
    public function getProdukWithKategori()
    {
        return $this->select('produk.*, kategori.nama_kategori')
                    ->join('kategori', 'kategori.id = produk.kategori_id')
                    ->findAll();
    }
}