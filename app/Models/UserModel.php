<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function allData()
    {
        return $this->db->table('users')->get()->getResultArray();
    }

    public function insertUser($data)
    {
        $this->db->table('users')->insert($data);
    }

    public function updateUser($data)
    {
        $this->db->table('users')->where('id', $data['id'])->update($data);
    }
    public function deleteUser($data)
    {
        $this->db->table('users')->where('id', $data['id'])->delete($data);
    }

    public function loginUser($username, $password)
    {
        // Ambil data user berdasarkan username
        $user = $this->db->table('users')->where('username', $username)->get()->getRowArray();

        // Jika user ditemukan, verifikasi password
        if ($user && password_verify($password, $user['password'])) {
            return $user; // Kembalikan data user jika login berhasil
        }

        return false; // Kembalikan false jika login gagal
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