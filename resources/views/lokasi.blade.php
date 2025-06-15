<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacsin - Lokasi Vaksinasi COVID-19</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8fffe;
        }

        /* Footer */
        .footer {
            background: #2c3e50;
            color: white;
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-brand {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .footer-brand-logos {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .footer-logo {
            width: 120px;
            height: 40px;
            background: url("{{ asset('images/App Name.png') }}") no-repeat center;
            background-size: contain;
        }

        .footer-logo-flag {
            width: 40px;
            height: 30px;
            background: url("{{ asset('images/indo.png') }}") no-repeat center;
            background-size: contain;
        }

        .footer-brand p {
            color: #bbb;
            line-height: 1.6;
        }

        .footer-column h4 {
            margin-bottom: 20px;
            color: white;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: #4a9b8e;
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 20px;
            text-align: center;
            color: #bbb;
        }

        .profile-icon .circle {
        width: 32px;
        height: 32px;
        background: transparent;
        border: 2px solid #00e4be;
        border-radius: 50%;
        }

/*Body */
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 0px 0px;
        }

        .lokasiheader {
            background: linear-gradient(to right, #e6f0ff, #f2fff9);
            height: 500px;
            max-width:auto;
            padding-top: 50px;
        }

        .container h2 {
            font-size: 48px;
            font-weight: bold;
            color: #2c3e50;
            top: 20px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        p {
            color: #555;
            margin-bottom: 30px;
            margin-left: 40px;
        }

        .btn {
            background-color: #4a9b8e;
            color: white;
            border: none;
            padding: 12px 24px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 50px;
            margin-bottom: 100px;
        }

        .search-bar {
            display: flex;
            gap: 15px;
            margin: 30px 0;
            flex-wrap: wrap;
        }

        .search-bar input,
        .search-bar select,
        .search-bar button {
            padding: 10px;
            border: 1px solid #ccc;
            width: 200px;
            font-size: 17px;
        }

        .search-bar button {
            background-color: #4a9b8e;
            color: white;
            border: none;
            width: 130px;
            font-weight: bold;
        }

        .result-title {
            font-size: 25px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .result-row {
            display: flex;
            gap: 30px;
            align-items: flex-start;
}

        .location-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .location-card {
            display: flex;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 900px;
            overflow: hidden;
        }

        .location-card img {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }

        .location-info {
            padding: 15px;
            flex: 1;
        }

        .location-info h3 {
            margin: 0;
            font-size: 18px;
            color: #2c3e50;
        }

        .location-info p {
            font-size: 14px;
            margin: 8px 0;
            color: #444;
        }

.placeholder-kanan {
  flex: 1; /* Lebar lebih kecil */
}

.placeholder-box {
  height: 400px;
  background-color: #f0f0f0;
  border-radius: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-weight: bold;
  color: #666;
}

        .availability {
            color: green;
            font-weight: bold;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .location-card {
                flex-direction: column;
            }

            .highlight-box {
                display: none;
            }
        }
            </style>
</head>
<body>
    <!-- Header -->
  <header class="bg-[#F5F9FC]">
    <div
      class="max-w-7xl mx-auto px-6 sm:px-10 md:px-16 lg:px-20 flex items-center justify-between h-20">
      <a href="#" class="flex items-center gap-1 font-bold text-2xl">
        <span class="text-[#3B9AE1]">V</span> 
        <span class="text-gray-900">acsin</span>
      </a>
      <nav class="hidden md:flex items-center gap-8 font-semibold text-sm">
        <a href="/homepage" class="text-black">Home</a>
        <a href="/varian" class="text-black">Varian</a>
        <a href="/edukasi" class="text-black">Edukasi</a>
        <a href="#" class="text-[#5B8B87]">Lokasi Vaksin</a>
        <a href="/kontak" class="text-black">Kontak</a>
      <div class="profile-icon">
        <div class="circle"></div>
      </div>
      </nav>
    </div>
  </header>

<div class="lokasiheader">
<div class="container">
    <h2>Lokasi Vaksin</h2>
    <p>Berikut sejumlah lokasi vaksin Covid-19 di Indonesia yang dapat Anda kunjungi:</p>
    <button class="btn">Cari Lokasi Vaksin</button>
</div>
</div>

<div class="container">
    <div class="search-bar">
        <input type="text" placeholder="Cari Lokasi Vaksin Anda">
        <select>
            <option>--Jenis Vaksin--</option>
            <option>Sinovac</option>
            <option>AstraZeneca</option>
            <option>Moderna</option>
        </select>
        <input type="date">
        <button>Filter</button>
    </div>

    <div class="result-title">Ditemukan 5 Lokasi Di Dekat Anda</div>

    <div class="result-row">
    <div class="location-list">
        <!-- Location Card Start -->
        <div class="location-card">
            <img src="{{ asset('images/hermina.png') }}" alt="RS Hermina">
            <div class="location-info">
                <h3>Rumah Sakit Hermina</h3>
                <p>Jl. Tangkuban Perahu No.33-35, Kauman, Kec. Klojen, Kota Malang</p>
                <p>500 vaksin/hari</p>
                <p class="availability">Tersedia</p>
            </div>
        </div>
        <!-- Copy this block 4x more -->
        <div class="location-card">
            <img src="{{ asset('images/hermina.png') }}" alt="RS Hermina">
            <div class="location-info">
                <h3>Rumah Sakit Hermina</h3>
                <p>Jl. Tangkuban Perahu No.33-35, Kauman, Kec. Klojen, Kota Malang</p>
                <p>500 vaksin/hari</p>
                <p class="availability">Tersedia</p>
            </div>
        </div>

        <div class="location-card">
            <img src="{{ asset('images/hermina.png') }}" alt="RS Hermina">
            <div class="location-info">
                <h3>Rumah Sakit Hermina</h3>
                <p>Jl. Tangkuban Perahu No.33-35, Kauman, Kec. Klojen, Kota Malang</p>
                <p>500 vaksin/hari</p>
                <p class="availability">Tersedia</p>
            </div>
        </div>

        <div class="location-card">
            <img src="{{ asset('images/hermina.png') }}" alt="RS Hermina">
            <div class="location-info">
                <h3>Rumah Sakit Hermina</h3>
                <p>Jl. Tangkuban Perahu No.33-35, Kauman, Kec. Klojen, Kota Malang</p>
                <p>500 vaksin/hari</p>
                <p class="availability">Tersedia</p>
            </div>
        </div>

        <div class="location-card">
            <img src="{{ asset('images/hermina.png') }}" alt="RS Hermina">
            <div class="location-info">
                <h3>Rumah Sakit Hermina</h3>
                <p>Jl. Tangkuban Perahu No.33-35, Kauman, Kec. Klojen, Kota Malang</p>
                <p>500 vaksin/hari</p>
                <p class="availability">Tersedia</p>
            </div>
        </div>
    </div>
      <div class="placeholder-kanan">
    <div class="placeholder-box">
    </div>
  </div>
</div>

      <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="footer-brand-logos">
                        <div class="footer-logo"></div>
                        <div class="footer-logo-flag"></div>
                    </div>
                    <p>Vacsin adalah platform edukasi vaksinasi</p>
                </div>
                <div class="footer-column">
                    <h4>Perusahaan</h4>
                    <ul>
                        <li><a href="#">Tentang</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="#">Edukasi</a></li>
                        <li><a href="#">Varian</a></li>
                        <li><a href="#">Vaksin</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Kebijakan</h4>
                    <ul>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Vacsin. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>
