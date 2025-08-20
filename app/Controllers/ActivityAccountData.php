<?php
    namespace App\Controllers;
    use Ramsey\Uuid\Uuid;
    use App\Models\ActivityAccountModel;
    use App\Models\UserLogModel;

    class ActivityAccountData extends BaseController
    {
        public function index() {
            if (!session()->get('logged_in')) {
                return redirect()->to('/login')->with('info', 'Silahkan Login terlebih dahulu');
            }

            $model = new ActivityAccountModel();
            $data = [
                'title'         => 'Aktivitas Akun - Rumah Sakit Sumber Sentosa Tumpang Malang',
                'content_title' => 'Aktivitas Akun',
                'icon'          => 'fa-solid fa-users-viewfinder',
                'user'          => session()->get('nama_akun'),
                'role'          => session()->get('role'),
                'data_aktivitas'=> $model->findAll(),
            ];
            
            return view('data_akun/data_aktivitas', $data);

            // Cache Setup
            $this->cachePage($n);
        }
    }
?>