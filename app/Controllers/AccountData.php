<?php
    namespace App\Controllers;
    use Ramsey\Uuid\Uuid;
    use App\Models\AccountDataModel;

    class AccountData extends BaseController
    {
        public function index() {
            if (!session()->get('logged_in')) {
                return redirect()->to('/login')->with('info', 'Silahkan Login terlebih dahulu');
            }

            $model = new AccountDataModel();

            $data = [
                'title'         => 'Data Akun Pengguna - Rumah Sakit Sumber Sentosa Tumpang Malang',
                'content_title' => 'Data Akun Pengguna',
                'icon'          => 'fa-solid fa-users',
                'user'          => session()->get('nama_akun'),
                'role'          => session()->get('role'),
                'data_akun'     => $model->findAll(),
                'total_data'    => $model->countAllResults(),
            ];
            
            return view('data_akun/index', $data);

            // Cache Setup
            $this->cachePage($n);
        }

        public function save()
        {
            $model = new AccountDataModel();

            $data = [
                'id_user'     => Uuid::uuid4()->toString(),
                'nama_lengkap'=> $this->request->getPost('nama_lengkap'),
                'username'    => $this->request->getPost('username'),
                'password'    => $this->request->getPost('password'),
                'role'        => $this->request->getPost('role'),
                'created_by'  => session()->get('username')
            ];

            $model->insert($data);
            return redirect()->to('/data_akun')->with('success', 'Akun berhasil ditambahkan');
        }

        public function update()
        {
            $akunModel = new AccountDataModel();
            $id_user = $this->request->getPost('id_user');

            $data = [
                'username'     => $this->request->getPost('username'),
                'password'     => $this->request->getPost('password'),
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'role'         => $this->request->getPost('role'),
                'updated_by'   => session()->get('username')
            ];

            $akunModel->update($id_user, $data);

            return redirect()->to('/data_akun')->with('success', 'Data akun berhasil diperbarui');
        }

        public function delete($id)
        {
            $akunModel = new AccountDataModel();
            $akunModel->delete($id);

            return redirect()->to('/data_akun')->with('success', 'Data akun berhasil dihapus.');
        }
    }
?>