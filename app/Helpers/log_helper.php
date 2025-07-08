<?php
    use App\Models\AktivitasAkunModel;
    use Ramsey\Uuid\Uuid;

    if (!function_exists('catat_aktivitas')) {
        function catat_aktivitas($nama_akun, $aktivitas, $keterangan = '')
        {
            $model = new \App\Models\AktivitasAkunModel();

            $ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
            if ($ip === '::1') $ip = '127.0.0.1';

            $data = [
                'id_aktivitas' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'tanggal'      => date('Y-m-d'),
                'waktu'        => date('H:i:s'),
                'nama_akun'    => $nama_akun,
                'aktivitas'    => $aktivitas,
                'keterangan'   => $keterangan,
                'ip_address'   => $ip,
                'user_agent'   => $_SERVER['HTTP_USER_AGENT'] ?? '-'
            ];

            $model->insert($data);
        }
    }
?>