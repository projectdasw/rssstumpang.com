<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class UserLogModel extends Model
    {
        protected $table            = 'aktivitas_akun'; // atau sesuaikan nama tabelnya
        protected $primaryKey       = 'id_aktivitas';
        protected $useAutoIncrement = false;
        protected $allowedFields = ['id_aktivitas', 'tanggal', 'waktu', 'nama_akun', 'aktivitas', 'keterangan', 'ip_address', 'user_agent'];
    }
?>