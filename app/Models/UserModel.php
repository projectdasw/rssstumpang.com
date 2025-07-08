<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users_login';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['id_user', 'nama_lengkap', 'username', 'password'];
    protected $useAutoIncrement = false; // karena pakai UUID
    protected $returnType = 'array';
}
?>