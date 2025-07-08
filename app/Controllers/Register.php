<?php namespace App\Controllers;

use App\Models\UserModel;
use Ramsey\Uuid\Uuid;

class Register extends BaseController
{
    public function index()
    {
        return view('register_view');
    }

    public function simpan()
    {
        $validation = \Config\Services::validation();

        // Validasi input
        $validation->setRules([
            'nama_lengkap' => 'required',
            'username'     => 'required|is_unique[users_login.username]',
            'password'     => 'required|min_length[6]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $userModel = new UserModel();

        $data = [
            'id_user'      => Uuid::uuid4()->toString(),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'username'     => $this->request->getPost('username'),
            'password'     => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
        ];

        $userModel->insert($data);

        return redirect()->to('/login')->with('pesan', 'Registrasi berhasil, silakan login.');
    }
}
?>