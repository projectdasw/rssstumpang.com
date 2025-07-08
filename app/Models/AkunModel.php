<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class AkunModel extends Model
    {
        protected $table      = 'users_login';
        protected $primaryKey = 'id_user';
        protected $allowedFields = ['id_user', 'nama_lengkap', 'username', 'password', 'role', 'last_active'];
        protected $returnType    = 'array';
        public    $useTimestamps = false;
    }
?>