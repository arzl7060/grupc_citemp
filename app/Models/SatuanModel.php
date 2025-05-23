<?php

namespace App\Models;

use CodeIgniter\Model;

class SatuanModel extends Model
{
    public function allData()
    {
        return $this->db->table('satuan')->get()->getResultArray();
    }

    public function insertSatuan($data)
    {
        $this->db->table('satuan')->insert($data);
    }

    public function updateSatuan($data)
    {
        $this->db->table('satuan')->where('id', $data['id'])->update($data);
    }
    public function deleteSatuan($data)
    {
        $this->db->table('satuan')->where('id', $data['id'])->delete($data);
    }
}
