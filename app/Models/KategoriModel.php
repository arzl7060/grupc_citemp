<?php
namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama_kategori'];

    protected $useTimestamps = false;

    protected $validationRules = [
        'nama_kategori' => 'required|min_length[3]|max_length[100]'
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;
}