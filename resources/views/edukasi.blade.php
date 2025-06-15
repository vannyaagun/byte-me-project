<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacsin - Platform Edukasi Vaksinasi</title>
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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #ffffff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo {
            height: 40px;
            width: auto;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #00C4FF;
        }

        .nav-links a.active {
            color: #00b894;
            font-weight: 600;
        }

        .register-btn {
            background: transparent;
            color: #00b894;
            padding: 0.5rem 1.5rem;
            border: 2px solid #00b894;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }

        .register-btn:hover {
            background: #00b894;
            color: white;
        }

        /* Main Content */
        main {
            padding: 2rem 0;
        }

        /* Hero Grid */
        .hero-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .hero-main {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .hero-main:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }

        .hero-main img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .hero-main .content {
            padding: 1.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .hero-side {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .side-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .side-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }

        .side-card img {
            width: 100%;
            height: 120px;
            object-fit: cover;
        }

        .side-card .content {
            padding: 1rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .hero-right {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .hero-right:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }

        .hero-right img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .hero-right .content {
            padding: 1.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
            flex-grow: 1;
        }

        .card-description {
            color: #666;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .card-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
            margin-top: auto;
        }

        .tag {
            background: #e8f8ff;
            color: #00C4FF;
            padding: 0.2rem 0.8rem;
            border-radius: 15px;
            font-weight: 500;
        }

        .date {
            color: #999;
        }

        /* Popular Section */
        .popular-section {
            margin: 3rem 0;
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 2rem;
            text-align: left;
            color: #333;
        }

        .section-title .highlight {
            color: #00C4FF;
        }

        .popular-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .popular-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: row;
            height: 140px;
        }

        .popular-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }

        .popular-card img {
            width: 100px;
            height: 100%;
            object-fit: cover;
            flex-shrink: 0;
        }

        .popular-content {
            padding: 1rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background: white;
        }

        .popular-title {
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .popular-desc {
            font-size: 0.8rem;
            color: #666;
            margin-bottom: 0.5rem;
            line-height: 1.4;
        }

        /* Footer */
        footer {
            background: #1E463C;
            color: white;
            padding: 3rem 0 1rem;
            margin-top: 3rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: white;
            font-weight: 600;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #00C4FF;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .footer-logo .logo {
            height: 30px;
        }

        .footer-logo .flag {
            width: 20px;
            height: auto;
        }

        .profile-icon .circle {
  width: 32px;
  height: 32px;
  background: transparent;
  border: 2px solid #00e4be;
  border-radius: 50%;
}


        /* Responsive */
        @media (max-width: 992px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .hero-side {
                grid-template-columns: 1fr 1fr;
                display: grid;
            }
            
            .popular-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero-side {
                grid-template-columns: 1fr;
                display: flex;
            }
            
            .popular-grid {
                grid-template-columns: 1fr;
            }
            
            .popular-card {
                height: auto;
                flex-direction: column;
            }
            
            .popular-card img {
                width: 100%;
                height: 120px;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .footer-content {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
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
        <a href="/edukasi" class="text-[#5B8B87]">Edukasi</a>
        <a href="/lokasi" class="text-black">Lokasi Vaksin</a>
        <a href="/kontak" class="text-black">Kontak</a>
      <div class="profile-icon">
        <div class="circle"></div>
      </div>
      </nav>
    </div>
  </header>

    <main class="container">
        <section class="hero-grid">
            <div class="hero-main">
                <img src="{{ asset('images/img1.png') }}" alt="COVID-19 Vaccines">
                <div class="content">
                    <h2 class="card-title">Perlukah Kita Mendapatkan Dosis Ketiga Vaksin COVID-19?</h2>
                    <p class="card-description">Pemberian Vaksin akan ditunda jika Anda sedang demam (suhu tubuh > 37.5 C) atau memiliki tekanan darah diatas 140/90 mmHg</p>
                    <div class="card-meta">
                        <span class="tag">#Vaksin Booster</span>
                        <span class="date">5 April 2025</span>
                    </div>
                </div>
            </div>

            <div class="hero-side">
                <div class="side-card">
                    <div class="content">
                        <h3 class="card-title">Simak Jenis Dan Ketentuan Vaksin Booster</h3>
                        <p class="card-description">Pemberian Vaksin akan ditunda jika Anda sedang demam (suhu tubuh > 37.5 C)</p>
                        <div class="card-meta">
                            <span class="tag">#Vaksin Booster</span>
                            <span class="date">5 April 2025</span>
                        </div>
                    </div>
                </div>

                <div class="side-card">
                    <div class="content">
                        <h3 class="card-title">Seberapa Pentingkah Vaksin COVID-19</h3>
                        <p class="card-description">Pemberian Vaksin akan ditunda jika Anda sedang demam (suhu tubuh > 37.5 C) atau memiliki tekanan darah diatas 140/90 mmHg</p>
                        <div class="card-meta">
                            <span class="tag">#Edukasi</span>
                            <span class="date">5 April 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-right">
                <img src="{{ asset('images/img2.png') }}" alt="Vaccine Side Effects">
                <div class="content">
                    <h2 class="card-title">Efek Samping Vaksin COVID-19</h2>
                    <p class="card-description">Pemberian Vaksin akan ditunda jika Anda sedang demam (suhu tubuh > 37.5 C)</p>
                    <div class="card-meta">
                        <span class="tag">#Edukasi</span>
                        <span class="date">5 April 2025</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="popular-section">
            <h2 class="section-title">Edukasi <span class="highlight">#Popular</span> Lainnya</h2>
            <div class="popular-grid">
                <div class="popular-card">
                    <img src="{{ asset('images/img4.png') }}" alt="Vaccine Side Effects">
                    <div class="popular-content">
                        <h3 class="popular-title">Efek Samping Vaksin COVID-19</h3>
                        <p class="popular-desc">Pemberian Vaksin akan ditunda jika Anda sedang demam (suhu tubuh > 37.5 C)</p>
                        <div class="card-meta">
                            <span class="tag">#Edukasi</span>
                            <span class="date">5 April 2025</span>
                        </div>
                    </div>
                </div>

                <div class="popular-card">
                    <img src="{{ asset('images/img4.png') }}" alt="Vaccine Side Effects">
                    <div class="popular-content">
                        <h3 class="popular-title">Efek Samping Vaksin COVID-19</h3>
                        <p class="popular-desc">Pemberian Vaksin akan ditunda jika Anda sedang demam (suhu tubuh > 37.5 C)</p>
                        <div class="card-meta">
                            <span class="tag">#Edukasi</span>
                            <span class="date">5 April 2025</span>
                        </div>
                    </div>
                </div>

                <div class="popular-card">
                    <img src="{{ asset('images/img4.png') }}" alt="Vaccine Side Effects">
                    <div class="popular-content">
                        <h3 class="popular-title">Efek Samping Vaksin COVID-19</h3>
                        <p class="popular-desc">Pemberian Vaksin akan ditunda jika Anda sedang demam (suhu tubuh > 37.5 C)</p>
                        <div class="card-meta">
                            <span class="tag">#Edukasi</span>
                            <span class="date">5 April 2025</span>
                        </div>
                    </div>
                </div>

                <div class="popular-card">
                    <img src="{{ asset('images/img4.png') }}" alt="Vaccine Side Effects">
                    <div class="popular-content">
                        <h3 class="popular-title">Efek Samping Vaksin COVID-19</h3>
                        <p class="popular-desc">Pemberian Vaksin akan ditunda jika Anda sedang demam (suhu tubuh > 37.5 C)</p>
                        <div class="card-meta">
                            <span class="tag">#Edukasi</span>
                            <span class="date">5 April 2025</span>
                        </div>
                    </div>
                </div>

                <div class="popular-card">
                    <img src="{{ asset('images/img4.png') }}" alt="Vaccine Side Effects">
                    <div class="popular-content">
                        <h3 class="popular-title">Efek Samping Vaksin COVID-19</h3>
                        <p class="popular-desc">Pemberian Vaksin akan ditunda jika Anda sedang demam (suhu tubuh > 37.5 C)</p>
                        <div class="card-meta">
                            <span class="tag">#Edukasi</span>
                            <span class="date">5 April 2025</span>
                        </div>
                    </div>
                </div>

                <div class="popular-card">
                    <img src="{{ asset('images/img4.png') }}" alt="Vaccine Side Effects">
                    <div class="popular-content">
                        <h3 class="popular-title">Efek Samping Vaksin COVID-19</h3>
                        <p class="popular-desc">Pemberian Vaksin akan ditunda jika Anda sedang demam (suhu tubuh > 37.5 C)</p>
                        <div class="card-meta">
                            <span class="tag">#Edukasi</span>
                            <span class="date">5 April 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Register button functionality
            document.querySelector('.register-btn').addEventListener('click', function() {
                alert('Fitur registrasi akan segera tersedia!');
            });

            // Add loading animation to cards
            const cards = document.querySelectorAll('.hero-main, .side-card, .hero-right, .popular-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            });

            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>