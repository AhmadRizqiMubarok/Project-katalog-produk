<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk - Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #f1f3f5, #e9ecef);
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background: linear-gradient(45deg, #0d6efd, #6610f2);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.4rem;
        }

        .page-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #343a40;
        }

        .card {
            border-radius: 18px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            transition: 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: 600;
        }

        .form-control:focus {
            border-color: #6610f2;
            box-shadow: 0 0 0 0.2rem rgba(102, 16, 242, 0.25);
        }

        .btn-primary {
            background-color: #6610f2;
            border: none;
            transition: all 0.3s ease;
            padding: 0.6rem 1.5rem;
        }

        .btn-primary:hover {
            background-color: #520dc2;
            transform: scale(1.03);
            box-shadow: 0 0.5rem 1rem rgba(102, 16, 242, 0.3);
        }

        .btn-secondary {
            transition: all 0.2s ease;
        }

        .btn-secondary:hover {
            background-color: #ced4da;
        }

        .product-preview {
            max-width: 160px;
            max-height: 160px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid #dee2e6;
        }

        .alert {
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        footer {
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-cogs me-1"></i> Admin Panel</a>
    </div>
</nav>

<div class="container my-5">
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div class="page-title"><i class="fas fa-edit me-2 text-primary"></i>Edit Produk</div>
        <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    {{-- Notifikasi sukses --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
        </div>
    @endif

    {{-- Tampilkan error validasi --}}
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

    <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data" class="card p-4 bg-white">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $produk->nama) }}" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $produk->harga) }}" required>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="{{ old('stok', $produk->stok) }}" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto Produk (opsional)</label>
            @if ($produk->foto)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto Produk" class="product-preview">
                </div>
            @endif
            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
        </div>

        <div class="text-end mt-4">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Simpan Perubahan
            </button>
        </div>
    </form>
</div>

<footer class="text-center py-4 mt-5">
    &copy; {{ date('Y') }} Admin Panel — Edit Produk
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
