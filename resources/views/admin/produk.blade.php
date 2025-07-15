<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Panel</a>
    </div>
</nav>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Produk</h2>
        <a href="{{ route('admin.produk.create') }}" class="btn btn-success">+ Tambah Produk</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle bg-white">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
@forelse ($produks as $produk)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $produk->nama }}</td>
        <td>Rp{{ number_format($produk->harga, 0, ',', '.') }}</td>
        <td>{{ $produk->stok }}</td>
        <td>
            <a href="{{ route('admin.produk.edit', $produk->id) }}" class="btn btn-sm btn-warning">Edit</a>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5" class="text-center">Belum ada produk.</td>
    </tr>
@endforelse
</tbody>

        </table>
    </div>
</div>

<footer class="text-center text-muted py-3 bg-white border-top">
    &copy; {{ date('Y') }} Admin Panel - Produk
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
