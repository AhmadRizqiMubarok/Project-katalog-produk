<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AdminLTE Style Responsive</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <style>
    :root {
      --main-bg: #f4f6f9;
      --sidebar-bg: #343a40;
      --sidebar-width: 240px;
      --sidebar-collapsed-width: 70px;
      --transition-speed: 0.3s;
    }

    body {
      font-size: 0.9rem;
      background: var(--main-bg);
      overflow-x: hidden;
    }

    /* Sidebar */
    #sidebar {
      width: var(--sidebar-width);
      background: var(--sidebar-bg);
      min-height: 100vh;
      color: #fff;
      transition: all var(--transition-speed);
      position: fixed;
      z-index: 1000;
    }

    #sidebar.collapsed {
      width: var(--sidebar-collapsed-width);
    }

    #sidebar .nav-link {
      color: #adb5bd;
      padding: 0.75rem 1rem;
      white-space: nowrap;
    }

    #sidebar .nav-link:hover,
    #sidebar .nav-link.active {
      background: #495057;
      color: #fff;
    }

    #sidebar .nav-link i {
      width: 20px;
    }

    #sidebar.collapsed .nav-text {
      display: none;
    }

    /* Content wrapper */
    #content {
      margin-left: var(--sidebar-width);
      transition: margin-left var(--transition-speed);
      padding: 20px;
    }

    #content.collapsed {
      margin-left: var(--sidebar-collapsed-width);
    }

    /* Navbar */
    .navbar-custom {
      background: #3c8dbc;
      color: #fff;
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link {
      color: #fff;
    }

    /* Cards */
    .card {
      border: none;
      border-radius: 0.75rem;
      box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.075);
      position: relative;
      overflow: hidden;
    }

    .card-icon {
      position: absolute;
      bottom: 10px;
      right: 10px;
      font-size: 2.5rem;
      opacity: 0.2;
    }

    .card:hover .card-icon {
      opacity: 0.4;
      transition: 0.3s;
    }

    /* Table */
    .table th {
      background: #dee2e6;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      #sidebar {
        position: fixed;
        left: -100%;
        top: 0;
        height: 100%;
        transition: all var(--transition-speed);
      }

      #sidebar.show {
        left: 0;
      }

      #content {
        margin-left: 0;
      }

      #content.overlay::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.3);
        z-index: 998;
      }

      .sidebar-toggler {
        display: block !important;
      }
    }

    .sidebar-toggler {
      display: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div id="main">
    <!-- Sidebar -->
    <nav id="sidebar" class="d-flex flex-column">
      <div class="p-3 fw-bold text-center border-bottom">AdminLTE</div>
      <ul class="nav flex-column mt-3">
        <li><a href="#" class="nav-link active"><i class="fas fa-tachometer-alt"></i> <span class="nav-text">Dashboard</span></a></li>
        <li><a href="#" class="nav-link"><i class="fas fa-box"></i> <span class="nav-text">Produk</span></a></li>
        <li><a href="#" class="nav-link"><i class="fas fa-users"></i> <span class="nav-text">Pengguna</span></a></li>
        <li><a href="#" class="nav-link"><i class="fas fa-cogs"></i> <span class="nav-text">Pengaturan</span></a></li>
        <li class="mt-auto"><a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i> <span class="nav-text">Keluar</span></a></li>
      </ul>
    </nav>

    <!-- Content -->
    <div id="content">
      <!-- Navbar -->
      <nav class="navbar navbar-expand navbar-custom px-3 mb-4">
        <span class="sidebar-toggler text-white me-3"><i class="fas fa-bars fa-lg"></i></span>
        <a class="navbar-brand" href="#">Dashboard</a>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
              <i class="far fa-user-circle"></i> Admin
            </a>
            <ul class="dropdown-menu dropdown-menu-end bg-light">
              <li><a class="dropdown-item" href="#">Profil</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav>

      <!-- Cards -->
      <div class="row g-4">
        <div class="col-md-6 col-xl-3">
          <div class="card text-bg-primary">
            <div class="card-body">
              <h5 class="card-title">Produk</h5>
              <h2>120</h2>
              <p>Total Produk</p>
              <i class="fas fa-box card-icon"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card text-bg-success">
            <div class="card-body">
              <h5 class="card-title">Pengguna</h5>
              <h2>75</h2>
              <p>Aktif</p>
              <i class="fas fa-users card-icon"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card text-bg-warning">
            <div class="card-body">
              <h5 class="card-title">Pesanan</h5>
              <h2>34</h2>
              <p>Hari Ini</p>
              <i class="fas fa-shopping-cart card-icon"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card text-bg-danger">
            <div class="card-body">
              <h5 class="card-title">Pendapatan</h5>
              <h2>Rp 12 Jt</h2>
              <p>Bulan Ini</p>
              <i class="fas fa-coins card-icon"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- Table -->
      <div class="card mt-4">
        <div class="card-header bg-white fw-bold">Daftar Produk</div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-hover table-striped align-middle mb-0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Produk</th>
                  <th>Kategori</th>
                  <th>Stok</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Kopi Robusta</td>
                  <td>Minuman</td>
                  <td>32</td>
                  <td><span class="badge bg-success">Aktif</span></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Teh Hitam</td>
                  <td>Minuman</td>
                  <td>0</td>
                  <td><span class="badge bg-danger">Habis</span></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Coklat Bubuk</td>
                  <td>Makanan</td>
                  <td>10</td>
                  <td><span class="badge bg-warning">Menipis</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <footer class="text-center mt-4 small text-muted">© 2025 AdminLTE Styled Dashboard</footer>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');
    const toggler = document.querySelector('.sidebar-toggler');

    toggler.addEventListener('click', () => {
      sidebar.classList.toggle('show');
      content.classList.toggle('overlay');
    });
  </script>
</body>
</html>