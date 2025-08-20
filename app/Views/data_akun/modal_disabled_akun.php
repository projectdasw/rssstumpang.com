<!-- Modal Edit Data -->
<div class="modal fade" id="disabledAcc<?= $akun['id_user']?>" tabindex="-1" aria-labelledby="disabledAccLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" action="/data_akun/disabled_acc" method="post">
            <?= csrf_field(); ?>
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="disabledAccLabel">
                    <i class="fa-solid fa-triangle-exclamation text-danger"></i>
                    <span>Peringatan</span>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_user" value="<?= $akun['id_user'] ?>">
                <input type="hidden" name="nama_lengkap" value="<?= esc($akun['nama_lengkap']) ?>">
                <span class="fs-6">
                    Apakah Anda yakin ingin menonaktifkan akun <strong><?= esc($akun['nama_lengkap']) ?></strong>?
                </span>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="fa-solid fa-user-slash"></i>
                    <span>Nonaktifkan Akun</span>
                </button>
                <button type="button" class="btn btn-sm btn-success" data-bs-dismiss="modal">
                    <i class="fa-solid fa-user-check"></i>
                    <span>Tetap aktifkan Akun</span>
                </button>
            </div>
        </form>
    </div>
</div>