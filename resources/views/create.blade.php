<form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Produk</label>
    <input type="text" name="nama" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="gambar" class="form-label">Gambar Produk</label>
    <input type="file" name="gambar" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>