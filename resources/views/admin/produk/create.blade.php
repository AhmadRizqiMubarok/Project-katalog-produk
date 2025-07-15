<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-label {
            font-weight: 500;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Panel</a>
    </div>
</nav>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card p-4">
                <h3 class="mb-4">Tambah Produk Baru</h3>

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
                            ← Kembali ke Daftar Produk
                        </a>
                        <button type="submit" class="btn btn-primary px-4">
                            Simpan Produk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="text-center text-muted py-4">
    &copy; {{ date('Y') }} Admin Panel &mdash; Tambah Produk
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
