<?php
    namespace App\Controllers;

    use App\Controllers\BaseController;
    use App\Models\UserModel;

    class Auth extends BaseController
    {
        public function login()
        {
            return view('auth/login');
        }

        public function loginProcess(){
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $userModel = new \App\Models\UserModel();
            $user = $userModel->where('username', $username)->first();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    session()->set([
                        'logged_in' => true,
                        'username' => $user['username'],
                        'user_id' => $user['id']
                    ]);
                    return redirect()->to('/dashboard');
                } else {
                    echo "Password salah";
                    return;
                }
            } else {
                echo "User tidak ditemukan";
                return;
            }
        }

        public function logout()
        {
            session()->destroy();
            return redirect()->to('/login');
        }
    }
?>