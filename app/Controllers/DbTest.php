<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;
    use Config\Database;

    class DbTest extends Controller
    {
        public function index()
        {
            try {
                $db = Database::connect();
                if ($db->connect()) {
                    echo "✅ Koneksi ke database berhasil!";
                } else {
                    echo "❌ Koneksi gagal!";
                }
            } catch (\Exception $e) {
                echo "❌ Error: " . $e->getMessage();
            }
        }
    }
?>