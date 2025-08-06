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

            // Ambil keyword pencarian
            $keyword = $this->request->getGet('q');
            $perPage = 10;

            // Query builder dasar
            $builder = $logModel->orderBy('tanggal', 'DESC')->orderBy('waktu', 'DESC');

            if ($keyword) {
                $builder->like('nama_akun', $keyword)
                        ->orLike('keterangan', $keyword);
            }

            $aktivitas = $builder->paginate($perPage, 'aktivitas');
            $pager     = $logModel->pager;

            $data = [
                'title'         => 'Dashboard - Rumah Sakit Sumber Sentosa Tumpang Malang',
                'content_title' => 'Dashboard',
                'icon'          => 'fa-solid fa-house',
                'user'          => session()->get('nama_akun'),
                'role'          => session()->get('role'),
                'aktivitas'     => $aktivitas,
                'pager'         => $pager,
                'keyword'       => $keyword,
            ];

            return view('dashboard/index', $data);
        }
    }
?>