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
                <div class="col-2 p-3">
                    <div class="card text-center p-2 mb-3">
                        <img src="<?= base_url('assets/img/user.png') ?>" class="card-img-top w-50 mx-auto shadow-lg bg-body-tertiary rounded-circle" alt="image">
                        <div class="card-body p-0 mt-2">
                            <h5 class="card-title">
                                <strong><?= $user; ?></strong>
                                <small class="badge text-bg-danger mt-2"><?= $role; ?></small>
                            </h5>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="Pengaturan Akun">
                                    <i class="fa-solid fa-user-gear"></i>
                                </button>
                                <a href="<?= base_url('login/logout') ?>" onclick="return confirmLogout(event);"
                                    class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="Logout">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion accordion-flush" id="sideMenu">
                        <div class="accordion-item border-0">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#media_postingan" aria-expanded="false" aria-controls="media_postingan">
                                    <i class="fa-solid fa-hashtag me-2"></i> 
                                    <small>Media & Postingan</small>
                                </button>
                            </div>
                            <div id="media_postingan" class="accordion-collapse collapse" data-bs-parent="#sideMenu">
                                <div class="accordion-body p-0">
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
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#marketing" aria-expanded="false" aria-controls="marketing">
                                    <i class="fa-solid fa-bullseye me-2"></i>
                                    <small>Marketing</small>
                                </button>
                            </div>
                            <div id="marketing" class="accordion-collapse collapse" data-bs-parent="#sideMenu">
                                <div class="accordion-body p-0">
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
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#data_akun" aria-expanded="false" aria-controls="data_akun">
                                    <i class="fa-solid fa-users-gear me-2"></i>
                                    <small>Akun & Aktivitas</small>
                                </button>
                            </div>
                            <div id="data_akun" class="accordion-collapse collapse" data-bs-parent="#sideMenu">
                                <div class="accordion-body p-0">
                                    <div class="list-group rounded-0">
                                        <a href="#" class="list-group-item list-group-item-action list-group-item-success p-2">
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
                    <nav class="container-fluid d-flex flex-row align-items-center p-2">
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
                    <?= $this->renderSection('dashboard_content'); ?>
                </div>
            </div>
        </div>
        <?= $this->include('layout/js_core.php'); ?>
    </body>
</html>