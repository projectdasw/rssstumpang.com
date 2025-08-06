<?= $this->extend('layout/dashboard_templates'); ?>

<?= $this->section('dashboard_content'); ?>
    <div class="container d-flex flex-column bg-light p-3 rounded-4">
        <div class="row row-cols-1 row-cols-md-2 g-4" data-masonry='{"percentPosition": true }'>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h6 class="m-0">Notifikasi / Pengumuman</h6>
                    </div>
                    <div class="card-body p-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-2">
                                <strong>Senin, 01 Januari 2025</strong>
                                <p class="mb-0">
                                    Selamat Tahun Baru 2025! Semoga tahun ini membawa kebahagiaan dan kesuksesan bagi kita semua.
                                </p>
                            </li>
                            <li class="list-group-item p-2">
                                <strong>Senin, 01 Januari 2025</strong>
                                <p class="mb-0">
                                    Ada Komentar baru
                                </p>
                                <a href="" class="btn btn-sm btn-success mt-2 px-2 py-1">
                                    <i class="fa-solid fa-message"></i>
                                    <span>Lihat Komentar</span>
                                </a>
                            </li>
                            <li class="list-group-item p-2">
                                <strong>Senin, 01 Januari 2025</strong>
                                <p class="mb-0">
                                    Ada pengajuan artikel baru yang perlu ditinjau
                                </p>
                                <a href="" class="btn btn-sm btn-success mt-2 px-2 py-1">
                                    <i class="fa-solid fa-message"></i>
                                    <span>Lihat Pengajuan</span>
                                </a>
                            </li>
                            <li class="list-group-item p-2">
                                <strong>Senin, 01 Januari 2025</strong>
                                <p class="mb-0">
                                    Ada Kritik/Saran baru dari pengunjung
                                </p>
                                <a href="" class="btn btn-sm btn-success mt-2 px-2 py-1">
                                    <i class="fa-solid fa-message"></i>
                                    <span>Lihat Kritik/Saran</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="m-0">Statistik Konten</h6>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-gears"></i>
                                <span class="me-2">Akses Cepat</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" style="font-size: 13px;">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        Tambah Artikel Baru
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        Tambah Media (Foto/Video)
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        Tambah Kategori/Tag Baru
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        Kelola Halaman
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="statistik_konten"></canvas>
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h6 class="m-0">Statistik Pengunjung / Traffic</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="statistik_pengunjung"></canvas>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="m-0">Manajemen Media</h6>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-gears"></i>
                                <span class="me-2">Akses Cepat</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" style="font-size: 13px;">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        Tambah Media (Foto/Video)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                Media Gambar/Foto
                                <span class="badge text-bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                Media Video
                                <span class="badge text-bg-primary rounded-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-2">
                                Media Audio
                                <span class="badge text-bg-primary rounded-pill">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h6 class="m-0">Aktivitas Pengguna</h6>
                    </div>
                    <div class="card-body p-2">
                        <form method="get" class="mb-3">
    <div class="input-group">
        <input type="text" name="q" value="<?= esc($keyword) ?>" class="form-control" placeholder="Cari aktivitas...">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-search"></i> Cari
        </button>
    </div>
</form>

                        <ul class="list-group list-group-flush">
                            <?php if (!empty($aktivitas)): ?>
                                <?php foreach($aktivitas as $log): ?>
                                    <li class="list-group-item p-2">
                                        <strong>
                                            <?= format_tanggal_indonesia($log['tanggal']) ?>
                                            <?= $log['waktu'] ?>
                                        </strong>
                                        <?php if($log['aktivitas'] == "login"): ?>
                                            <span class="badge bg-success"><?= $log['aktivitas'] ?></span>
                                        <?php else: ?>
                                            <span class="badge bg-danger"><?= $log['aktivitas'] ?></span>
                                        <?php endif;?>
                                        <p class="mb-0">
                                            <?= $log['nama_akun'] ?>: <?= $log['keterangan'] ?>
                                        </p>
                                    </li>
                                <?php endforeach;?>
                            <?php else: ?>
                                <li class="list-group-item p-2">
                                    <p class="mb-0">
                                        <strong>Belum ada aktivitas tercatat</strong>
                                    </p>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <div class="mt-3">
    <?= $pager->links('aktivitas', 'default_full') ?>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>