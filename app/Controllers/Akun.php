<?php
    namespace App\Controllers;
    use App\Models\AkunModel;
    use App\Models\AktivitasAkunModel;
    use Ramsey\Uuid\Uuid;

    class Akun extends BaseController
    {
        public function index()
        {
            if (!session()->get('is_logged_in')) {
                return redirect()->to('/login');
            }

            $model = new AkunModel();
            $akun = $model->paginate(10, 'akun');

            $data = [
                'title' => 'Akun Pengguna',
                'akun' => $akun,
                'pager' => $model->pager
            ];

            return view('dashboard/dashboard', [
                'title' => $data['title'],
                'content' => view('akun/index', $data)
            ]);
        }

        public function aktivitas_akun()
        {
            if (!session()->get('is_logged_in')) {
                return redirect()->to('/login');
            }

            $model = new AktivitasAkunModel();
            $aktivitas_akun = $model->paginate(10, 'aktivitas_akun');

            $data = [
                'title' => 'Aktivitas Akun',
                'aktivitas_akun' => $aktivitas_akun,
                'pager' => $model->pager
            ];

            return view('dashboard/dashboard', [
                'title' => $data['title'],
                'content' => view('akun/aktivitas_akun', $data)
            ]);
        }

        public function detail($id)
        {
            $model = new AkunModel();
            $user = $model->where('id_user', $id)->first();

            if (!$user) {
                return $this->response->setStatusCode(404)->setJSON(['error' => 'Akun tidak ditemukan.']);
            }

            return $this->response->setJSON($user);
        }

        public function search()
        {
            $keyword = $this->request->getGet('q');
            $page    = $this->request->getGet('page') ?? 1;

            $model = new AkunModel();

            if ($keyword) {
                $query = $model->like('nama_lengkap', $keyword)
                            ->orLike('username', $keyword)
                            ->orLike('role', $keyword);
            } else {
                $query = $model;
            }

            $data = [
                'akun' => $query->paginate(10, 'akun', (int)$page),
                'pager' => $query->pager
            ];

            return view('akun/partial_table', $data);
        }

        public function store()
        {
            $model = new AkunModel();

            // Cek username unik
            $username = $this->request->getPost('username');
            if ($model->where('username', $username)->first()) {
                return redirect()->back()->with('error', 'Username sudah digunakan.');
            }

            $data = [
                'id_user'       => Uuid::uuid4()->toString(), // Generate UUID
                'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
                'username'      => $username,
                'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'role'          => $this->request->getPost('role'),
                'last_active'   => null
            ];

            $model->insert($data);
            catat_aktivitas(session('username'), 'Tambah Akun', 'Menambahkan user ' . $this->request->getPost('username'));
            
            return redirect()->to('/akun')->with('success', 'Akun berhasil ditambahkan.');
        }

        public function edit($id)
        {
            $model = new AkunModel();
            $user = $model->where('id_user', $id)->first(); // UUID pakai where

            if (!$user) {
                return $this->response->setStatusCode(404)->setJSON(['error' => 'Akun tidak ditemukan.']);
            }

            return $this->response->setJSON($user); // kirim data ke JS
        }

        public function update($id)
        {
            $model = new AkunModel();

            $data = [
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'username'     => $this->request->getPost('username'),
                'role'         => $this->request->getPost('role'),
            ];

            // Cek apakah password ingin diubah
            $password = $this->request->getPost('password');
            if (!empty($password)) {
                $data['password'] = password_hash($password, PASSWORD_DEFAULT);
            }

            $model->update($id, $data);
            catat_aktivitas(session('username'), 'Update Akun', 'Mengubah data user ' . $id);

            return redirect()->to('/akun')->with('success', 'Akun berhasil diperbarui.');
        }

        public function delete($id)
        {
            $model = new AkunModel();
            $akun = $model->where('id_user', $id)->first();
            if (!$akun) {
                return redirect()->to('/akun')->with('error', 'Akun tidak ditemukan.');
            }

            $model->delete($id);
            catat_aktivitas(session('username'), 'Hapus Akun', 'Menghapus user ID: ' . $id);

            return redirect()->to('/akun')->with('success', 'Akun berhasil dihapus.');
        }
    }
?>