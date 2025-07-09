<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Roti Sari</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3 text-uppercase" href="{{ url('/') }}">
      Roti Sari
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarBasic">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Menu 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu 2</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <div class="container mt-5 text-center">
    <h1>Selamat Datang!</h1>
    <p>Ini adalah halaman landing kosong siap kamu modifikasi.</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
