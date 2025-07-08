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

function updateClock() {
    const now = new Date();
    const jam = String(now.getHours()).padStart(2, '0');
    const menit = String(now.getMinutes()).padStart(2, '0');
    const detik = String(now.getSeconds()).padStart(2, '0');
    document.getElementById('clock').textContent = jam + ":" + menit + ":" + detik;

    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const tanggal = now.toLocaleDateString('id-ID', options);
    document.getElementById('date').textContent = tanggal;
}

setInterval(updateClock, 1000);
updateClock();

// CRUD FUNCTION
const searchInput = document.getElementById('searchInput');
const tableBody = document.getElementById('akunTableBody');

// Realtime pencarian
searchInput.addEventListener('input', function () {
  loadData(this.value);
});

// Pagination AJAX
document.addEventListener('click', function (e) {
  const target = e.target.closest('.pagination a');
  if (target) {
    e.preventDefault();
    const url = new URL(target.href);
    const page = url.searchParams.get('page');
    loadData(searchInput.value, page);
  }
});

function loadData(keyword = '', page = 1) {
  fetch(`/akun/search?q=${encodeURIComponent(keyword)}&page=${page}`)
    .then(res => res.text())
    .then(html => {
      tableBody.innerHTML = html;
    }
  );
}

function openDetailModal(id_user) {
  fetch('/akun/detail/' + id_user)
    .then(res => {
      if (!res.ok) throw new Error('Gagal memuat detail akun');
      return res.json();
    })
    .then(data => {
      document.getElementById('detail_nama_lengkap').textContent = data.nama_lengkap;
      document.getElementById('detail_username').textContent = data.username;
      document.getElementById('detail_role').textContent = data.role;
      document.getElementById('detail_last_active').textContent = data.last_active ?? '-';

      new bootstrap.Modal(document.getElementById('detail_akun')).show();
    })
    .catch(error => {
      console.error(error);
      alert('Terjadi kesalahan saat memuat data.');
    });
}

function openEditModal(id_user) {
  fetch('/akun/edit/' + id_user)
    .then(response => {
      if (!response.ok) throw new Error("Gagal mengambil data.");
      return response.json();
    })
    .then(data => {
      // Isi form modal
      document.getElementById('edit_nama_lengkap').value = data.nama_lengkap;
      document.getElementById('edit_username').value = data.username;
      document.getElementById('edit_role').value = data.role;

      // Set action form update
      document.getElementById('form_edit').action = '/akun/update/' + data.id_user;

      // Tampilkan modal
      new bootstrap.Modal(document.getElementById('edit_akun')).show();
    })
    .catch(err => {
      console.error(err);
      alert('Terjadi kesalahan saat memuat data akun.');
    });
}

function confirmDelete(id_user) {
  Swal.fire({
    title: 'Hapus akun ini?',
    text: 'Data tidak dapat dikembalikan!',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#6c757d',
    confirmButtonText: 'Ya, hapus!',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = '/akun/delete/' + id_user;
    }
  });
}
