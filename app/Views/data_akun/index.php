<?= $this->extend('layout/dashboard_templates'); ?>

<?= $this->section('dashboard_content'); ?>
    <!-- Modal View Data -->
    <div class="modal fade" id="viewuser" tabindex="-1" aria-labelledby="viewuserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="viewuserLabel">Detail Akun Pengguna</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                        <span>Tutup</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content needs-validation" action="/data_akun/save" method="post" autocomplete="off" novalidate>
                <?= csrf_field(); ?>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addUserLabel">Tambah Data Akun</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-2">
                        <span class="input-group-text">Nama Lengkap</span>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" required>
                        <div class="invalid-feedback">
                            Nama lengkap harus diisi.
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">Username</span>
                        <input type="text" name="username" class="form-control" placeholder="Username baru" aria-label="Username" required>
                        <div class="invalid-feedback">
                            Username harus diisi.
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">Password</span>
                        <input type="text" name="password" class="form-control" placeholder="Password baru" aria-label="Password" required>
                        <div class="invalid-feedback">
                            Password harus diisi.
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text">Hak Akses</label>
                        <select class="form-select" name="role" required>
                            <option value="" selected disabled>Pilih Hak Akses</option>
                            <option value="superadmin">Super Admin</option>
                            <option value="admin">Admin</option>
                            <option value="editor">Editor</option>
                            <option value="contributor">Contributor</option>
                        </select>
                        <div class="invalid-feedback">
                            Hak akses harus dipilih.
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success">
                        <i class="fa-solid fa-check"></i>
                        <span>Simpan data</span>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                        <span>Batal</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Riwayat Akun yang tidak aktif -->
    <div class="modal fade" id="logUser" tabindex="-1" aria-labelledby="logUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="logUserLabel">Riwayat Data Akun Pengguna</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group mb-4 border-0">
                        <li class="list-group-item text-bg-success bg-gradient border-0">
                            <i class="fa-solid fa-user-check"></i>
                            <small class="ms-2">
                                Akun yang dipulihkan akan kembali aktif dan dapat digunakan seperti biasa.
                            </small>
                        </li>
                        <li class="list-group-item text-bg-warning bg-gradient border-0">
                            <i class="fa-solid fa-user-slash"></i>
                            <small class="ms-2">
                                Akun yang telah dinonaktifkan tidak dapat digunakan dan dapat dihapus secara permanen.
                            </small>
                        </li>
                        <li class="list-group-item text-bg-danger bg-gradient border-0">
                            <i class="fa-solid fa-user-xmark"></i>
                            <small class="ms-2">
                                Jika Anda menghapus Akun yang telah dinonaktifkan, maka Akun tersebut tidak dapat dipulihkan.
                            </small>
                        </li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size: 14px;">
                            <thead>
                                <th>Nama Akun</th>
                                <th>Username</th>
                                <th>Di Nonaktifkan oleh</th>
                                <th>Waktu Nonaktif</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php if (!empty($data_akun)): ?>
                                    <?php foreach ($data_akun as $akun): ?>
                                        <?php if ($akun['disabled_at'] != null): ?>
                                            <tr>
                                                <td><?= esc($akun['nama_lengkap']); ?></td>
                                                <td><?= esc($akun['username']); ?></td>
                                                <td>
                                                    <strong class="text-primary"><?= esc($akun['created_by']); ?></strong>
                                                </td>
                                                <td>
                                                    <?= format_tanggal_indonesia(esc($akun['created_at'])) ?>
                                                </td>
                                                <td>
                                                    <?php if ($akun['username'] == session()->get('username')): ?>
                                                        <small class="fw-bold text-danger">Akun yang Anda gunakan</small>
                                                    <?php elseif($akun['nama_lengkap'] == 'Super Admin'): ?>
                                                        <small class="fw-bold text-danger">Tidak dapat di ubah maupun di hapus</small>
                                                    <?php else: ?>
                                                        <div class="btn-group btn-group-sm" role="group">
                                                            <button type="button" class="btn btn-info"
                                                                bs-tooltips="tooltip"
                                                                data-bs-title="Pulihkan Akun"
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#restoreUser<?= $akun['id_user'] ?>">
                                                                <i class="fa-solid fa-trash-arrow-up"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger"
                                                                bs-tooltips="tooltip"
                                                                data-bs-title="Hapus Akun"
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#deleteUser<?= $akun['id_user'] ?>">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </button>
                                                        </div>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php else:?>
                                    <tr>
                                        <td colspan="5" class="text-center">Tidak ada data akun ditemukan.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">
                        <span>Tutup Riwayat Akun</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus Akun yang di non-aktifkan -->
    <div class="modal fade" id="deleteUser<?= $akun['id_user'] ?>" tabindex="-1" aria-labelledby="logUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form class="modal-content" action="/data_akun/delete/<?= $akun['id_user'] ?>" method="post">
                <?= csrf_field(); ?>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="logUserLabel">Hapus Akun Pengguna</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="_method" value="DELETE">
                    <p class="m-0">
                        Apakah Anda yakin ingin menghapus akun <strong><?= esc($akun['nama_lengkap']) ?></strong>?
                        <span class="text-danger fw-bold">
                            Jika Akun tersebut dihapus, maka tidak dapat dipulihkan kembali.
                        </span>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-danger">
                        <i class="fa-solid fa-trash-can"></i>
                        <span>Ya, Hapus Permanen</span>
                    </button>
                    <button type="button" class="btn btn-sm btn-success"
                        data-bs-target="#logUser"
                        data-bs-toggle="modal">
                        <i class="fa-solid fa-times"></i>
                        <span>Tidak</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Pemulihan Akun -->
    <div class="modal fade" id="restoreUser<?= $akun['id_user'] ?>" tabindex="-1" aria-labelledby="restoreUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form class="modal-content" action="/data_akun/restore_acc" method="post">
                <?= csrf_field(); ?>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="restoreUserLabel">Pemulihan Akun Pengguna</h1>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id_user" value="<?= $akun['id_user'] ?>">
                    <input type="hidden" name="nama_lengkap" value="<?= esc($akun['nama_lengkap']) ?>">
                    <p class="m-0">
                        Apakah Anda yakin ingin memulihkan akun <strong><?= esc($akun['nama_lengkap']) ?></strong>?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success">
                        <i class="fa-solid fa-recycle"></i>
                        <span>Pulihkan Akun</span>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger"
                        data-bs-target="#logUser" data-bs-toggle="modal">
                        <i class="fa-solid fa-user-slash"></i>
                        <span>Tetap Nonaktifkan Akun</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <form method="get" action="<?= base_url('data_akun') ?>" class="input-group input-group-sm mb-2">
        <span class="input-group-text">Cari Data Akun</span>
        <input type="search" name="keyword" class="form-control form-control-sm w-25"
            placeholder="Masukkan kata kunci..." value="<?= esc($keyword) ?>">
        <button class="btn btn-primary" type="submit"
            bs-tooltips="tooltip"
            data-bs-title="Cari Data">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <button class="btn btn-success" type="button"
            bs-tooltips="tooltip"
            data-bs-title="Tambah User"
            data-bs-toggle="modal"
            data-bs-target="#addUser">
            <i class="fa-solid fa-user-plus"></i>
        </button>
        <button class="btn btn-warning" type="button"
            bs-tooltips="tooltip"
            data-bs-title="Riwayat Akun"
            data-bs-toggle="modal"
            data-bs-target="#logUser">
            <i class="fa-solid fa-list-ul"></i>
        </button>
    </form>
    <?php if (!empty($keyword)): ?>
        <div class="alert alert-info p-2 d-flex flex-row align-items-center" role="alert">
            <span>Hasil pencarian: <strong><?= esc($keyword) ?></strong></span>
            <a href="<?= base_url('data_akun') ?>" class="btn btn-sm btn-danger ms-auto">
                <i class="fa fa-rotate-left"></i>
                <span>Reset Pencarian</span>
            </a>
        </div>
    <?php endif; ?>
    <div class="table-responsive">
        <table class="table table-sm table-striped table-bordered table-hover" style="font-size: 14px;">
            <thead>
                <tr>
                    <th>Nama Akun</th>
                    <th>Username</th>
                    <th>Hak Akses</th>
                    <th>Di daftarkan oleh</th>
                    <th>Terakhir Aktif</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($data_akun) > 0): ?>
                    <?php foreach ($data_akun as $akun): ?>
                        <?php if ($akun['disabled_at'] == null): ?>
                            <tr>
                                <td><?= esc($akun['nama_lengkap']); ?></td>
                                <td><?= esc($akun['username']); ?></td>
                                <td><?= esc($akun['role']); ?></td>
                                <td>
                                    <?php if ($akun['created_by'] == null): ?>
                                        <strong class="text-danger">
                                            Akun ini dibuat secara khusus oleh sistem
                                        </strong>
                                    <?php else: ?>
                                        <strong class="text-success"><?= esc($akun['created_by']); ?></strong>
                                        pada hari
                                        <strong class="text-primary">
                                            <?= format_tanggal_indonesia(esc($akun['created_at'])) ?>
                                        </strong>
                                    <?php endif; ?>
                                </td>
                                <td></td>
                                <td>
                                    <?php if ($akun['username'] == session()->get('username')): ?>
                                        <small class="fw-bold text-danger">Akun yang Anda gunakan</small>
                                    <?php elseif($akun['nama_lengkap'] == 'Super Admin'): ?>
                                        <small class="fw-bold text-danger">Tidak dapat di ubah maupun di hapus</small>
                                    <?php else: ?>
                                        <?php include 'modal_view.php'; ?>
                                        <?php include 'modal_edit.php'; ?>
                                        <?php include 'modal_disabled_akun.php'; ?>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <button type="button" class="btn btn-primary"
                                                bs-tooltips="tooltip"
                                                data-bs-title="Detail"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#viewuser<?= $akun['id_user'] ?>">
                                                <i class="fa-solid fa-user-check"></i>
                                            </button>
                                            <button type="button" class="btn btn-success"
                                                bs-tooltips="tooltip"
                                                data-bs-title="Edit"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#edituser<?= $akun['id_user'] ?>">
                                                <i class="fa-solid fa-user-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger"
                                                bs-tooltips="tooltip"
                                                data-bs-title="Nonaktifkan Akun"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#disabledAcc<?= $akun['id_user'] ?>">
                                                <i class="fa-solid fa-user-slash"></i>
                                            </button>
                                        </div>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data akun ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="d-flex flex-column align-items-end">
            <?php 
                $currentCount = count($data_akun); 
                $page = $pager->getCurrentPage('data_akun');
                $perPage = $pager->getPerPage('data_akun');
                $start = ($page - 1) * $perPage + 1;
                $end = min($start + $currentCount - 1, $total_data);
            ?>
            <small class="text-muted mb-2">
                Menampilkan <?= $start ?>–<?= $end ?> dari <?= $total_data ?> data
            </small>
            <?= $pager->links('data_akun', 'bootstrap_pagination'); ?>
        </div>
    </div>
<?= $this->endSection(); ?>