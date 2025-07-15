<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Admin</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <style>
    :root {
      --bg-light: #f4f6f9;
      --sidebar-bg: #1e293b;
      --sidebar-hover: #334155;
      --primary: #3c8dbc;
      --danger: #e74c3c;
      --success: #2ecc71;
      --warning: #f39c12;
    }

    body {
      background-color: var(--bg-light);
      font-family: 'Segoe UI', sans-serif;
    }

    /* SIDEBAR */
    #sidebar {
      width: 250px;
      background-color: var(--sidebar-bg);
      color: white;
      position: fixed;
      height: 100vh;
      transition: all 0.3s ease;
      z-index: 1000;
    }

    #sidebar .nav-link {
      color: #cbd5e1;
      padding: 0.85rem 1.2rem;
      display: flex;
      align-items: center;
    }

    #sidebar .nav-link i {
      width: 20px;
      margin-right: 12px;
    }

    #sidebar .nav-link:hover,
    #sidebar .nav-link.active {
      background-color: var(--sidebar-hover);
      color: #fff;
    }

    #sidebar .brand {
      padding: 1rem;
      font-size: 1.25rem;
      font-weight: bold;
      text-align: center;
      border-bottom: 1px solid #334155;
    }

    /* CONTENT */
    #content {
      margin-left: 250px;
      padding: 2rem;
      transition: margin-left 0.3s;
    }

    .navbar-custom {
      background: var(--primary);
      color: white;
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link {
      color: white;
    }

    /* CARDS */
    .card-stats {
      position: relative;
      border-radius: 0.75rem;
      border: none;
      overflow: hidden;
      color: white;
      padding: 1.5rem;
      min-height: 150px;
    }

    .card-stats .card-icon {
      position: absolute;
      top: 1rem;
      right: 1rem;
      font-size: 2.5rem;
      opacity: 0.2;
    }

    .card-stats .card-body h5 {
      font-weight: 600;
    }

    .card-stats:hover .card-icon {
      opacity: 0.35;
      transition: 0.3s;
    }

    .card-header {
      background-color: transparent;
      border-bottom: 1px solid #dee2e6;
      font-weight: bold;
    }

    footer {
      padding: 2rem 0;
      font-size: 0.85rem;
      color: #6c757d;
    }

    @media (max-width: 768px) {
      #sidebar {
        left: -100%;
        position: fixed;
        transition: all 0.3s ease;
      }

      #sidebar.show {
        left: 0;
      }

      #content {
        margin-left: 0;
      }

      #content.overlay::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.4);
        width: 100%;
        height: 100%;
        z-index: 998;
      }

      .sidebar-toggler {
        display: block !important;
        cursor: pointer;
      }
    }

    .sidebar-toggler {
      display: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <nav id="sidebar">
    <div class="brand">AdminLTE</div>
    <ul class="nav flex-column mt-3">
      <li><a href="#" class="nav-link active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
      <li><a href="produk" class="nav-link"><i class="fas fa-box"></i> Produk</a></li>
      <li><a href="#" class="nav-link"><i class="fas fa-cogs"></i> Pengaturan</a></li>
      <li class="mt-auto"><a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i> Keluar</a></li>
    </ul>
  </nav>

  <!-- Main Content -->
  <div id="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-custom mb-4">
      <span class="sidebar-toggler me-3"><i class="fas fa-bars fa-lg"></i></span>
      <a class="navbar-brand" href="#">Dashboard</a>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            <i class="far fa-user-circle"></i> {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ route('admin.profile.edit') }}">Profil</a></li>
            <li>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

    <!-- Dashboard Cards -->
    <div class="row g-4">
      <div class="col-md-6 col-xl-3">
        <div class="card-stats bg-primary">
          <div class="card-body">
            <h5>Produk</h5>
            <h2>120</h2>
            <p>Total Produk</p>
            <i class="fas fa-box card-icon"></i>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card-stats bg-success">
          <div class="card-body">
            <h5>Pendapatan</h5>
            <h2>Rp 12 Jt</h2>
            <p>Bulan Ini</p>
            <i class="fas fa-coins card-icon"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="card mt-5">
      <div class="card-header">Daftar Produk</div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped align-middle mb-0">
            <thead class="table-light">
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
              <tr>
                <td>4</td>
                <td>Matcha Latte</td>
                <td>Minuman</td>
                <td>50</td>
                <td><span class="badge bg-success">Aktif</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <footer class="text-center mt-4">© 2025 Dashboard Admin Modern</footer>
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
