<?php

namespace App\Models;
use CodeIgniter\Model;

class ActivityAccountModel extends Model
{
    protected $table      = 'aktivitas_akun';
    protected $primaryKey = 'id_aktivitas';
    protected $allowedFields = ['id_aktivitas', 'tanggal', 'waktu', 'nama_akun', 'aktivitas', 'keterangan', 'ip_address', 'user_agent'];
    protected $useAutoIncrement = false;
}
