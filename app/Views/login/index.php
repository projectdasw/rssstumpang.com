<?= $this->extend('layout/login_templates'); ?>

<?= $this->section('login_content'); ?>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100 my-auto">
        <form class="card needs-validation" method="post" action="<?= base_url('login/processLogin') ?>" style="width: 30%;"
            autocomplete="off" novalidate>
            <div class="card-header">
                <h5 class="m-0">
                    RSSS Tumpang - Login
                </h5>
            </div>
            <div class="card-body">
                <div class="mb-2">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control form-control-sm" placeholder="Username Anda" required>
                    <div class="invalid-feedback">
                        Username tidak boleh kosong
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control form-control-sm" name="password" id="password"
                            placeholder="Password Anda" required>
                        <button class="btn btn-sm btn-outline-primary" type="button" id="reveal_pass">
                            <i class="fa-solid fa-eye" id="toggle_icon"></i>
                        </button>
                        <div class="invalid-feedback">
                            Password tidak boleh kosong
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-outline-success">
                    <i class="fa-solid fa-user-check"></i>
                    <span>Login</span>
                </button>
            </div>
        </form>
    </div>
<?= $this->endSection(); ?>