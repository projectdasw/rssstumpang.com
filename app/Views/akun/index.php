<div class="card rounded-4">
  <div class="card-header d-flex flex-row justify-content-between align-items-center">
    <div>
      <h4 class="m-0">Akun Pengguna</h4>
    </div>
    <div class="d-flex flex-row">
      <div class="row align-items-center">
        <div class="col-auto p-0">
          <label class="col-form-label">Pencarian:</label>
        </div>
        <div class="col-auto">
          <input type="search" class="form-control form-control-sm" id="searchInput" placeholder="Cari...">
        </div>
      </div>
      <button class="btn btn-sm btn-success bg-gradient ms-3"
        data-bs-toggle="modal" data-bs-target="#tambah_akun">
        <i class="fa-solid fa-square-plus"></i>
        <span>Tambah</span>
      </button>
    </div>
  </div>
  <div class="card-body">
    <table class="table table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Lengkap</th>
          <th>Username</th>
          <th>Role</th>
          <th></th>
        </tr>
      </thead>
      <tbody id="akunTableBody">
        <?php if (!empty($akun)): ?>
          <?php $no = 1; foreach ($akun as $user): ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= esc($user['nama_lengkap']) ?></td>
              <td><?= esc($user['username']) ?></td>
              <td><?= esc($user['role']) ?></td>
              <td>
                <button class="btn btn-sm btn-info" onclick="openDetailModal('<?= $user['id_user'] ?>')">
                  <i class="fa-solid fa-eye"></i> Detail
                </button>
                <button class="btn btn-sm btn-warning" onclick="openEditModal('<?= $user['id_user'] ?>')">
                  <i class="fa-solid fa-pen-clip"></i> Edit
                </button>
                <button class="btn btn-sm btn-danger" onclick="confirmDelete('<?= $user['id_user'] ?>')">
                  <i class="fa-solid fa-trash-can"></i> Hapus
                </button>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr><td colspan="5" class="text-center">Belum ada data pengguna.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
  <?php
    $perPage = 10;
    $currentPage = ($pager->getCurrentPage('akun') ?? 1);
    $total = $pager->getTotal('akun');
    $start = ($total > 0) ? (($currentPage - 1) * $perPage + 1) : 0;
    $end = min($currentPage * $perPage, $total);
  ?>
  <div class="card-footer text-body-secondary d-flex flex-row justify-content-between align-items-center">
      <span>Menampilkan data <?= $start ?> - <?= $end ?> dari <?= $total ?></span>
      <?= $pager->links('akun', 'bootstrap') ?>
  </div>
</div>