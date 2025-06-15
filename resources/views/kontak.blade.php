<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kontak Vacsin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: "Inter", sans-serif;
    }

    .profile-icon .circle {
  width: 32px;
  height: 32px;
  background: transparent;
  border: 2px solid #00e4be;
  border-radius: 50%;
}

  </style>
</head>
<body class="bg-white text-gray-900">
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
        <a href="#" class="text-black">Lokasi Vaksin</a>
        <a href="/kontak" class="text-[#5B8B87]">Kontak</a>
      <div class="profile-icon">
        <div class="circle"></div>
      </div>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-[#F5F9FC] py-14 text-center px-6 sm:px-10 md:px-16 lg:px-20">
    <h1 class="font-extrabold text-2xl text-gray-800 mb-2">Kontak</h1>
    <p class="text-gray-500 max-w-md mx-auto leading-relaxed text-sm">
      Jika anda mengalami kendala ataupun <br />
      masukan silahkan lengkapi form dibawah.<br />
      Terima Kasih
    </p>
  </section>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-6 sm:px-10 md:px-16 lg:px-20 py-16 flex flex-col md:flex-row gap-12">
    <!-- Left Contact Info -->
    <section class="flex-1 max-w-md">
      <h2 class="font-extrabold text-xl mb-6">Hubungi kami</h2>
      <div class="mb-6">
        <h3 class="font-semibold text-sm mb-1">Telepon</h3>
        <p class="text-xs text-gray-600">+62 812 3456 7898</p>
      </div>
      <div class="mb-6">
        <h3 class="font-semibold text-sm mb-1">Email</h3>
        <p class="text-xs text-gray-600">info@vacsin.id</p>
      </div>
      <div class="mb-6">
        <h3 class="font-semibold text-sm mb-1">Kantor Bali</h3>
        <p class="text-xs text-gray-600">
          Jl. Tuked pakerisan, Denpasar Selatan, kota Denpasar, Bali
        </p>
      </div>
      <div>
        <h3 class="font-semibold text-sm mb-1">Kantor Jakarta</h3>
        <p class="text-xs text-gray-600">
          Jl. Letjen S. Parman, kec. Grogol Petamburan, kota Jakarta Barat
        </p>
      </div>
    </section>

    <!-- Right Contact Form -->
    <section
      class="flex-1 bg-white p-8 shadow-lg max-w-lg rounded-sm"
      aria-label="Formulir kontak"
    >
      <form>
        <div class="flex gap-6 mb-4">
          <div class="flex-1 flex flex-col">
            <label
              for="nama-depan"
              class="text-xs text-gray-700 mb-1"
              >Nama Depan</label
            >
            <input
              id="nama-depan"
              name="nama-depan"
              type="text"
              placeholder="Nama Depan"
              class="border border-gray-300 text-xs px-3 py-2 rounded-sm focus:outline-none focus:ring-2 focus:ring-[#5B8B87]"
            />
          </div>
          <div class="flex-1 flex flex-col">
            <label
              for="nama-belakang"
              class="text-xs text-gray-700 mb-1"
              >Nama Belakang</label
            >
            <input
              id="nama-belakang"
              name="nama-belakang"
              type="text"
              placeholder="Nama Belakang"
              class="border border-gray-300 text-xs px-3 py-2 rounded-sm focus:outline-none focus:ring-2 focus:ring-[#5B8B87]"
            />
          </div>
        </div>

        <div class="flex flex-col mb-4">
          <label for="email" class="text-xs text-gray-700 mb-1">Email</label>
          <input
            id="email"
            name="email"
            type="email"
            placeholder="cth: exmple@gmail.id"
            class="border border-gray-300 text-xs px-3 py-2 rounded-sm focus:outline-none focus:ring-2 focus:ring-[#5B8B87]"
          />
        </div>

        <div class="flex flex-col mb-4 relative">
          <label
            for="nomor-handphone"
            class="text-xs text-gray-700 mb-1"
            >Nomor Handphone</label
          >
          <div class="flex items-center border border-gray-300 rounded-sm focus-within:ring-2 focus-within:ring-[#5B8B87]">
            <span class="pl-2 pr-1 flex items-center">
              <img
                src="https://flagcdn.com/w20/id.png"
                alt="Bendera Indonesia"
                width="20"
                height="15"
                class="inline-block"
              />
              <span class="text-xs text-gray-500 ml-1">+62</span>
            </span>
            <input
              id="nomor-handphone"
              name="nomor-handphone"
              type="tel"
              class="flex-1 text-xs px-3 py-2 rounded-r-sm focus:outline-none"
              placeholder=""
            />
          </div>
        </div>

        <div class="flex flex-col mb-6">
          <label for="pesan" class="text-xs text-gray-700 mb-1">Pesan</label>
          <textarea
            id="pesan"
            name="pesan"
            rows="4"
            placeholder="Tulis Pesan Anda"
            class="border border-gray-300 text-xs px-3 py-2 rounded-sm resize-none focus:outline-none focus:ring-2 focus:ring-[#5B8B87]"
          ></textarea>
        </div>

        <button
          type="submit"
          class="w-full bg-gradient-to-b from-[#5B8B87] to-[#3B6B5E] text-white text-sm font-semibold py-2 rounded-sm hover:opacity-90 transition"
        >
          Kirim
        </button>
      </form>
    </section>
  </main>

  <!-- Footer -->
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