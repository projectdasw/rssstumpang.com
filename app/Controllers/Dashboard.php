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

            // Query builder dasar
            $aktivitas = $logModel->orderBy('tanggal', 'DESC')->orderBy('waktu', 'DESC')->findAll();

            $data = [
                'title'         => 'Dashboard - Rumah Sakit Sumber Sentosa Tumpang Malang',
                'content_title' => 'Dashboard',
                'icon'          => 'fa-solid fa-house',
                'user'          => session()->get('nama_akun'),
                'role'          => session()->get('role'),
                'aktivitas'     => $aktivitas,
            ];

            return view('dashboard/index', $data);
        }

        public function fetchAktivitas() {
            $request = service('request');
            $model = new \App\Models\UserLogModel();

            $keyword = $request->getGet('search');
            $page = (int) $request->getGet('page') ?: 1;
            $perPage = 5;

            $builder = $model;

            if ($keyword) {
                $builder = $builder->like('nama_akun', $keyword)
                                ->orLike('aktivitas', $keyword)
                                ->orLike('keterangan', $keyword);
            }

            $logs = $builder->orderBy('tanggal', 'DESC')
                            ->orderBy('waktu', 'DESC')
                            ->paginate($perPage, 'group1', $page);

            $pager = $model->pager;

            return view('dashboard/aktivitas_list', [
                'aktivitas' => $logs,
                'pager' => $pager,
                'currentPage' => $page
            ]);
        }
    }
?>