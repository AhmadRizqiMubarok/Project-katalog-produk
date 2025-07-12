<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Produk</title>
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
            gap: 20px;
        }

        .card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 220px;
            text-align: center;
            padding: 16px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 12px;
        }

        .card h3 {
            margin: 10px 0 4px;
        }

        .card p {
            margin: 4px 0;
        }

        .stok {
            color: red;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .btn {
            display: block;
            padding: 8px 12px;
            margin: 6px auto;
            border: none;
            border-radius: 4px;
            width: 90%;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-wa {
            background-color: #6c8b3c;
            color: white;
        }

        .btn-email {
            background-color: #2d66c7;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <h1>Katalog Produk</h1>

    <div class="container">
        <!-- Roti #1 -->
        <div class="card">
            <img src="images/roti-manis.jpg" alt="Roti Manis">
            <h3>Roti Manis</h3>
            <p>Rp8.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #2 -->
        <div class="card">
            <img src="images/roti-tawar.jpg" alt="Roti Tawar">
            <h3>Roti Tawar</h3>
            <p>Rp7.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #3 -->
        <div class="card">
            <img src="images/roti-coklat.jpg" alt="Roti Coklat">
            <h3>Roti Coklat</h3>
            <p>Rp9.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #4 -->
        <div class="card">
            <img src="images/roti-strawberry.jpg" alt="Roti Strawberry">
            <h3>Roti Strawberry</h3>
            <p>Rp9.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #5 -->
        <div class="card">
            <img src="images/roti-keju.jpg" alt="Roti Keju">
            <h3>Roti Keju</h3>
            <p>Rp10.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #6 -->
        <div class="card">
            <img src="images/roti-kornet.jpg" alt="Roti Kornet">
            <h3>Roti Kornet</h3>
            <p>Rp11.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #7 -->
        <div class="card">
            <img src="images/roti-susu.jpg" alt="Roti Susu">
            <h3>Roti Susu</h3>
            <p>Rp9.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #8 -->
        <div class="card">
            <img src="images/roti-cinnamon.jpg" alt="Roti Cinnamon">
            <h3>Roti Cinnamon</h3>
            <p>Rp12.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #9 -->
        <div class="card">
            <img src="images/roti-cream.jpg" alt="Roti Cream">
            <h3>Roti Cream</h3>
            <p>Rp10.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #10 -->
        <div class="card">
            <img src="images/roti-pisang.jpg" alt="Roti Pisang">
            <h3>Roti Pisang</h3>
            <p>Rp9.500</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #11 -->
        <div class="card">
            <img src="images/roti-moka.jpg" alt="Roti Moka">
            <h3>Roti Moka</h3>
            <p>Rp9.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #12 -->
        <div class="card">
            <img src="images/roti-kismis.jpg" alt="Roti Kismis">
            <h3>Roti Kismis</h3>
            <p>Rp9.500</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #13 -->
        <div class="card">
            <img src="images/roti-bakar.jpg" alt="Roti Bakar">
            <h3>Roti Bakar</h3>
            <p>Rp8.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #14 -->
        <div class="card">
            <img src="images/roti-coklat-keju.jpg" alt="Roti Coklat Keju">
            <h3>Roti Coklat Keju</h3>
            <p>Rp11.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #15 -->
        <div class="card">
            <img src="images/roti-pandan.jpg" alt="Roti Pandan">
            <h3>Roti Pandan</h3>
            <p>Rp9.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>

        <!-- Roti #16 -->
        <div class="card">
            <img src="images/roti-sosis.jpg" alt="Roti Sosis">
            <h3>Roti Sosis</h3>
            <p>Rp11.000</p>
            <p class="stok">Stok: 10</p>
            <a class="btn btn-wa" href="#">Pesan via WhatsApp</a>
            <a class="btn btn-email" href="#">Pesan via Email</a>
        </div>
    </div>
</body>
</html>
