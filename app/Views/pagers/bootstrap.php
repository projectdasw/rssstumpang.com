<?php $pager->setSurroundCount(1); ?>
<nav>
    <ul class="pagination m-0">
        <!-- Tombol Previous -->
        <?php if ($pager->hasPreviousPage()) : ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getPreviousPage() ?>" aria-label="Previous">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                    <span>Prev</span>
                </a>
            </li>
        <?php else: ?>
            <li class="page-item disabled">
                <span class="page-link">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                    <span>Prev</span>
                </span>
            </li>
        <?php endif ?>

        <!-- Link Angka Halaman -->
        <?php foreach ($pager->links() as $link): ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
            </li>
        <?php endforeach ?>

        <!-- Tombol Next -->
        <?php if ($pager->hasNextPage()) : ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getNextPage() ?>" aria-label="Next">
                    <span>Next</span>
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </li>
        <?php else: ?>
            <li class="page-item disabled">
                <span class="page-link">
                    <span>Next</span>
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </span>
            </li>
        <?php endif ?>
    </ul>
</nav>
