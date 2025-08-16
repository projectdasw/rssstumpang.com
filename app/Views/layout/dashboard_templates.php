<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
        <title><?= $title; ?></title>
        <?= $this->include('layout/css_core.php'); ?>
    </head>
    <body>
        <div class="container-fluid">
            <!-- Offcanvas Menu -->
             <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                    I will not close if you click outside of me.
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-2 p-0">
                    <div class="container-fluid p-3 sticky-top">
                        <div class="card text-center p-2 mb-3">
                            <img src="<?= base_url('assets/img/user.webp') ?>" class="card-img-top w-50 mx-auto shadow-lg bg-body-tertiary rounded-circle" alt="image">
                            <div class="card-body p-0 mt-2">
                                <div class="card-title d-flex flex-column align-items-center">
                                    <h4 class="m-0"><?= $user; ?></h4>
                                    <span class="badge text-bg-danger fs-6 mt-2"><?= $role; ?></span>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-success" bs-tooltips="tooltip"
                                            data-bs-placement="bottom" data-bs-title="Pengaturan Akun">
                                        <i class="fa-solid fa-user-gear"></i>
                                    </button>
                                    <a href="<?= base_url('/logout') ?>" class="btn btn-sm btn-danger"
                                        onclick="return confirmLogout(event);" data-href="<?= base_url('/logout') ?>"
                                        bs-tooltips="tooltip" data-bs-placement="bottom" data-bs-title="Logout">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="list-group">
                            <a href="<?= base_url('/dashboard') ?>" class="list-group-item list-group-item-action list-group-item-primary border-0 p-2">
                                <i class="fa-solid fa-house me-1"></i>
                                <small>Beranda</small>
                            </a>
                            <a class="list-group-item list-group-item-action list-group-item-primary border-0 p-2" data-bs-toggle="collapse"
                                href="#media_postingan" role="button" aria-expanded="false" aria-controls="media_postingan">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <i class="fa-solid fa-hashtag me-1"></i> 
                                        <small>Media & Postingan</small>
                                    </span>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="media_postingan">
                                <div class="card card-body p-0 border-0">
                                    <div class="list-group rounded-0">
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success p-2">
                                            <small>Media Foto/Video</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success p-2">
                                            <small>Postingan</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success p-2">
                                            <small>Halaman</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success p-2">
                                            <small>Kategori Postingan</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success p-2">
                                            <small>Komentar</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a class="list-group-item list-group-item-action list-group-item-primary border-0 p-2" data-bs-toggle="collapse"
                                href="#marketing" role="button" aria-expanded="false" aria-controls="marketing">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <i class="fa-solid fa-bullseye me-1"></i>
                                        <small>Marketing</small>
                                    </span>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="marketing">
                                <div class="card card-body p-0 border-0">
                                    <div class="list-group rounded-0">
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success p-2">
                                            <small>Kritik & Saran</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success p-2">
                                            <small>Google Review</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success p-2">
                                            <small>Data Member Paguyuban</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a class="list-group-item list-group-item-action list-group-item-primary border-0 p-2" data-bs-toggle="collapse"
                                href="#akun_aktivitas" role="button" aria-expanded="false" aria-controls="akun_aktivitas">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <i class="fa-solid fa-users-gear me-1"></i>
                                        <small>Akun & Aktivitas</small>
                                    </span>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="akun_aktivitas">
                                <div class="card card-body p-0 border-0">
                                    <div class="list-group rounded-0">
                                        <a href="<?= base_url('/data_akun') ?>" class="list-group-item list-group-item-action list-group-item-success p-2">
                                            <small>Data Akun Pengguna</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success p-2">
                                            <small>Aktivitas Akun</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 p-0">
                    <nav class="container-fluid d-flex flex-row align-items-center p-2 sticky-top" style="background-color: #fff;">
                        <button class="btn btn-outline-primary me-2 d-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                            <i class="fa-solid fa-bars me-1"></i>
                            <span>Menu</span>
                        </button>
                        <div class="d-flex flex-row align-items-center">
                            <i class="<?= $icon; ?> fs-5 p-2 rounded-2 text-bg-primary"></i>
                            <div class="d-flex flex-column ms-2">
                                <span class="text-muted" style="font-size: 12px;">Page / <?= $content_title; ?></span>
                                <h4 class="m-0"><?= $content_title; ?></h4>
                            </div>
                        </div>
                    </nav>
                    <div class="container d-flex flex-column bg-light p-3 rounded-4">
                        <?= $this->renderSection('dashboard_content'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('layout/js_core.php'); ?>
    </body>
</html>