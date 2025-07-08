<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login - Rumah Sakit Sumber Sentosa Tumpang Malang</title>
        <!-- CSS CDN -->
        <?= view('templates/css_core.php'); ?>
    </head>
    <body class="container-fluid d-flex align-items-center justify-content-center vh-100 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('pesan') ?>
                        </div>
                    <?php endif; ?>
                    <form class="card text-bg-dark needs-validation" method="post" action="<?= site_url('login/proses') ?>" novalidate>
                        <div class="card-header">
                            <h4 class="text-center m-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control form-control-sm" required>
                                <div class="invalid-feedback">
                                    Harap isi Username Anda.
                                </div>
                            </div>
                            <div>
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control form-control-sm" required>
                                <div class="invalid-feedback">
                                    Harap isi Password Anda.
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                            <a class="btn btn-sm btn-primary" href="<?= site_url('register') ?>">
                                <i class="fa-solid fa-id-card"></i>
                                <span>Buat Akun Baru</span>
                            </a>
                            <button class="btn btn-sm btn-success bg-gradient" type="submit">
                                <i class="fa-solid fa-right-to-bracket"></i>
                                <span>Login</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?= view('templates/js_core.php'); ?>
    </body>
</html>