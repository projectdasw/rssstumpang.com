<?php date_default_timezone_set("Asia/Jakarta"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if($content ?? ''): ?>
      <title><?= $title; ?> - Rumah Sakit Sumber Sentosa Tumpang Malang</title>
    <?php else: ?>
      <title>Dashboard - Rumah Sakit Sumber Sentosa Tumpang Malang</title>
    <?php endif; ?>
    <?= view('templates/css_core.php'); ?>
  </head>
  <body>
    <!-- MENU SIDEBAR -->
    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="offcanvas_menu" aria-labelledby="offcanvas_menuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvas_menuLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div>
          I will not close if you click outside of me.
        </div>
      </div>
    </div>

    <!-- Modal Detail Akun-->
    <div class="modal fade" id="detail_akun" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
              Detail Akun
            </h5>
          </div>
          <div class="modal-body p-0">
            <div class="card border-0">
              <div class="row g-0">
                <div class="col-md-3 my-auto p-3">
                  <img src="<?= base_url('assets/image/blank_acc.png') ?>" class="img-fluid rounded-circle shadow" alt="image">
                </div>
                <div class="col-md-9">
                  <div class="card-body p-3">
                    <div class="row">
                      <div class="col-6 mb-2">
                        <label class="form-label">
                          Nama Lengkap
                        </label>
                        <span id="detail_nama_lengkap" class="form-control form-control-sm"></span>
                      </div>
                      <div class="col-6 mb-2">
                        <label class="form-label">
                          Username
                        </label>
                        <span id="detail_username" class="form-control form-control-sm"></span>
                      </div>
                      <div class="col-6">
                        <label class="form-label">
                          Role / Hak Akses
                        </label>
                        <span id="detail_role" class="form-control form-control-sm"></span>
                      </div>
                      <div class="col-6">
                        <label class="form-label">
                          Terakhir Aktif
                        </label>
                        <span id="detail_last_active" class="form-control form-control-sm"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-sm btn-danger" data-bs-dismiss="modal">
              <i class="fa-solid fa-circle-xmark"></i>
              <span>Tutup</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Tambah Akun -->
    <div class="modal fade" id="tambah_akun" tabindex="-1">
      <div class="modal-dialog">
        <form action="/akun/store" method="post" class="modal-content needs-validation" novalidate>
          <div class="modal-header">
            <h5 class="modal-title">Registrasi Akun Baru</h5>
          </div>
          <div class="modal-body">
            <div class="mb-2">
              <label for="nama_lengkap" class="form-label">Nama User</label>
              <input type="text" name="nama_lengkap" class="form-control form-control-sm" placeholder="Nama Lengkap" required>
              <div class="invalid-feedback">
                Nama tidak boleh kosong
              </div>
            </div>
            <div class="mb-2">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" class="form-control form-control-sm" placeholder="Username baru" required>
              <div class="invalid-feedback">
                Username tidak boleh kosong
              </div>
            </div>
            <div class="mb-2">
              <label for="password" class="form-label">Password</label>
              <input type="text" name="password" class="form-control form-control-sm" placeholder="Password baru" required>
              <div class="invalid-feedback">
                Password tidak boleh kosong
              </div>
            </div>
            <div class="mb-2">
              <label for="role" class="form-label">Role (Hak Akses)</label>
              <select name="role" class="form-select form-select-sm mb-2" required>
                <option selected disabled value="">-- Pilih Hak Akses Akun --</option>
                <option value="superadmin">Super Admin</option>
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
                <option value="contributor">Contributor</option>
              </select>
              <div class="invalid-feedback">
                Pilih salah satu hak akses untuk user baru
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-sm btn-success" type="submit">
              <i class="fa-solid fa-circle-check"></i>
              <span>Simpan</span>
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
              <i class="fa-solid fa-circle-xmark"></i>
              <span>Batal</span>
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- Modal Edit Akun -->
    <div class="modal fade" id="edit_akun" tabindex="-1">
      <div class="modal-dialog">
        <form id="form_edit" method="post" class="modal-content">
          <div class="modal-header"><h5 class="modal-title">Edit Akun</h5></div>
          <div class="modal-body p-0">
            <div class="card border-0">
              <div class="row g-0">
                <div class="col-md-4 my-auto p-3">
                  <img src="<?= base_url('assets/image/blank_acc.png') ?>" class="img-fluid rounded-circle shadow" alt="image">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6 mb-2">
                        <label for="nama_lengkap" class="form-label">
                          Nama User
                        </label>
                        <input id="edit_nama_lengkap" name="nama_lengkap" class="form-control form-control-sm"
                          placeholder="Nama Lengkap">
                      </div>
                      <div class="col-6 mb-2">
                        <label for="username" class="form-label">
                          Username
                        </label>
                        <input id="edit_username" name="username" class="form-control mb-2"
                          placeholder="Username">
                      </div>
                      <div class="col-6">
                        <label for="password" class="form-label">
                          Password
                        </label>
                        <input name="password" type="text" class="form-control form-control-sm"
                          placeholder="Password (kosongkan jika tidak diubah)">
                      </div>
                      <div class="col-6">
                        <label for="role" class="form-label">
                          Role / Hak Akses
                        </label>
                        <select id="edit_role" name="role" class="form-select form-select-sm">
                          <option value="superadmin">Super Admin</option>
                          <option value="admin">Admin</option>
                          <option value="editor">Editor</option>
                          <option value="user">User</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-success">
              <i class="fa-solid fa-pencil"></i>
              <span>Simpan Perubahan</span>
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
              <i class="fa-solid fa-circle-xmark"></i>
              <span>Batal</span>
            </button>
          </div>
        </form>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-2 p-3">
          <div style="mt-4 mb-4">
            <h6>Dashboard</h6>
            <small class="list-group">
              <a href="<?= base_url('dashboard') ?>" class="list-group-item list-group-item-action
                list-group-item-primary border-0">
                <i class="fa-solid fa-house me-2"></i>
                <span>Beranda</span>
              </a>
              <a href="#" class="list-group-item list-group-item-action
                list-group-item-primary border-0">
                <i class="fa-solid fa-globe me-2"></i>
                <span>Profil Website</span>
              </a>
              <a href="#" class="list-group-item list-group-item-action
                list-group-item-primary border-0">
                <i class="fa-solid fa-message me-2"></i>
                <span>Kritik & Saran</span>
              </a>
            </small>
          </div>
          <div class="mt-4 mb-4">
            <h6>Media & Galeri</h6>
            <small class="list-group">
              <a href="#" class="list-group-item list-group-item-action
                list-group-item-secondary border-0">
                <i class="fa-solid fa-images me-2"></i>
                <span>Foto & Gambar</span>
              </a>
              <a href="#" class="list-group-item list-group-item-action
                list-group-item-secondary border-0">
                <i class="fa-solid fa-photo-film me-2"></i>
                <span>Video</span>
              </a>
            </small>
          </div>
          <div class="mt-4 mb-4">
            <h6>Postingan & Halaman</h6>
            <small class="list-group">
              <a href="#" class="list-group-item list-group-item-action
                list-group-item-success border-0">
                <i class="fa-solid fa-newspaper me-2"></i>
                <span>Postingan</span>
              </a>
              <a href="#" class="list-group-item list-group-item-action
                list-group-item-success border-0">
                <i class="fa-solid fa-file-lines me-2"></i>
                <span>Halaman</span>
              </a>
              <a href="#" class="list-group-item list-group-item-action
                list-group-item-success border-0">
                <i class="fa-solid fa-list me-2"></i>
                <span>Kategori</span>
              </a>
              <a href="#" class="list-group-item list-group-item-action
                list-group-item-success border-0">
                <i class="fa-solid fa-comments me-2"></i>
                <span>Komentar</span>
              </a>
            </small>
          </div>
          <div class="mt-4 mb-4">
            <h6>Akun</h6>
            <small class="list-group">
              <a href="<?= base_url('akun') ?>" class="list-group-item list-group-item-action
                list-group-item-info border-0">
                <i class="fa-solid fa-users-viewfinder me-2"></i>
                <span>User Akun</span>
              </a>
              <a href="<?= base_url('akun/aktivitas_akun') ?>" class="list-group-item list-group-item-action
                list-group-item-info border-0">
                <i class="fa-solid fa-eye me-2"></i>
                <span>Aktivitas Akun</span>
              </a>
            </small>
          </div>
        </div>
        <div class="col-10 p-0">
          <div class="container-fluid bg-white sticky-top">
            <div class="d-flex flex-row justify-content-between align-items-center p-3">
              <div class="d-flex flex-row align-items-center">
                <button class="btn btn-sm btn-secondary me-2" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvas_menu" aria-controls="offcanvas_menu">
                  <i class="fa-solid fa-bars"></i>
                </button>
                <div class="d-flex flex-column">
                  <?php if($content ?? ''): ?>
                    <span style="font-size: 12px;">
                      <span class="text-secondary">Pages</span> / <?= $title ?>
                    </span>
                    <h4 class="m-0">
                      <?= $title ?>
                    </h4>
                  <?php else: ?>
                    <span style="font-size: 12px;">
                      <span class="text-secondary">Pages</span> / Dasboard
                    </span>
                    <h4 class="m-0">
                      Dashboard
                    </h4>
                  <?php endif; ?>
                </div>
              </div>
              <div class="d-flex flex-row justify-content-center align-items-center">
                <button type="button" class="btn btn-primary position-relative rounded-circle me-2">
                  <i class="fa-solid fa-bell"></i>
                  <span class="position-absolute top-0 end-25 translate-middle badge rounded-pill bg-danger">
                    99+
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </button>
                <div class="btn-group">
                  <a class="custom-acc-setting btn d-flex flex-row justify-content-center
                    align-items-center p-1 rounded-pill dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= base_url('assets/image/blank_acc.png') ?>"
                      class="custom-img-acc mx-1" alt="image">
                      <span class="me-2"><?= session()->get('nama_lengkap') ?></span>
                    <i class="fa-solid fa-gear mx-1"></i>
                  </a>
                  <div class="dropdown-menu p-3" style="width: 18em;">
                    <span>
                      <strong class="fs-5">Selamat Pagi</strong>,
                      <span><?= session()->get('username') ?></span>
                    </span>
                    <span class="fs-6 text-body-secondary">
                      <?= session()->get('role') ?>
                    </span>
                    <hr class="my-2">
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action list-group-item-primary
                      ">
                        <i class="fa-solid fa-gear"></i>
                        <span>Pengaturan Akun</span>
                      </a>
                      <a href="<?= base_url('/logout') ?>" class="list-group-item list-group-item-action list-group-item-danger">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Keluar</span>
                      </a>
                    </div>
                    <hr class="my-2">
                    <div class="d-flex flex-row justify-content-between">
                      <small class="fw-bold" id="date">
                        <?php echo date("l, d F Y"); ?>
                      </small>
                      <small class="fw-bold" id="clock">
                        <?php echo date("H:i:s"); ?>
                      </small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid">
              <div class="container p-3 rounded-4" style="background-color:rgb(243, 243, 243);">
                <?php if($content ?? ''): ?>
                  <?= $content ?? '' ?>
                <?php else: ?>
                  <div class="container d-flex flex-row justify-content-between mb-4 p-0">
                    <div class="custom-overlay d-flex flex-column py-3 px-4 w-100 h-100 shadow rounded-4 my-0 mx-2">
                      <div class="d-flex flex-row justify-content-between align-items-center">
                        <h5 class="m-0">Postingan</h5>
                        <i class="fa-solid fa-newspaper fs-4 text-light bg-primary bg-gradient
                          p-2 rounded-5"></i>
                      </div>
                      <div class="mt-2 mb-2">
                        <h1>123</h1>
                      </div>
                      <div>
                        <small class="text-body-secondary bg-body-tertiary fst-italic py-1 px-2 rounded-3">
                          Total postingan berita/artikel
                        </small>
                      </div>
                    </div>
                    <div class="custom-overlay d-flex flex-column py-3 px-4 w-100 h-100 shadow rounded-4 my-0 mx-2">
                      <div class="d-flex flex-row justify-content-between align-items-center">
                        <h5 class="m-0">Halaman</h5>
                        <i class="fa-solid fa-newspaper fs-4 text-light bg-primary bg-gradient
                          p-2 rounded-5"></i>
                      </div>
                      <div class="mt-2 mb-2">
                        <h1>123</h1>
                      </div>
                      <div>
                        <small class="text-body-secondary bg-body-tertiary fst-italic py-1 px-2 rounded-3">
                          Total halaman yang terbit
                        </small>
                      </div>
                    </div>
                    <div class="custom-overlay d-flex flex-column py-3 px-4 w-100 h-100 shadow rounded-4 my-0 mx-2">
                      <div class="d-flex flex-row justify-content-between align-items-center">
                        <h5 class="m-0">Komentar</h5>
                        <i class="fa-solid fa-newspaper fs-4 text-light bg-primary bg-gradient
                          p-2 rounded-5"></i>
                      </div>
                      <div class="mt-2 mb-2">
                        <h1>123</h1>
                      </div>
                      <div>
                        <small class="text-body-secondary bg-body-tertiary fst-italic py-1 px-2 rounded-3">
                          Total komentar pada berita/artikel
                        </small>
                      </div>
                    </div>
                  </div>
                  <div class="container mb-3 p-0">
                    <div class="row">
                      <div class="col-8">
                        <div class="card mb-4 rounded-4 shadow">
                          <div class="card-header">
                            Chart Postingan
                          </div>
                          <div class="card-body">
                            <div>
                              <canvas id="artikelChart" data-url="<?= base_url('artikel/chartdata') ?>"></canvas>
                            </div>
                          </div>
                          <div class="card-footer"></div>
                        </div>
                        <div class="card mt-4 rounded-4 shadow">
                          <div class="card-header">
                            Google Review <span class="badge text-bg-danger">Coming Soon</span>
                          </div>
                          <div class="card-body">
                            <div>
                              
                            </div>
                          </div>
                          <div class="card-footer"></div>
                        </div>
                        <div class="card mt-4 rounded-4 shadow">
                          <div class="card-header">
                            Komentar
                          </div>
                          <div class="card-body">
                            <div>
                              
                            </div>
                          </div>
                          <div class="card-footer"></div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card rounded-4 shadow">
                          <div class="card-header">
                            Lintas Pengguna Aktif
                          </div>
                          <div class="card-body py-1 px-2">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                <div class="d-flex flex-row align-items-center mb-1">
                                  <i class="fa-solid fa-power-off me-1 text-bg-success p-1 rounded-circle"></i>
                                  <span>Super Admin</span>
                                </div>
                                <span class="fst-italic text-secondary">
                                  Sedang Aktif
                                </span>
                              </li>
                              <li class="list-group-item">
                                <div class="d-flex flex-row align-items-center mb-1">
                                  <i class="fa-solid fa-power-off me-1 text-bg-danger p-1 rounded-circle"></i>
                                  <span>Admin</span>
                                </div>
                                <span class="fst-italic text-secondary">
                                  Aktif 30 menit yang lalu
                                </span>
                              </li>
                              <li class="list-group-item">
                                <div class="d-flex flex-row align-items-center mb-1">
                                  <i class="fa-solid fa-power-off me-1 text-bg-success p-1 rounded-circle"></i>
                                  <span>Editor</span>
                                </div>
                                <span class="fst-italic text-secondary">
                                  Sedang Aktif
                                </span>
                              </li>
                              <li class="list-group-item">
                                <div class="d-flex flex-row align-items-center mb-1">
                                  <i class="fa-solid fa-power-off me-1 text-bg-danger p-1 rounded-circle"></i>
                                  <span>Contributor</span>
                                </div>
                                <span class="fst-italic text-secondary">
                                  Aktif 1 hari yang lalu
                                </span>
                              </li>
                            </ul>
                          </div>
                          <div class="card-footer">
                            <small class="fst-italic text-secondary">Total Akun Pengguna: 100 orang</small>
                          </div>
                        </div>
                        <div class="card mt-4 rounded-4 shadow">
                          <div class="card-header">
                            Kategori
                          </div>
                          <div class="card-body">
                            <div>
                              
                            </div>
                          </div>
                          <div class="card-footer"></div>
                        </div>
                        <div class="card mt-4 rounded-4 shadow">
                          <div class="card-header">
                            Kritik & Saran
                          </div>
                          <div class="card-body">
                            <div>
                              
                            </div>
                          </div>
                          <div class="card-footer"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
          </div>
        </div>
      </div>
    </div>
    <?= view('templates/js_core.php'); ?>
  </body>
</html>