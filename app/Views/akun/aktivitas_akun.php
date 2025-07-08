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
          <th>Tanggal</th>
          <th>Waktu</th>
          <th>Nama Akun</th>
          <th>Aktivitas</th>
          <th>Keterangan</th>
          <th>IP Address</th>
          <th>User Agent</th>
        </tr>
      </thead>
      <tbody id="akunTableBody">
        <?php if (!empty($aktivitas_akun)): ?>
          <?php $no = 1; foreach ($aktivitas_akun as $user): ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= esc($user['tanggal']) ?></td>
              <td><?= esc($user['waktu']) ?></td>
              <td><?= esc($user['nama_akun']) ?></td>
              <td><?= esc($user['aktivitas']) ?></td>
              <td><?= esc($user['keterangan']) ?></td>
              <td><?= esc($user['ip_address']) ?></td>
              <td><?= esc($user['user_agent']) ?></td>
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
    $currentPage = ($pager->getCurrentPage('aktivitas_akun') ?? 1);
    $total = $pager->getTotal('aktivitas_akun');
    $start = ($total > 0) ? (($currentPage - 1) * $perPage + 1) : 0;
    $end = min($currentPage * $perPage, $total);
  ?>
  <div class="card-footer text-body-secondary d-flex flex-row justify-content-between align-items-center">
      <span>Menampilkan data <?= $start ?> - <?= $end ?> dari <?= $total ?></span>
      <?= $pager->links('aktivitas_akun', 'bootstrap') ?>
  </div>
</div>