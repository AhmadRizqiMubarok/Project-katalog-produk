@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Tambah Produk</h2>
    <form method="POST" action="{{ route('admin.produk.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Foto Produk</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
