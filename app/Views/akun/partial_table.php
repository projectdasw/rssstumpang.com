<?php $no = 1; foreach ($akun as $user): ?>
<tr>
  <td><?= $no++ ?></td>
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

<?php if (empty($akun)): ?>
<tr><td colspan="5" class="text-center">Data tidak ditemukan.</td></tr>
<?php endif; ?>
