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
    <div class="modal fade" id="adduser" tabindex="-1" aria-labelledby="adduserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content needs-validation" action="/data_akun/save" method="post" autocomplete="off" novalidate>
                <?= csrf_field(); ?>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="adduserLabel">Tambah Data Akun</h1>
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

    <div class="input-group input-group-sm mb-2">
        <span class="input-group-text">Cari Data Akun</span>
        <input type="search" id="cari_data_akun" class="form-control form-control-sm w-25" placeholder="Masukkan kata kunci...">
        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#adduser">
            <i class="fa-solid fa-user-plus"></i>
            <span>Tambah User</span>
        </button>
    </div>
    <div class="table-responsive">
        <table class="table table-sm table-striped table-bordered table-hover">
            <thead>
                <tr style="font-size: 14px;">
                    <th>Nama Akun</th>
                    <th>Username</th>
                    <th>Hak Akses</th>
                    <th>Di daftarkan oleh</th>
                    <th>Terakhir Aktif</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data_akun)): ?>
                    <?php foreach ($data_akun as $akun): ?>
                        <tr style="font-size: 14px;">
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
                                    <div class="btn-group btn-group-sm" role="group">
                                        <button type="button" class="btn btn-primary"
                                            data-id="<?= $akun['id_user'] ?>"
                                            data-nama="<?= $akun['nama_lengkap'] ?>"
                                            data-username="<?= $akun['username'] ?>"
                                            data-password="<?= $akun['password'] ?>"
                                            data-role="<?= $akun['role'] ?>"
                                            bs-tooltips="tooltip"
                                            data-bs-title="Detail"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#viewuser<?= $akun['id_user'] ?>">
                                            <i class="fa-solid fa-user-check"></i>
                                        </button>
                                        <?php include 'modal_view.php'; ?>
                                        <button type="button" class="btn btn-success btn-edit-user"
                                            data-id="<?= $akun['id_user'] ?>"
                                            data-nama="<?= $akun['nama_lengkap'] ?>"
                                            data-username="<?= $akun['username'] ?>"
                                            data-password="<?= $akun['password'] ?>"
                                            data-role="<?= $akun['role'] ?>"
                                            bs-tooltips="tooltip"
                                            data-bs-title="Edit"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#edituser<?= $akun['id_user'] ?>">
                                            <i class="fa-solid fa-user-edit"></i>
                                        </button>
                                        <?php include 'modal_edit.php'; ?>
                                        <button type="button" class="btn btn-danger"
                                            onclick="confirmDelete(event)"
                                            data-href="<?= base_url('/data_akun/delete/' . $akun['id_user']) ?>"
                                            bs-tooltips="tooltip"
                                            data-bs-title="Hapus">
                                            <i class="fa-solid fa-user-minus"></i>
                                        </button>
                                    </div>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data akun ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="d-flex flex-column align-items-end">
            <small class="text-muted mb-2">
                Menampilkan <?= count($data_akun); ?> dari <?= $total_data; ?> data
            </small>
            <nav aria-label="Page navigation example">
                <ul class="pagination m-0">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fa-solid fa-chevron-left"></i>
                            <span>Sebelumnya</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <span>Selanjutnya</span>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
<?= $this->endSection(); ?>