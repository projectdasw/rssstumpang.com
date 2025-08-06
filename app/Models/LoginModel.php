<?php

namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table      = 'users_login';
    protected $primaryKey = 'id_user';

    protected $allowedFields = ['nama_lengkap', 'username', 'password', 'role'];
}
