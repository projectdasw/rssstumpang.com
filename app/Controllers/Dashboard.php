<?php
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use CodeIgniter\API\ResponseTrait;

    class Dashboard extends BaseController
    {
        use ResponseTrait;

        public function index()
        {
            if (!session()->get('is_logged_in')) {
                return redirect()->to('/login');
            }

            // Update last_active user yang sedang login
            $this->updateLastActive();

            // Kirim halaman utama dashboard
            $data = [
                'title' => 'Dashboard',
            ];

            return view('dashboard/dashboard', $data);
        }

        public function userStatusJson()
        {
            $result = $this->getUserActivityStatus();
            return $this->respond($result);
        }

        protected function updateLastActive()
        {
            if (session()->get('id_user')) {
                $db = \Config\Database::connect();
                $db->table('users_login')
                ->where('id_user', session()->get('id_user'))
                ->update(['last_active' => date('Y-m-d H:i:s')]);
            }
        }

        private function getUserActivityStatus()
        {
            $db = \Config\Database::connect();
            $users = $db->table('users_login')->get()->getResult();

            $result = [];
            foreach ($users as $user) {
                if (empty($user->last_active)) {
                    $result[] = [
                        'nama' => $user->nama_lengkap,
                        'status' => 'Belum pernah aktif'
                    ];
                    continue;
                }

                $lastActive = strtotime($user->last_active);

                if (!$lastActive) {
                    $result[] = [
                        'nama' => $user->nama_lengkap,
                        'status' => 'Format waktu salah'
                    ];
                    continue;
                }

                $now = time();
                $diffMinutes = floor(($now - $lastActive) / 60);

                $result[] = [
                    'nama' => $user->nama_lengkap,
                    'status' => ($diffMinutes <= 5) ? 'online' : $diffMinutes . ' menit lalu'
                ];
            }

            return $result;
        }
    }
?>