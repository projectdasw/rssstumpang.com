<!-- Modal View Data -->
<div class="modal fade" id="viewuser<?= $akun['id_user']?>" tabindex="-1" aria-labelledby="viewuserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content needs-validation" action="/data_akun/update" method="post" autocomplete="off" novalidate>
            <?= csrf_field(); ?>
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="viewuserLabel">Detail Data Akun</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_user" value="<?= $akun['id_user'] ?>">
                <div class="input-group mb-2">
                    <span class="input-group-text">Nama Lengkap</span>
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap"
                        aria-label="Nama Lengkap" value="<?= $akun['nama_lengkap'] ?>" required>
                    <div class="invalid-feedback">
                        Nama lengkap harus diisi.
                    </div>
                </div>
                <div class="input-group mb-2">
                    <span class="input-group-text">Username</span>
                    <input type="text" name="username" class="form-control" placeholder="Username baru"
                        aria-label="Username" value="<?= $akun['username'] ?>" required>
                    <div class="invalid-feedback">
                        Username harus diisi.
                    </div>
                </div>
                <div class="input-group mb-2">
                    <span class="input-group-text">Password</span>
                    <input type="text" name="password" class="form-control" placeholder="Password (kosongkan jika tidak diubah)"
                        aria-label="Password">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text">Hak Akses</label>
                    <select class="form-select" name="role" required>
                        <option value="" selected disabled>Pilih Hak Akses</option>
                        <option value="superadmin"
                            <?= ($akun['role'] == 'superadmin') ? 'selected' : '' ?>>
                            Super Admin
                        </option>
                        <option value="admin"
                            <?= ($akun['role'] == 'admin') ? 'selected' : '' ?>>
                            Admin
                        </option>
                        <option value="editor"
                            <?= ($akun['role'] == 'editor') ? 'selected' : '' ?>>
                            Editor
                        </option>
                        <option value="contributor"
                            <?= ($akun['role'] == 'contributor') ? 'selected' : '' ?>>
                            Contributor
                        </option>
                    </select>
                    <div class="invalid-feedback">
                        Hak akses harus dipilih.
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-success">
                    <i class="fa-solid fa-pencil"></i>
                    <span>Edit data</span>
                </button>
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                    <span>Batal</span>
                </button>
            </div>
        </form>
    </div>
</div>