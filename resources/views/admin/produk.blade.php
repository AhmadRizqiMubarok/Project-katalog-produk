<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        /* body {
            background: #f2f4f7;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background: linear-gradient(45deg, #007bff, #6610f2);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.4rem; */
        }

        .card {
            border: none;
            border-radius: 18px;
            box-shadow: 0 12px 24px rgba(0,0,0,0.07);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 36px rgba(0,0,0,0.12);
        }

        .btn {
            transition: all 0.2s ease-in-out;
        }

        .btn-action:hover {
            transform: scale(1.05);
        }

        .product-thumb {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid #dee2e6;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .badge-status {
            padding: 0.4em 0.8em;
            font-size: 0.75rem;
            border-radius: 1rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        .badge-aktif {
            background: #28a745;
            color: white;
        }

        .badge-menipis {
            background: #ffc107;
            color: #212529;
        }

        .badge-habis {
            background: #dc3545;
            color: white;
        }

        /* .table th {
            background-color: #212529;
            color: #fff;
            vertical-align: middle;
        } */

        /* .table td {
            vertical-align: middle;
        } */

        /* .section-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #343a40;
        } */

        /* footer {
            background-color: #f8f9fa;
            font-size: 0.9rem;
        } */
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
      <li><a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
      <li><a href="produk" class="nav-link active"><i class="fas fa-box"></i> Produk</a></li>
      <li><a href="#" class="nav-link"><i class="fas fa-cogs"></i> Pengaturan</a></li>
      <li class="mt-auto"><a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i> Keluar</a></li>
    </ul>
  </nav>

   <!-- Main Content -->
   <div id="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-custom mb-4">
      <span class="sidebar-toggler me-3"><i class="fas fa-bars fa-lg"></i></span>
      <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Dashboard</a>
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

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="section-title">Daftar Produk</h3>
        <div>
            <a href="{{ route('admin.produk.create') }}" class="btn btn-success">
                <i class="fas fa-plus me-1"></i> Tambah Produk
            </a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
        </div>
    @endif

    <div class="card p-4">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle mb-0">
                <thead class="text-center">
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th>Foto</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th style="width: 200px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produks as $produk)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">
                                @if($produk->foto)
                                    <img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto Produk" class="product-thumb">
                                @else
                                    <span class="badge bg-secondary">Tidak ada</span>
                                @endif
                            </td>
                            <td>{{ $produk->nama }}</td>
                            <td>Rp{{ number_format($produk->harga, 0, ',', '.') }}</td>
                            <td class="text-center">{{ $produk->stok }}</td>
                            <td class="text-center">
                                @if ($produk->stok == 0)
                                    <span class="badge-status badge-habis">Habis</span>
                                @elseif ($produk->stok < 10)
                                    <span class="badge-status badge-menipis">Menipis</span>
                                @else
                                    <span class="badge-status badge-aktif">Aktif</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.produk.show', $produk->id) }}" class="btn btn-sm btn-info btn-action text-white me-1">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.produk.edit', $produk->id) }}" class="btn btn-sm btn-warning btn-action text-white me-1">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.produk.destroy', $produk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger btn-action">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4">
                                <span class="text-muted">Belum ada produk ditambahkan.</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<footer class="text-center text-muted py-4">
    &copy; {{ date('Y') }} Admin Panel — Semua Hak Dilindungi.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
