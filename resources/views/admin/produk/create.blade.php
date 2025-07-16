<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f0f2f5, #e9ecef);
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background: linear-gradient(45deg, #0d6efd, #6610f2);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.3rem;
        }

        .card {
            background-color: #fff;
            border-radius: 18px;
            padding: 2rem;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.12);
        }

        .form-label {
            font-weight: 600;
            color: #343a40;
        }

        .form-control:focus {
            border-color: #6610f2;
            box-shadow: 0 0 0 0.2rem rgba(102, 16, 242, 0.25);
        }

        .btn-primary {
            background-color: #6610f2;
            border: none;
            padding: 0.6rem 1.4rem;
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #520dc2;
            box-shadow: 0 0.5rem 1.2rem rgba(102, 16, 242, 0.4);
            transform: scale(1.03);
        }

        .btn-outline-secondary:hover {
            background-color: #e2e6ea;
        }

        .alert {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        footer {
            font-size: 0.9rem;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">📦 Admin Produk</a>
    </div>
</nav>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <h3 class="mb-4 text-dark fw-bold"><i class="fas fa-box-open me-2 text-primary"></i> Tambah Produk Baru</h3>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Terjadi kesalahan:</strong>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" name="nama" id="nama" class="form-control" required value="{{ old('nama') }}">
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control" required value="{{ old('harga') }}">
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" name="stok" id="stok" class="form-control" required value="{{ old('stok') }}">
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Produk</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('admin.produk.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Simpan Produk
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<footer class="text-center text-muted py-4">
    &copy; {{ date('Y') }} Admin Panel — Tambah Produk
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
