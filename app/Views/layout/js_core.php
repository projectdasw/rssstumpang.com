<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>

<!-- BOOTSTRAP CDN JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK"
    crossorigin="anonymous"></script>
<!-- Masonry Layout - Bootstrap CDN -->
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
    crossorigin="anonymous" async></script>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- All JavaScript Functions -->
    <!-- JavaScript functions for the dashboard, including form validation, tooltips, and chart rendering. -->
    <script>
        window.addEventListener("pageshow", function(event) {
            if (event.persisted) {
                window.location.reload();
            }
        });
    </script>

    <!-- Session Flash Messages -->
    <!-- These scripts handle displaying flash messages for login, logout, and other notifications. -->
        <!-- Login Page -->
        <?php if (session()->getFlashdata('welcome')): ?>
            <script>
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: '<?= session()->getFlashdata('welcome') ?>',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });
            </script>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            <script>
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: true,
                    icon: 'error',
                    title: '<?= session()->getFlashdata('error') ?>'
                });
            </script>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')) : ?>
            <script>
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: true,
                    icon: 'success',
                    title: '<?= session()->getFlashdata('success') ?>'
                });
            </script>
        <?php endif; ?>

        <?php if (session()->getFlashdata('info')) : ?>
            <script>
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: true,
                    icon: 'info',
                    title: '<?= session()->getFlashdata('info') ?>'
                });
            </script>
        <?php endif; ?>

        <!-- Logout Process -->
        <script>
            function confirmLogout(e) {
                e.preventDefault();
                const logoutUrl = e.currentTarget.getAttribute('data-href');

                Swal.fire({
                    title: 'Yakin ingin logout?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ff0000ff',
                    confirmButtonText: `
                        <i class="fa-solid fa-check"></i>
                        <span>Ya, Logout</span>
                    `,
                    cancelButtonColor: '#01a109ff',
                    cancelButtonText: `
                        <i class="fa-solid fa-xmark"></i>
                        <span>Tidak</span>
                    `
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = logoutUrl;
                    }
                });

                return false;
            }
        </script>

    <!-- SweetAlert2 Delete Confirmation (FOR ALL FORM) -->
     <script>
        function confirmDelete(e) {
            e.preventDefault();
            const deleteUrl = e.currentTarget.getAttribute('data-href');

            Swal.fire({
                title: 'Yakin ingin menghapus akun ini?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: `
                    <i class="fa-solid fa-check"></i>
                    <span>Ya, Hapus</span>
                `,
                cancelButtonText: `
                    <i class="fa-solid fa-xmark"></i>
                    <span>Batal</span>
                `
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = deleteUrl;
                }
            });

            return false;
        }
     </script>

    <!--  Bootstrap JS -->
    <script>
        // BOOTSTRAP FORM VALIDATION
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
        })()
        // BOOTSTRAP FORM VALIDATION

        const tooltipTriggerList = document.querySelectorAll('[bs-tooltips="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        // Show/Hide Password Field
        const toggleBtn = document.getElementById('reveal_pass');
        const passwordField = document.getElementById('password');
        const icon = document.getElementById('toggle_icon');

        toggleBtn.addEventListener('click', function () {
            const isPassword = passwordField.type === 'password';
            passwordField.type = isPassword ? 'text' : 'password';
            // Ganti ikon
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    </script>

    <!-- Chart.js Functionality -->
    <script>
        const ctx = document.getElementById('statistik_konten');
        const stats_pengunjung = document.getElementById('statistik_pengunjung');
        const data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }]
        };

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });

        new Chart(stats_pengunjung, {
            type: 'line',
            data: data,
        });
    </script>
<!-- All JavaScript Functions -->