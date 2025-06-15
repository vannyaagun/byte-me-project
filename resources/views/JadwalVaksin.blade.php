<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vacsin - Daftar Jadwal dan Tempat</title>
  <link rel="stylesheet" href="{{ asset('jadwal.css') }}">
</head>
<body>
  <div class="container data-page">

    <!-- Header -->
    <header class="navigation">
      <div class="logo-container">
        <h1><span class="logo-v">V</span>acsin</h1>
      </div>
      <nav>
        <ul>
          <li><a href="/homepage">Home</a></li>
          <li><a href="#">Varian</a></li>
          <li><a href="/edukasi">Edukasi</a></li>
          <li><a href="/lokasi">Lokasi Vaksin</a></li>
          <li><a href="/kontak">Kontak</a></li>
        </ul>
      </nav>
      <div class="profile-icon">
        <div class="circle"></div>
      </div>
    </header>

    <!-- Jadwal Vaksin Header -->
    <div class="jadwal-header">
      <h2>Jadwal Vaksin Yang Akan Datang</h2>
          <a href="/detail" class="btn-submit">Registrasi Jadwal Vaksin</a>
    </div>

    <!-- Card List -->
    <div class="card-container">
      @foreach (['Pertama', 'Kedua', 'Ketiga'] as $dosis)
      <div class="card">
        <span class="badge">Vaksin Dosis {{ $dosis }}</span>
        <div class="desc">Senin, 17 April 2025 08:00</div>
        <div class="desc">Rumah Sakit Hermina</div>
        <div class="alamat">Jl. Tangkuban Perahu No.31–33, Kauman, <br> Kec. Klojen, Kota Malang</div>
        <div class="btn-detail-alamat">Detail Alamat</div>
        <button class="btn-detail">Detail Jadwal</button>
      </div>
      @endforeach
    </div>

    <!-- Footer -->
    <footer>
      <div class="footer-left">
        <h2><span class="logo-v">V</span>acsin <img src="{{ asset('images/id-flag.png') }}" alt="Indonesian Flag" /></h2>
        <p>Vacsın adalah platform edukasi vaksinasi</p>
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
    </footer>

  </div>
</body>
</html>
