<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users_login';
    protected $allowedFields = ['username', 'password'];
    protected $useTimestamps = true;
}
