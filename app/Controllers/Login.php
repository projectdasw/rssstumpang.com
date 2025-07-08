<?php
    namespace App\Controllers;
    use App\Models\UserModel;

    class Login extends BaseController
    {
        public function index()
        {
            return view('login_view');
        }

        public function proses()
        {
            date_default_timezone_set("Asia/Jakarta");
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $userModel = new UserModel();
            $user = $userModel->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Login berhasil → simpan sesi
                session()->set([
                    'user_id'       => $user['id_user'],
                    'nama_lengkap'  => $user['nama_lengkap'],
                    'username'      => $user['username'],
                    'role'          => $user['role'],
                    'is_logged_in'  => true
                ]);

                // ✅ Update last_active di database
                $db = \Config\Database::connect();
                $db->table('users_login')
                ->where('id_user', $user['id_user'])
                ->update(['last_active' => date('Y-m-d H:i:s')]);

                catat_aktivitas($username, 'Login', 'Berhasil login ke sistem');
                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Username atau password salah');
            }
        }

        public function logout()
        {
            catat_aktivitas(session('username'), 'Logout', 'Keluar dari sistem');

            session()->destroy();
            return redirect()->to('/login');
        }
    }
?>
