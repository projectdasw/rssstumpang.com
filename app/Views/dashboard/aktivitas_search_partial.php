<ul class="list-group list-group-flush">
    <?php if (!empty($aktivitas)): ?>
        <?php foreach($aktivitas as $log): ?>
            <li class="list-group-item p-2">
                <strong><?= format_tanggal_indonesia($log['tanggal']) ?> <?= $log['waktu'] ?></strong>
                <span class="badge bg-<?= $log['aktivitas'] == 'login' ? 'success' : 'danger' ?>">
                    <?= $log['aktivitas'] ?>
                </span>
                <p class="mb-0"><?= $log['nama_akun'] ?>: <?= $log['keterangan'] ?></p>
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <li class="list-group-item p-2"><strong>Belum ada aktivitas tercatat</strong></li>
    <?php endif; ?>
</ul>

<?= $pager->links('group1') ?>
