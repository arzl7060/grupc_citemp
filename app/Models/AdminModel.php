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

}