<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vacsin - Jadwal Vaksin</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome (versi 5.15.3) -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />

  <!-- Google Fonts: Inter -->
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    rel="stylesheet"
  />

  <!-- File CSS Lokal -->
  <link rel="stylesheet" href="{{ asset('detail.css') }}">
</head>
<body>

    <!-- Header -->
  <header class="bg-[#F5F9FC]">
    <div
      class="max-w-7xl mx-auto px-6 sm:px-10 md:px-16 lg:px-20 flex items-center justify-between h-20"
    >
      <a href="#" class="flex items-center gap-1 font-bold text-2xl">
        <span class="text-[#3B9AE1]">V</span
        ><span class="text-gray-900">acsin</span>
      </a>
      <nav class="hidden md:flex items-center gap-8 font-semibold text-sm">
        <a href="/homepage" class="text-black">Home</a>
        <a href="#" class="text-black">Varian</a>
        <a href="/edukasi" class="text-black">Edukasi</a>
        <a href="/lokasi" class="text-black">Lokasi Vaksin</a>
        <a href="/kontak" class="text-black">Kontak</a>
      <div class="profile-icon">
        <div class="circle"></div>
      </div>
      </nav>
    </div>
  </header>


    <a href="/JadwalVaksin" class="back-btn"> &#8592; </a>
    <h2 class="title">Jadwal Vaksin Yang Akan Datang</h2>

    <div class="container">
    <div class="card-detail">
      <span class="badge">Vaksin Dosis Pertama</span>

      <div class="info-pair"><strong>Kode Booking :</strong> <span>32o3noda</span></div>
      <div class="info-pair"><strong>Nama :</strong> <span>Raihan Haidar</span></div>

      <div class="qr-box">
        <p>Tunjukkan QR Code ini ketika anda masuk<br> pada lokasi vaksin</p>
        <div class="qr-placeholder"></div>
      </div>

      <div class="info-pair"><strong>Tanggal & Waktu :</strong> <span>Senin, 17 April 2025 08:00</span></div>
      <div class="info-pair"><strong>Lokasi :</strong>
        <div class="lokasi-box">
          <strong>Rumah Sakit Hermina</strong><br>
          <span>Jl. Tangkuban Perahu No.31–33, Klojen, Kota Malang</span><br>
          <button class="btn-alamat">Detail Alamat</button>
        </div>
      </div>

      <div class="info-pair"><strong>Jenis Vaksin :</strong> <span>Vaksin Pfizer</span></div>
    </div>
  </div>

  <footer class="bg-[#102524] text-white py-12 px-6 sm:px-10 md:px-16 lg:px-20">
    <div
      class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-5 gap-10 md:gap-20"
    >
      <div class="col-span-1 space-y-2">
        <div class="flex items-center gap-1 font-bold text-2xl">
          <span class="text-[#3B9AE1]">V</span
          ><span>acsin</span>
          <img
            src="https://flagcdn.com/w20/id.png"
            alt="Bendera Indonesia"
            width="20"
            height="15"
            class="inline-block"
          />
        </div>
        <p class="text-xs max-w-[180px]">
          Vacsin adalah platform edukasi vaksinasi
        </p>
      </div>

      <div class="col-span-1 space-y-3">
        <h3 class="font-semibold text-sm">Perusahaan</h3>
        <ul class="space-y-2 text-xs">
          <li><a href="#" class="hover:underline">Tentang</a></li>
          <li><a href="#" class="hover:underline">Kontak</a></li>
        </ul>
      </div>

      <div class="col-span-1 space-y-3">
        <h3 class="font-semibold text-sm">Layanan</h3>
        <ul class="space-y-2 text-xs">
          <li><a href="#" class="hover:underline">Edukasi</a></li>
          <li><a href="#" class="hover:underline">Varian</a></li>
          <li><a href="#" class="hover:underline">Vaksin</a></li>
        </ul>
      </div>

      <div class="col-span-2 space-y-3">
        <h3 class="font-semibold text-sm">Kebijakan</h3>
        <ul class="space-y-2 text-xs">
          <li><a href="#" class="hover:underline">Syarat &amp; Ketentuan</a></li>
          <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
          <li><a href="#" class="hover:underline">FAQ</a></li>
        </ul>
      </div>
    </div>
  </footer>

  </body>
</html>