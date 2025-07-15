<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Katalog Produk</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    body {
      font-family: sans-serif;
      margin: 20px;
      background-color: #f8f9fa;
    }

    h1 {
      text-align: center;
      margin-bottom: 40px;
      color: #444;
      text-shadow: 1px 1px 2px #ccc;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 16px;
    }

    .card {
      background: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      width: 220px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 16px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .card img {
      max-width: 100%;
      height: auto;
      margin-bottom: 16px;
    }

    .card h3 {
      margin: 8px 0 6px;
      font-size: 16px;
    }

    .card p {
      margin: 4px 0;
      font-size: 14px;
    }

    .stok {
      color: red;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .button-group {
      margin-top: auto;
      width: 100%;
    }

    .btn {
      display: block;
      padding: 8px 12px;
      margin-top: 6px;
      border: none;
      border-radius: 4px;
      width: 100%;
      box-sizing: border-box;
      cursor: pointer;
      text-decoration: none;
      font-size: 14px;
      text-align: center;
    }

    .btn-wa {
      background-color: #25D366;
      color: white;
    }

    .btn-email {
      background-color: #2d66c7;
      color: white;
    }

    .btn:hover {
      opacity: 0.9;
    }

    .btn i {
      margin-right: 6px;
      font-size: 16px;
      vertical-align: middle;
    }

    footer {
  margin-top: 60px;
  background-color: #fff3cd;
  border-top: 1px solid #ffeeba;
  padding: 25px 15px;
  text-align: center;
  color: #333;
  font-size: 15px;
  width: 100%;
  box-sizing: border-box;
}

footer p {
  margin: 6px 0;
}

footer strong {
  font-weight: 600;
}

  </style>
</head>
<body>
  <h1>Katalog Produk</h1>

  <div class="container">
    @php
      $produk = [
        ['Roti Manis', 'rotimanis.jpg', 8000],
        ['Roti Tawar', 'rotitawar.jpg', 7000],
        ['Roti Coklat', 'roticoklat.jpg', 9000],
        ['Roti Strawberry', 'rotistrawberry.jpg', 9000],
        ['Roti Keju', 'rotikeju.jpg', 10000],
        ['Roti Kornet', 'rotikornet2.jpg', 11000],
        ['Roti Susu', 'rotisusu.jpg', 9000],
        ['Roti Cinnamon', 'roticinnamon2.jpg', 12000],
        ['Roti Cream', 'roticream2.jpg', 10000],
        ['Roti Pisang', 'rotipisang2.jpg', 9500],
        ['Roti Moka', 'rotimoka.jpg', 9000],
        ['Roti Kismis', 'rotikismis.jpg', 9500],
        ['Roti Bakar', 'rotibakar2.jpg', 8000],
        ['Roti Coklat Keju', 'roticoklatkeju.jpg', 11000],
        ['Roti Pandan', 'rotipandan.jpg', 9000],
        ['Roti Sosis', 'rotisosis2.jpg', 11000],
      ];
      $nomorWa = '6282113146940';
    @endphp

    @foreach($produk as $item)
      @php
        $pesan = "Halo, saya ingin memesan {$item[0]}. Apakah masih tersedia?";
        $pesanEncoded = urlencode($pesan);
        $linkWa = "https://wa.me/{$nomorWa}?text={$pesanEncoded}";
      @endphp

      <div class="card">
        <img src="{{ asset('images/' . $item[1]) }}" alt="{{ $item[0] }}">
        <h3>{{ $item[0] }}</h3>
        <p>Rp{{ number_format($item[2], 0, ',', '.') }}</p>
        <p class="stok">Stok: 10</p>
        <div class="button-group">
          <a class="btn btn-wa" href="{{ $linkWa }}" target="_blank">
            <i class="bi bi-whatsapp"></i>Pesan via WhatsApp
          </a>
          <a class="btn btn-email" href="#">
            <i class="bi bi-envelope-fill"></i>Pesan via Email
          </a>
        </div>
      </div>
    @endforeach
  </div>

  <div style="display: flex; justify-content: center; margin-top: 40px;">
    <button onclick="history.back()" style="
      padding: 10px 20px;
      background-color: blue;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      display: flex;
      align-items: center;
      gap: 8px;
    ">
      <i class="bi bi-arrow-left-circle-fill" style="font-size: 16px;"></i> Kembali
    </button>
  </div>

  <footer>
    <p>Terima kasih banyak telah memesan roti kami! 🥐</p>
    <p><strong>Semoga rasanya bisa menghangatkan harimu seperti hangatnya roti yang baru keluar dari oven. ❤️</strong></p>
  </footer>

</body>
</html>
