<?php

namespace App\Models;
use CodeIgniter\Model;

class AccountDataModel extends Model
{
    protected $table      = 'users_login';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['id_user', 'nama_lengkap', 'username', 'password', 'role', 'last_active', 'created_by', 'updated_by'];
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;

    // Otomatis hash password saat insert/update
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (!isset($data['data']['password'])) return $data;
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }
}
