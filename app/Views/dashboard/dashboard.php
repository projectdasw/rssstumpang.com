<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CI4 Dashboard</a>
    <div class="d-flex">
      <span class="me-3">Hello, <?= session()->get('username') ?></span>
      <a href="<?= base_url('/logout') ?>" class="btn btn-outline-danger btn-sm">Logout</a>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <h3>Selamat datang di Dashboard</h3>
    <p>Ini adalah halaman setelah login.</p>
</div>
</body>
</html>