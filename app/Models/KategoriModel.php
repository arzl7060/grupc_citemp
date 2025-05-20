<?php
namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    // protected $table = 'kategori';
    // protected $primaryKey = 'id';
    // protected $returnType = 'array';
    // protected $useSoftDeletes = false;
    // protected $allowedFields = ['nama_kategori'];
    // protected $validationRules = [
    //     'nama_kategori' => 'required|min_length[3]|max_length[100]'
    // ];
    // protected $validationMessages = [];
    // protected $skipValidation = false;

    public function allData()
    {
        return $this->db->table('kategori')->get()->getResultArray();
    }

    public function insertKategori($data)
    {
        $this->db->table('kategori')->insert($data);
    }

    public function updateKategori($data)
    {
        $this->db->table('kategori')->where('id', $data['id'])->update($data);
    }
    public function deleteKategori($data)
    {
        $this->db->table('kategori')->where('id', $data['id'])->delete($data);
    }
}