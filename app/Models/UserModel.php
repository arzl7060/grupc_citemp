<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function allData()
    {
        return $this->db->table('users')->get()->getResultArray();
    }




    // Hash password sebelum menyimpan
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (!isset($data['data']['password']))
            return $data;

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }
}