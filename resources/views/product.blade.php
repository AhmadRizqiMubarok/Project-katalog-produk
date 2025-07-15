<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Katalog Produk</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-color: #f8f9fa;
    }

    h1 {
      text-align: center;
      padding: 30px 20px;
      margin: 0;
      background-color: #8B4513;
      color: #fff;
      font-size: 32px;
      letter-spacing: 1px;
      text-transform: uppercase;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      border-bottom: 4px solid #f3d19c;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 16px;
      padding: 20px;
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
  margin-bottom: 24px; /* Tambah jarak ke teks */
}

.card h3 {
  margin-top: 12px;
  margin-bottom: 8px;
  font-size: 16px;
}

.card p {
  margin-top: 6px;
  margin-bottom: 6px;
  font-size: 14px;
}

.stok {
  margin-top: 6px;
  margin-bottom: 12px;
  color: red;
  font-weight: bold;
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

    .back-btn {
      display: flex;
      justify-content: center;
      margin: 40px 0;
    }

    .back-btn button {
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
    }

    .footer {
      background-color: #212529;
      color: white;
      padding: 40px 20px 20px;
      box-sizing: border-box;
      width: 100%;
    }

    .footer-container {
      max-width: 1100px;
      margin: 0 auto;
    }

    .footer-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 40px;
    }

    .footer-kontak {
      flex: 1 1 300px;
    }

    .footer-kontak h4 {
      margin-bottom: 16px;
      font-size: 18px;
      font-weight: bold;
    }

    .footer-kontak p {
      margin: 8px 0;
    }

    .footer-kontak a {
      color: #fff;
      text-decoration: underline;
    }

    .footer-maps {
      flex: 1 1 300px;
    }

    .footer-bottom {
      text-align: center;
      margin-top: 30px;
      padding-top: 20px;
      border-top: 1px solid #444;
      font-size: 14px;
      opacity: 0.9;
    }

    .bi {
      fill: currentColor !important;
    }

    .thank-you {
      font-family: 'Segoe UI', 'Trebuchet MS', sans-serif;
      font-size: 18px;
      font-weight: 500;
      color: #4a3f35;
      background-color: #fff7e6;
      padding: 20px 30px;
      margin: 20px auto 10px;
      max-width: 700px;
      border-left: 6px solid #d4a762;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      text-align: center;
      line-height: 1.6;
    }

    .thank-you strong {
      color: #8B4513;
    }

    .thank-you-admin {
      font-style: italic;
      color: #6c757d;
      font-size: 15px;
      margin-top: 6px;
    }

  </style>
</head>
<body>

  <h1>Katalog Produk</h1>

  <div class="thank-you">
    Terima kasih telah mempercayai <strong>Roti Sari</strong> sebagai pilihan roti Anda.<br>
    Semoga rotinya bisa dinikmati dan membawa kebahagiaan di setiap gigitannya! 🍞😊
    <div class="thank-you-admin">– Admin Roti Sari</div>
  </div>

  <div class="container">
    @php
      $produk = [
        ['Roti Manis', 'rotimanis2.jpg', 8000],
        ['Roti Tawar', 'rotitawar.jpg', 7000],
        ['Roti Coklat', 'roticoklat7.jpg', 9000],
        ['Roti Strawberry', 'rotistrawberry3.jpg', 9000],
        ['Roti Keju', 'rotikeju21.jpg', 10000],
        ['Roti Kornet', 'rotikornet2.jpg', 11000],
        ['Roti Susu', 'rotisusu6.jpg', 9000],
        ['Roti Cinnamon', 'roticinnamon14.jpg', 12000],
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

  <div class="back-btn">
    <button onclick="history.back()">
      <i class="bi bi-arrow-left-circle-fill" style="font-size: 16px;"></i> Kembali
    </button>
  </div>

  <footer class="footer">
    <div class="footer-container">
      <div class="footer-content">
        <div class="footer-kontak">
          <h4>Kontak Kami</h4>
          <p><i class="bi bi-envelope-fill text-warning me-2"></i> Email:
            <a href="mailto:admin@rotisari.com">admin@rotisari.com</a>
          </p>
          <p><i class="bi bi-whatsapp text-success me-2"></i> WhatsApp:
            <a href="https://wa.me/6283110469411" target="_blank">+62 831-1046-9411</a>
          </p>
          <p><i class="bi bi-geo-alt-fill text-danger me-2"></i> Alamat: Jl. Roti Manis No. 12, Bandung</p>
        </div>

        <div class="footer-maps">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d253597.80987383527!2d108.45481099999999!3d-6.7128715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1752295514028!5m2!1sid!2sid" 
            width="100%" 
            height="200" 
            style="border:0; border-radius: 8px;" 
            allowfullscreen 
            loading="lazy">
          </iframe>
        </div>
      </div>

      <div class="footer-bottom">
        <p>© 2025 Roti Sari. Semua hak dilindungi.</p>
      </div>
    </div>
  </footer>

</body>
</html>
    