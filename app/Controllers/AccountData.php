<?php
    namespace App\Controllers;
    use Ramsey\Uuid\Uuid;
    use App\Models\AccountDataModel;
    use App\Models\UserLogModel;

    class AccountData extends BaseController
    {
        public function index() {
            if (!session()->get('logged_in')) {
                return redirect()->to('/login')->with('info', 'Silahkan Login terlebih dahulu');
            }

            $model = new AccountDataModel();

            // Ambil keyword pencarian
            $keyword = $this->request->getGet('keyword');

            if ($keyword) {
                $model->like('nama_lengkap', $keyword)
                      ->orLike('username', $keyword);
            }

            // pagination
            $data = [
                'title'         => 'Data Akun Pengguna - Rumah Sakit Sumber Sentosa Tumpang Malang',
                'content_title' => 'Data Akun Pengguna',
                'icon'          => 'fa-solid fa-users',
                'user'          => session()->get('nama_akun'),
                'role'          => session()->get('role'),
                'data_akun'     => $model->paginate(10, 'data_akun'),
                'pager'         => $model->pager,
                'total_data'    => $model->countAllResults(false),
                'keyword'       => $keyword,
            ];
            
            return view('data_akun/index', $data);

            // Cache Setup
            $this->cachePage($n);
        }

        public function save()
        {
            $model = new AccountDataModel();
            $aktivitasModel = new UserLogModel();

            $data = [
                'id_user'     => Uuid::uuid4()->toString(),
                'nama_lengkap'=> $this->request->getPost('nama_lengkap'),
                'username'    => $this->request->getPost('username'),
                'password'    => $this->request->getPost('password'),
                'role'        => $this->request->getPost('role'),
                'created_by'  => session()->get('username')
            ];

            $model->insert($data);
            
            // Simpan data aktivitas tambah data
            $aktivitasModel->insert([
                'id_aktivitas' => Uuid::uuid4()->toString(),
                'tanggal'      => date('Y-m-d'),
                'waktu'        => date('H:i:s'),
                'nama_akun'    => session()->get('nama_akun'),
                'aktivitas'    => 'tambah data',
                'keterangan'   => session()->get('nama_akun') . ' telah menambahkan akun baru bernama ' . $this->request->getPost('nama_lengkap'),
                'ip_address'   => $this->request->getIPAddress(),
                'user_agent'   => $this->request->getUserAgent(),
            ]);
            
            return redirect()->to('/data_akun')->with('success', 'Akun berhasil ditambahkan');
        }

        public function update()
        {
            $akunModel = new AccountDataModel();
            $aktivitasModel = new UserLogModel();
            $id_user = $this->request->getPost('id_user');

            $data = [
                'username'     => $this->request->getPost('username'),
                'password'     => $this->request->getPost('password'),
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'role'         => $this->request->getPost('role'),
                'updated_by'   => session()->get('username')
            ];

            $akunModel->update($id_user, $data);

            // Simpan data aktivitas update data
            $aktivitasModel->insert([
                'id_aktivitas' => Uuid::uuid4()->toString(),
                'tanggal'      => date('Y-m-d'),
                'waktu'        => date('H:i:s'),
                'nama_akun'    => session()->get('nama_akun'),
                'aktivitas'    => 'update data',
                'keterangan'   => session()->get('nama_akun') . ' telah memperbarui data akun ' . $this->request->getPost('nama_lengkap'),
                'ip_address'   => $this->request->getIPAddress(),
                'user_agent'   => $this->request->getUserAgent(),
            ]);

            return redirect()->to('/data_akun')->with('success', 'Data akun berhasil diperbarui');
        }

        public function disabled_acc()
        {
            $akunModel = new AccountDataModel();
            $aktivitasModel = new UserLogModel();
            $id_user = $this->request->getPost('id_user');

            $data = [
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'disabled_at' => date('Y-m-d H:i:s'),
                'disabled_by' => session()->get('username')
            ];

            $akunModel->update($id_user, $data);

            // Simpan data aktivitas update data
            $aktivitasModel->insert([
                'id_aktivitas' => Uuid::uuid4()->toString(),
                'tanggal'      => date('Y-m-d'),
                'waktu'        => date('H:i:s'),
                'nama_akun'    => session()->get('nama_akun'),
                'aktivitas'    => 'nonaktifkan akun',
                'keterangan'   => session()->get('nama_akun') . ' telah menonaktifkan akun ' . $this->request->getPost('nama_lengkap'),
                'ip_address'   => $this->request->getIPAddress(),
                'user_agent'   => $this->request->getUserAgent(),
            ]);

            return redirect()->to('/data_akun')->with('success', 'Data akun berhasil dinonaktifkan');
        }

        public function restore_acc()
        {
            $akunModel = new AccountDataModel();
            $aktivitasModel = new UserLogModel();
            $id_user = $this->request->getPost('id_user');

            $data = [
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'disabled_at' => null,
                'disabled_by' => null
            ];

            $akunModel->update($id_user, $data);

            // Simpan data aktivitas update data
            $aktivitasModel->insert([
                'id_aktivitas' => Uuid::uuid4()->toString(),
                'tanggal'      => date('Y-m-d'),
                'waktu'        => date('H:i:s'),
                'nama_akun'    => session()->get('nama_akun'),
                'aktivitas'    => 'pemulihan akun',
                'keterangan'   => session()->get('nama_akun') . ' telah memulihkan akun ' . $this->request->getPost('nama_lengkap'),
                'ip_address'   => $this->request->getIPAddress(),
                'user_agent'   => $this->request->getUserAgent(),
            ]);

            return redirect()->to('/data_akun')->with('success', 'Data akun berhasil dipulihkan');
        }

        public function delete($id)
        {
            $akunModel = new AccountDataModel();
            $aktivitasModel = new UserLogModel();

            // Ambil data akun yang mau dihapus
            $akun = $akunModel->find($id);

            if (!$akun) {
                return redirect()->to('/data_akun')->with('error', 'Data akun tidak ditemukan.');
            }

            // Catat aktivitas sebelum hapus
            $aktivitasModel->insert([
                'id_aktivitas' => Uuid::uuid4()->toString(),
                'tanggal'      => date('Y-m-d'),
                'waktu'        => date('H:i:s'),
                'nama_akun'    => session()->get('nama_akun'), // akun yg login
                'aktivitas'    => 'hapus akun',
                'keterangan'   => session()->get('nama_akun') . ' telah menghapus data akun ' . $akun['nama_lengkap'],
                'ip_address'   => $this->request->getIPAddress(),
                'user_agent'   => $this->request->getUserAgent(),
            ]);

            // Hapus akun setelah log
            $akunModel->delete($id);

            return redirect()->to('/data_akun')->with('success', 'Data akun berhasil dihapus.');
        }
    }
?>