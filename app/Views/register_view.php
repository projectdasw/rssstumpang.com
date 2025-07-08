<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Regist Akun Baru - Rumah Sakit Sumber Sentosa Tumpang Malang</title>
        <?= view('templates/css_core.php'); ?>
    </head>
    <body class="container-fluid d-flex align-items-center justify-content-center vh-100 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <?php if (session()->getFlashdata('errors')) : ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <form class="card text-bg-dark needs-validation" method="post" action="<?= site_url('register/simpan') ?>" novalidate>
                        <div class="card-header">
                            <h4 class="text-center m-0">Daftar Akun Baru</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control form-control-sm"
                                    value="<?= old('nama_lengkap') ?>" required>
                                <div class="invalid-feedback">
                                    Harap isi Nama Lengkap Anda.
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control form-control-sm"
                                    value="<?= old('username') ?>" required>
                                <div class="invalid-feedback">
                                    Harap isi Username Baru Anda.
                                </div>
                            </div>
                            <div>
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control form-control-sm" required>
                                <div class="invalid-feedback">
                                    Harap isi Password Baru Anda.
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                            <a class="btn btn-sm btn-primary bg-gradient" href="<?= site_url('login') ?>">
                                <i class="fa-solid fa-id-card"></i>
                                <span>Sudah punya Akun? Login</span>
                            </a>
                            <button class="btn btn-sm btn-success bg-gradient" type="submit">
                                <i class="fa-solid fa-check"></i>
                                <span>Daftar Akun</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?= view('templates/js_core.php'); ?>
    </body>
</html>