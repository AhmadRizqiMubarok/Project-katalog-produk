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

    .navbar-title {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 20px;
  background: linear-gradient(145deg, #8B4513, #d2691e, #a0522d);
  padding: 30px 20px;
  border-bottom: 5px solid #f9d8a4;
  box-shadow: inset 0 -4px 8px rgba(0, 0, 0, 0.2), 0 4px 10px rgba(0, 0, 0, 0.3);
}

.navbar-title h1 {
  margin: 0;
  color: #fff8f0;
  font-size: 42px;
  font-weight: 700;
  font-family: 'Segoe UI', sans-serif;
  letter-spacing: 2px;
  text-transform: uppercase;
  text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
}

.logo-img {
  height: 60px;
  width: auto;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}

.header-bar {
  position: relative;
  background: linear-gradient(145deg, #8B4513, #d2691e, #a0522d);
  padding: 40px 20px;
  border-bottom: 5px solid #f9d8a4;
  box-shadow: inset 0 -4px 8px rgba(0, 0, 0, 0.2), 0 4px 10px rgba(0, 0, 0, 0.3);
  text-align: center;
}

.header-bar h1 {
  margin: 0;
  color: #fff8f0;
  font-size: 42px;
  font-weight: 700;
  font-family: 'Segoe UI', sans-serif;
  letter-spacing: 2px;
  text-transform: uppercase;
  text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
  display: inline-block;
}

.logo-fixed {
  position: absolute;
  left: 20px;
  top: 50%;
  transform: translateY(-50%);
  height: 60px;
  width: auto;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
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
      height: 150px;
      object-fit: cover;
      margin-bottom: 24px;
    }

    .card h3 {
      margin-top: 12px;
      margin-bottom: 8px;
      font-size: 16px;
      min-height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card p {
      margin-top: 6px;
      margin-bottom: 6px;
      font-size: 14px;
      min-height: 20px;
    }

    .stok {
      margin-top: 6px;
      margin-bottom: 12px;
      color: red;
      font-weight: bold;
      min-height: 20px;
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
  font-size: 14px;
  text-align: center;
  text-decoration: none;
  cursor: pointer; /* aktifkan klik */
  pointer-events: auto; /* aktifkan klik */
  transition: all 0.3s ease;
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
  background-color: unset;
  color: unset;
  opacity: 1;
  filter: none;
  transform: none;
  box-shadow: none;
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
      padding: 10px 24px;
      background-color: transparent;
      color: #8B4513;
      border: 2px solid #8B4513;
      border-radius: 50px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s ease;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .back-btn button:hover {
      background-color: #8B4513;
      color: #fff;
      transform: translateY(-2px);
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
      position: relative;
    }

    .thank-you strong {
      color: #8B4513;
    }

    .thank-you-admin {
      font-style: italic;
      color: #6c757d;
      font-size: 15px;
      margin-top: 6px;
      display: none;
    }

    #typing-text::after {
      content: '|';
      display: inline-block;
      margin-left: 2px;
      animation: blink 0.8s infinite;
    }

    @keyframes blink {
      0%, 100% { opacity: 1; }
      50% { opacity: 0; }
    }
  </style>
</head>
<body>
  
  <div class="header-bar">
    <img src="{{ asset('images/logo.png') }}" alt="Logo Roti Sari" class="logo-fixed">
    <h1>Katalog Produk</h1>
  </div>
  
  
  
  
  <!-- Efek Ketik -->
  <div class="thank-you">
    <div id="typing-text"></div>
    <div class="thank-you-admin" id="typing-author">– Admin Roti Sari</div>
  </div>

  <div class="container">
    @php
      $produk = [
        ['Roti Manis', 'rotimanis3.jpg', 8000],
        ['Roti Tawar', 'rotitawar.jpg', 7000],
        ['Roti Coklat', 'roticoklat9.jpg', 9000],
        ['Roti Strawberry', 'rotistrawberry3.jpg', 9000],
        ['Roti Keju', 'rotikeju22.jpg', 10000],
        ['Roti Kornet', 'rotikornet3.jpg', 11000],
        ['Roti Susu', 'rotisusu7.jpg', 9000],
        ['Roti Cinnamon', 'roticinnamon15.jpg', 12000],
        ['Roti Cream', 'roticream3.jpg', 10000],
        ['Roti Pisang', 'rotipisang2.jpg', 9500],
        ['Roti Moka', 'rotimoka.jpg', 9000],
        ['Roti Kismis', 'rotikismis.jpg', 9500],
        ['Roti Bakar', 'rotibakar3.jpg', 8000],
        ['Roti Coklat Keju', 'roticoklatkeju.jpg', 11000],
        ['Roti Pandan', 'rotipandan1.jpg', 9000],
        ['Roti Sosis', 'rotisosis3.png', 11000],
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
      <i class="bi bi-arrow-left"></i> Kembali ke Halaman Sebelumnya
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

  <!-- Efek Ketik Script -->
  <script>
    const teks = `Terima kasih telah mempercayai Roti Sari sebagai pilihan roti Anda. Semoga rotinya bisa dinikmati dan membawa kebahagiaan di setiap gigitannya! 🍞😊`;
    const typingTarget = document.getElementById("typing-text");
    const author = document.getElementById("typing-author");
  
    let i = 0;
    let isDeleting = false;
  
    function ketikUlang() {
      if (!isDeleting) {
        typingTarget.innerHTML = teks.substring(0, i + 1);
        i++;
  
        if (i === teks.length) {
          author.style.display = "block";
          setTimeout(() => {
            isDeleting = true;
            setTimeout(ketikUlang, 100);
          }, 3000); // Tunggu 3 detik sebelum mulai menghapus
          return;
        }
      } else {
        typingTarget.innerHTML = teks.substring(0, i - 1);
        i--;
  
        if (i === 0) {
          isDeleting = false;
          author.style.display = "none";
        }
      }
  
      setTimeout(ketikUlang, isDeleting ? 25 : 50); // lebih cepat saat menghapus
    }
  
    window.onload = ketikUlang;
  </script>
  

</body>
</html>
