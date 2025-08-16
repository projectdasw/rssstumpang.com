<?php
    namespace App\Controllers;
    use CodeIgniter\Pager\Pager;
    use App\Models\DashboardModel;
    use App\Models\UserLogModel;

    class Dashboard extends BaseController {
        public function index() {
            if (!session()->get('logged_in')) {
                return redirect()->to('/login')->with('info', 'Silahkan Login terlebih dahulu');
            }

            $logModel = new UserLogModel();

            $data = [
                'title'         => 'Dashboard - Rumah Sakit Sumber Sentosa Tumpang Malang',
                'content_title' => 'Dashboard',
                'icon'          => 'fa-solid fa-house',
                'user'          => session()->get('nama_akun'),
                'role'          => session()->get('role'),
                'log_akun'      => $logModel->orderBy('tanggal', 'DESC')->orderBy('waktu', 'DESC')->paginate(5),
            ];

            return view('dashboard/index', $data);
        }
    }
?>