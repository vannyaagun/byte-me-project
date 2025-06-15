<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacsin - Program Vaksinasi COVID-19</title>
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

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /*Hero Container */
        .hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
    position: relative;
    z-index: 2;
}


.hero-images {
    position: relative;
    height: 400px;
    width: 100%;
}

/* Gambar pertama di kiri atas */
.hero-img-1 {
    position: absolute;
    top: 10px;
    left: 0;
    width: 350px;
    height: 250px;
    background: url("{{ asset('images/image.png') }}") no-repeat center;
    background-size: cover;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    z-index: 1;
    transition: transform 0.3s ease;
}

/* Gambar kedua di kanan bawah, overlap */
.hero-img-2 {
    position: absolute;
    top: 90px;
    left: 300px; /* posisi lebih kanan untuk tumpuk */
    width: 370px;
    height: 250px;
    background: url("{{ asset('images/image (1).png') }}") no-repeat center;
    background-size: cover;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    z-index: 2;
    transition: transform 0.3s ease;
}

 .hero-text h1 {
            font-size: 48px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-text p {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .cta-btn {
            background: #4a9b8e;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-btn:hover {
            background: #3a8b7e;
        }


        /* Statistics */
        .stats {
            padding: 60px 0;
            background: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 36px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .stat-item p {
            color: #666;
            font-size: 14px;
        }

        /* Partners */
        .partners {
            padding: 60px 0;
            background: white;
        }

        .partners-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 30px;
            align-items: center;
        }

        .partner-logo {
            height: 60px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }

        .partner-logo.germas {
            background-image: url("{{ asset('images/daffd469germas-removebg-preview 1 (1).png') }}");
        }

        .partner-logo.kemenkes {
            background-image: url("{{ asset('images/Logo_of_the_Ministry_of_Health_of_the_Republic_of_Indonesia 1 (1).png') }}");
        }

        .partner-logo.pmi {
            background-image: url("{{ asset('images/sejarah-pmi-mengenal-sejarah-palang-merah-di-indonesia_169-removebg-preview 1 (1).png') }}");
        }

        .partner-logo.who {
            background-image: url("{{ asset('images/world-health-organization-who-misi-dan-peran-dalam-menjaga-kesehatan-dunia-750x320-removebg-preview 1 (1).png') }}");
        }

        .partner-logo.kpc {
            background-image: url("{{ asset('images/images__1_-removebg-preview 1 (2).png') }}");
        }

        /* FAQ Section */
        .faq {
            padding: 80px 0;
            background: white;
        }

        .faq-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .faq-image {
            width: 100%;
            height: 500px;
            background: url("{{ asset('images/image 2.png') }}") no-repeat center;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            border-radius: 15px;
        }

        .faq-text h2 {
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .faq-text p {
            color: #666;
            margin-bottom: 30px;
        }

        .faq-list {
            list-style: none;
        }

        .faq-item {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .faq-question {
            padding: 20px;
            background: #f9f9f9;
            cursor: pointer;
            font-weight: 500;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-question:hover {
            background: #f0f0f0;
        }

        /* Rules Section */
        .rules {
            padding: 80px 0;
            background: url("{{ asset('images/Rectangle 18.png') }}") no-repeat center center;
            background-size: cover;
            position: relative;
        }

        .rules::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(232, 244, 253, 0.9) 0%, rgba(240, 249, 255, 0.9) 100%);
        }

        .rules h2 {
            text-align: center;
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 60px;
            position: relative;
            z-index: 2;
        }

        .rules-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 30px;
            position: relative;
            z-index: 2;
        }

        .rule-item {
            background: white;
            padding: 30px 20px;
            border-radius: 15px;
            text-align: left;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .rule-item:nth-child(1) {
            grid-column: 1;
            grid-row: 1;
        }

        .rule-item:nth-child(2) {
            grid-column: 2;
            grid-row: 1;
        }

        .rule-item:nth-child(3) {
            grid-column: 1;
            grid-row: 2;
        }

        .rule-item:nth-child(4) {
            grid-column: 2;
            grid-row: 2;
        }

        .rule-item h3 {
            font-size: 18px;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .rule-item p {
            color: #666;
            font-size: 14px;
        }

        /* Vaccine Variants */
        .variants {
            padding: 80px 0;
            background: white;
        }

        .variants h2 {
            text-align: center;
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .variants p {
            text-align: center;
            color: #666;
            margin-bottom: 50px;
        }

        .variants-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .variant-card {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .variant-logo {
            height: 80px;
            margin-bottom: 20px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }

        .variant-logo.astrazeneca {
            background-image: url("{{ asset('images/AstraZen-removebg-preview 1.png') }}");
        }

        .variant-logo.sinovac {
            background-image: url("{{ asset('images/Sinovac1 1.png') }}");
        }

        .variant-logo.moderna {
            background-image: url("{{ asset('images/Moderna-Logo-removebg-preview 1.png') }}");
        }

        .variant-card p {
            color: #666;
            margin-bottom: 20px;
            text-align: left;
        }

        .variant-btn {
            background: #4a9b8e;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        /* Testimonials */
        .testimonials {
            padding: 80px 0;
            background: url("{{ asset('images/Rectangle 19.png') }}") no-repeat center center;
            background-size: cover;
            position: relative;
        }

        .testimonials::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(248, 255, 254, 0.9) 0%, rgba(232, 245, 243, 0.9) 100%);
        }

        .testimonials h2 {
            text-align: center;
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 50px;
            position: relative;
            z-index: 2;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            position: relative;
            z-index: 2;
        }

        .testimonial-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .testimonial-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 20px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .testimonial-avatar.steve {
            background-image: url("{{ asset('images/dumyfoto2 1.png') }}");
        }

        .testimonial-avatar.clara {
            background-image: url("{{ asset('images/dumyfoto 3.png') }}");
        }

        .testimonial-card h4 {
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .testimonial-card .position {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .testimonial-card p {
            color: #666;
            font-style: italic;
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

        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 36px;
            }

        .hero-images {
            position: relative;
            width: 400px;
            height: 260px;
            margin: 0 auto;
        }

        .hero-img {
            position: absolute;
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .partners-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .faq-content {
                grid-template-columns: 1fr;
            }

            .rules-grid {
                grid-template-columns: 1fr;
            }

            .variants-grid {
                grid-template-columns: 1fr;
            }

            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
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
        <a href="/homepage" class="text-[#5B8B87]">Home</a>
        <a href="/varian" class="text-black">Varian</a>
        <a href="/edukasi" class="text-black">Edukasi</a>
        <a href="/lokasi" class="text-black">Lokasi Vaksin</a>
        <a href="/kontak" class="text-black">Kontak</a>
      <div class="profile-icon">
        <div class="circle"></div>
      </div>
      </nav>
    </div>
  </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Ayo Ikuti Program Pemerintah Vaksin COVID-19.</h1>
                    <p>Vaksin penting untuk menjaga kesehatan diri dan keluarga. Pemerintah menjamin vaksin yang digunakan sesuai dengan standar keamanan dan melewati uji klinik yang ketat.</p>
                    <a href="#" class="cta-btn">Vaksin Sekarang</a>
                </div>
                <div class="hero-images">
                    <div class="hero-img-1"></div>
                    <div class="hero-img-2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>91.55%</h3>
                    <p>Vaksinasi Dosis 1</p>
                </div>
                <div class="stat-item">
                    <h3>69.03%</h3>
                    <p>Vaksinasi Dosis 2</p>
                </div>
                <div class="stat-item">
                    <h3>4.71%</h3>
                    <p>Vaksinasi Dosis 3</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="partners">
        <div class="container">
            <div class="partners-grid">
                <div class="partner-logo germas"></div>
                <div class="partner-logo kemenkes"></div>
                <div class="partner-logo pmi"></div>
                <div class="partner-logo who"></div>
                <div class="partner-logo kpc"></div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="container">
            <div class="faq-content">
                <div class="faq-image"></div>
                <div class="faq-text">
                    <h2>Mengapa saya harus vaksin?</h2>
                    <p>Dengan melakukan vaksin, anda berpartisipasi dalam upaya membangun kekebalan komunal dan melindungi orang lain dari Covid-19. Berikut alasannya:</p>
                    <ul class="faq-list">
                        <li class="faq-item">
                            <div class="faq-question">
                                01. Merangsang Sistem Kekebalan Tubuh
                                <span>+</span>
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question">
                                02. Mengurangi Risiko Penularan
                                <span>+</span>
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question">
                                03. Mengurangi Dampak Berat Dari Virus
                                <span>+</span>
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question">
                                04. Mencapai Herd Immunity
                                <span>+</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Rules Section -->
    <section class="rules">
        <div class="container">
            <h2>Beberapa aturan yang harus dipatuhi pasien.</h2>
            <div class="rules-grid">
                <div class="rule-item">
                    <h3>01. Tekanan Darah Harus Normal</h3>
                    <p>Pastikan saat datang memeriksakan tekanan darah dalam batas 180/110, atau meminta nasihat kepada petugas tenaga medis yang bertugas sebelum disuntik vaksin.</p>
                </div>
                <div class="rule-item">
                    <h3>02. Hindari Alkohol</h3>
                    <p>Tidak dianjurkan konsumsi minuman keras karena dapat menurunkan sistem imun dan memperlambat proses penyembuhan dan mengganggu metabolisme tubuh yang dapat mengganggu efektivitas vaksin.</p>
                </div>
                <div class="rule-item">
                    <h3>03. Tidur yang cukup</h3>
                    <p>Sebaiknya tidur setidaknya delapan jam setiap malam untuk memelihara kekebalan tubuh, sehingga tubuh dapat melawan penyakit dan infeksi dengan optimal.</p>
                </div>
                <div class="rule-item">
                    <h3>04. Informasikan kondisi kesehatan dini</h3>
                    <p>Beri tahu dokter atau petugas vaksinasi Covid-19 mengenai kondisi kesehatan Anda saat hendak divaksin. Terutama bagi penderita konsumsi obat-obatan tertentu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vaccine Variants -->
    <section class="variants" id="varian">
        <div class="container">
            <h2>Varian Vaksin</h2>
            <p>Sebelum divaksin, ada baiknya ketahui<br>sendiri vaksin dan keuntungan<br>menggunakannya.</p>
            <div class="variants-grid">
                <div class="variant-card">
                    <div class="variant-logo astrazeneca"></div>
                    <p>Vaksin AstraZeneca menggunakan virus hidup yang tidak aktif (inactive virus). Jenis pemberian vaksin.</p>
                    <a href="#" class="variant-btn">Baca Selengkapnya</a>
                </div>
                <div class="variant-card">
                    <div class="variant-logo sinovac"></div>
                    <p>Vaksin Sinovac menggunakan virus hidup yang tidak aktif (inactive virus). Jenis pemberian vaksin.</p>
                    <a href="#" class="variant-btn">Baca Selengkapnya</a>
                </div>
                <div class="variant-card">
                    <div class="variant-logo moderna"></div>
                    <p>Vaksin Moderna menggunakan virus hidup yang tidak aktif (inactive virus). Jenis pemberian vaksin.</p>
                    <a href="#" class="variant-btn">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2>Testimoni</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-avatar steve"></div>
                    <h4>Steve John</h4>
                    <p class="position">Pegawai Swasta</p>
                    <p>"Sebelum divaksin sebaiknya ketahui sendiri vaksin dan keuntungan menggunakannya"</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-avatar clara"></div>
                    <h4>Clara Ren</h4>
                    <p class="position">Pegawai Swasta</p>
                    <p>"Sebelum divaksin sebaiknya ketahui sendiri vaksin dan keuntungan menggunakannya"</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-avatar steve"></div>
                    <h4>Steve John</h4>
                    <p class="position">Pegawai Swasta</p>
                    <p>"Sebelum divaksin sebaiknya ketahui sendiri vaksin dan keuntungan menggunakannya"</p>
                </div>
            </div>
        </div>
    </section>

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

    <script>
        // Simple FAQ toggle functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const icon = question.querySelector('span');
                icon.textContent = icon.textContent === '+' ? '-' : '+';
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>