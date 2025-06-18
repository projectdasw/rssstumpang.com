<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class TestDB extends Controller
{
    public function index()
    {
        try {
            $db = Database::connect();
            if ($db->connect()) {
                echo "✅ Koneksi database berhasil.";
            }
        } catch (\Exception $e) {
            echo "❌ Gagal koneksi database: " . $e->getMessage();
        }
    }
}
