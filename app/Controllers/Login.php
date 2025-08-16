<?php
    namespace App\Controllers;
    use Ramsey\Uuid\Uuid;
    use App\Models\LoginModel;
    use App\Models\UserLogModel;


    class Login extends BaseController
    {
        public function index()
        {
            if (session()->get('logged_in')) {
                return redirect()->to('/dashboard')->with('info', 'Anda sudah Login');
            }

            $data = [
                'title' => 'Login - Rumah Sakit Sumber Sentosa Tumpang Malang'
            ];
            
            return view('login/index', $data);
        }

        public function processLogin()
        {
            $session = session();
            $model = new LoginModel();
            $aktivitasModel = new UserLogModel();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $model->where('username', $username)->first();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $session->set([
                        'id' => $user['id_user'],
                        'username' => $user['username'],
                        'nama_akun' => $user['nama_lengkap'],
                        'role' => $user['role'],
                        'logged_in' => true,
                    ]);
                    
                    // Simpan data aktivitas login
                    $aktivitasModel->insert([
                        'id_aktivitas' => Uuid::uuid4()->toString(),
                        'tanggal'      => date('Y-m-d'),
                        'waktu'        => date('H:i:s'),
                        'nama_akun'    => $user['nama_lengkap'],
                        'aktivitas'    => 'login',
                        'keterangan'   => 'Berhasil login ke sistem',
                        'ip_address'   => $this->request->getIPAddress(),
                        'user_agent'   => $this->request->getUserAgent(),
                    ]);
                    return redirect()->to('/dashboard')->with('welcome', 'Selamat Datang, ' . $user['nama_lengkap']);
                } else {
                    return redirect()->back()->with('error', 'Username/Password yang Anda masukkan salah.');
                }
            } else {
                return redirect()->back()->with('error', 'Akun tidak ditemukan.');
            }
        }

        public function logout()
        {
            $session = session();
            $aktivitasModel = new UserLogModel();

            $session->setFlashdata('success', 'Anda berhasil Log Out');
            $aktivitasModel->insert([
                'id_aktivitas' => Uuid::uuid4()->toString(),
                'tanggal'      => date('Y-m-d'),
                'waktu'        => date('H:i:s'),
                'nama_akun'    => $session->get('nama_akun'),
                'aktivitas'    => 'logout',
                'keterangan'   => 'Berhasil logout dari sistem',
                'ip_address'   => $this->request->getIPAddress(),
                'user_agent'   => $this->request->getUserAgent(),
            ]);
            $session->remove(['id', 'username', 'nama_akun', 'role', 'logged_in']);
            return redirect()->to('/login');
        }
    }
?>