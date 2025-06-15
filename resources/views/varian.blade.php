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
         /* Main Container */
        .main-container {
            max-width: 1400px;
            margin: 100px auto 0;
            padding: 2rem;
            min-height: calc(100vh - 100px);
        }

        /* Hero Section - Grid Layout */
        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 2fr 1fr;
            gap: 2rem;
            height: 600px;
            margin-bottom: 3rem;
            position: relative;
        }

        /* Rectangle 31 Background Gradients */
        .hero-grid::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 60%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 107, 107, 0.2) 0%, rgba(255, 184, 77, 0.2) 100%);
            border-radius: 20px;
            z-index: -1;
        }

        /* Left Side - Main Content */
        .hero-content {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
            grid-row: span 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .company-name {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .hero-title {
            font-size: 5rem;
            font-weight: 900;
            margin-bottom: 2rem;
            color: #000;
            letter-spacing: -2px;
        }

        .hero-title .vac {
            color: #e74c3c;
        }

        .hero-description {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 3rem;
            line-height: 1.7;
        }

        .efficacy-section {
            margin-top: auto;
        }

        .efficacy-label {
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .efficacy-number {
            font-size: 4rem;
            font-weight: 900;
            color: #000;
        }

        /* Right Side - Images with Rectangle 17 backgrounds */
        .hero-image-top {
            background: rgba(231, 76, 60, 0.1);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .hero-image-top::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 107, 107, 0.3) 0%, rgba(255, 184, 77, 0.3) 100%);
            border-radius: 15px;
        }

        .hero-image-top::after {
            content: '';
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            background: url("{{ asset('images/Sinovac3 1.png') }}") center/cover;
            opacity: 0.9;
            border-radius: 10px;
        }

        .hero-image-bottom {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .hero-image-bottom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 107, 107, 0.3) 0%, rgba(255, 184, 77, 0.3) 100%);
            border-radius: 15px;
        }

        .hero-image-bottom::after {
            content: '';
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            background: url("{{ asset('images/Sinovac2 1.png') }}") center/cover;
            opacity: 0.9;
            border-radius: 10px;
        }

        /* Important Info Section */
        .important-info {
            margin-bottom: 4rem;
            position: relative;
        }

        .important-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(168, 230, 207, 0.3) 0%, rgba(220, 237, 200, 0.3) 100%);
            border-radius: 20px;
            z-index: -1;
        }

        .info-header {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
            align-items: start;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #000;
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.7;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .info-card h3 {
            font-size: 1.4rem;
            color: #e74c3c;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .info-card p {
            color: #555;
            line-height: 1.7;
        }

        /* Kandungan Section */
        .kandungan-section {
            margin-bottom: 4rem;
            position: relative;
        }

        .kandungan-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(168, 230, 207, 0.2) 0%, rgba(220, 237, 200, 0.2) 100%);
            border-radius: 20px;
            z-index: -1;
        }

        .kandungan-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
            position: relative;
        }

        .kandungan-header {
            margin-bottom: 3rem;
        }

        .kandungan-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #000;
        }

        .kandungan-subtitle {
            font-size: 1.1rem;
            color: #00cc66;
            font-weight: 600;
        }

        .kandungan-content {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 3rem;
            align-items: start;
        }

        .kandungan-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .kandungan-item {
            background: rgba(248, 249, 250, 0.8);
            padding: 2rem;
            border-radius: 15px;
            border-left: 4px solid #00cc66;
            transition: transform 0.3s;
        }

        .kandungan-item:hover {
            transform: translateX(5px);
        }

        .kandungan-number {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #00cc66;
        }

        .kandungan-item h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #000;
            font-weight: 700;
        }

        .kandungan-item p {
            color: #555;
            line-height: 1.6;
        }

        .kandungan-image {
            width: 300px;
            height: 300px;
            background: rgba(0, 204, 102, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .kandungan-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("{{ asset('image (3).png') }}") center/cover;
            opacity: 0.9;
        }

        /* Efek Samping Section */
        .efek-samping {
            margin-bottom: 4rem;
        }

        .efek-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
        }

        .efek-title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1rem;
            color: #000;
        }

        .efek-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 3rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-size: 1.1rem;
        }

        .efek-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }

        .efek-item {
            background: rgba(0, 204, 102, 0.1);
            padding: 2rem 1.5rem;
            border-radius: 12px;
            text-align: center;
            transition: all 0.3s;
            border: 2px solid #00cc66;
        }

        .efek-item:hover {
            background: rgba(0, 204, 102, 0.2);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 204, 102, 0.3);
        }

        .efek-item h4 {
            color: #00cc66;
            font-size: 1.1rem;
            font-weight: 600;
        }
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

        /*footer*/
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
        <a href="#" class="text-[#5B8B87]">Varian</a>
        <a href="/edukasi" class="text-black">Edukasi</a>
        <a href="/lokasi" class="text-black">Lokasi Vaksin</a>
        <a href="/kontak" class="text-black">Kontak</a>
      <div class="profile-icon">
        <div class="circle"></div>
      </div>
      </nav>
    </div>
  </header>

    <!-- Main Container -->
    <div class="main-container">
        <!-- Hero Section -->
        <section class="hero-grid" id="home">
            <div class="hero-content">
                <div class="company-name">Sinovac Biotech Ltd</div>
                <h1 class="hero-title">SINO<span class="vac">VAC</span></h1>
                <p class="hero-description">
                    Vaksin Sinovac adalah vaksin untuk mencegah infeksi virus SARS-CoV-2 atau COVID-19. Vaksin Sinovac yang 
                    dikenal juga dengan nama Coronavac sudah mendapat izin penggunaan darurat dari Badan Pengawas Obat dan 
                    Makanan (BPOM RI).
                </p>
                <div class="efficacy-section">
                    <div class="efficacy-label">Efikasi</div>
                    <div class="efficacy-number">91.55%</div>
                </div>
            </div>
            <div class="hero-image-top"></div>
            <div class="hero-image-bottom"></div>
        </section>

        <!-- Important Info Section -->
        <section class="important-info">
            <div class="info-header">
                <div>
                    <h2 class="section-title">Hal Yang Diperhatikan Sebelum Vaksin Sinovac</h2>
                </div>
                <div>
                    <p class="section-subtitle">Vaksin Sinovac adalah vaksin untuk mencegah infeksi virus SARS-CoV-2 atau COVID-19. Vaksin Sinovac yang dikenal juga dengan nama CoronaVac</p>
                </div>
            </div>
            <div class="info-grid">
                <div class="info-card">
                    <h3>Umur 18-59</h3>
                    <p>Vaksin Sinovac dapat diberikan pada orang berusia 18-59 tahun yang sedang dalam kondisi sehat.</p>
                </div>
                <div class="info-card">
                    <h3>Suhu Tubuh</h3>
                    <p>Vaksin Sinovac tidak boleh diberikan pada penderita HIV yang memiliki nilai CD4 dibawah 200 atau yang nilai CD4 nya tidak diketahui.</p>
                </div>
                <div class="info-card">
                    <h3>HIV ?</h3>
                    <p>Vaksin Sinovac dapat diberikan pada orang berusia 18-59 tahun yang sedang dalam kondisi sehat.</p>
                </div>
                <div class="info-card">
                    <h3>Alergi</h3>
                    <p>Vaksin Sinovac tidak boleh diberikan kepada orang yang alergi terhadap kandungan di dalam vaksin ini.</p>
                </div>
                <div class="info-card">
                    <h3>Penyakit Paru</h3>
                    <p>Pemberian Vaksin pada penderita penyakit paru-paru, seperti asma, PPOK, atau TBC, akan ditunda sampai kondisinya terkontrol</p>
                </div>
                <div class="info-card">
                    <h3>Ibu Hamil</h3>
                    <p>Untuk Ibu hamil pemberiannya dapat dimulai pada usia kehamilan di atas 12 minggu</p>
                </div>
            </div>
        </section>

        <!-- Kandungan Section -->
        <section class="kandungan-section">
            <div class="kandungan-container">
                <div class="kandungan-header">
                    <h2 class="kandungan-title">Kandungan Vaksin Sinovac</h2>
                    <p class="kandungan-subtitle">4 Kandungan Vaksin Sinovac</p>
                </div>
                <div class="kandungan-content">
                    <div class="kandungan-grid">
                        <div class="kandungan-item">
                            <div class="kandungan-number">1</div>
                            <h3>Virus Yang Telah Dimatikan</h3>
                            <p>Artinya virus yang ada dalam vaksin sudah dimatikan dan tidak mengandung virus hidup atau yang dilemahkan</p>
                        </div>
                        <div class="kandungan-item">
                            <div class="kandungan-number">2</div>
                            <h3>Larutan Garam atau Natrium Chlorida</h3>
                            <p>Sebagai isotonis guna memberikan kenyamanan dalam penyuntikan Natrium klorida yang digunakan dalam vaksin sesuai dengan standar</p>
                        </div>
                        <div class="kandungan-item">
                            <div class="kandungan-number">3</div>
                            <h3>Aluminium Hidroksida</h3>
                            <p>Berfungsi meningkatkan kemampuan vaksin.</p>
                        </div>
                        <div class="kandungan-item">
                            <div class="kandungan-number">4</div>
                            <h3>Larutan Fosfat</h3>
                            <p>Berfungsi sebagai stabilizer</p>
                        </div>
                    </div>
                    <div class="kandungan-image"></div>
                </div>
            </div>
        </section>

        <!-- Efek Samping Section -->
        <section class="efek-samping">
            <div class="efek-container">
                <h2 class="efek-title">Efek Samping</h2>
                <p class="efek-subtitle">Ketahuilah beberapa efek samping yang bisa terjadi setelah menerima vaksin Sinovac</p>
                <div class="efek-grid">
                    <div class="efek-item">
                        <h4>Demam</h4>
                    </div>
                    <div class="efek-item">
                        <h4>Menggigil</h4>
                    </div>
                    <div class="efek-item">
                        <h4>Mual atau Muntah</h4>
                    </div>
                    <div class="efek-item">
                        <h4>Nyeri Otot</h4>
                    </div>
                    <div class="efek-item">
                        <h4>Terasa Lelah</h4>
                    </div>
                    <div class="efek-item">
                        <h4>Sakit Kepala</h4>
                    </div>
                    <div class="efek-item">
                        <h4>Nyeri Sendi</h4>
                    </div>
                    <div class="efek-item">
                        <h4>Kemerahan Bekas Suntik</h4>
                    </div>
                </div>
            </div>
        </section>
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
    

      <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header background change on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 50) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.info-card, .kandungan-item, .efek-item').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            observer.observe(el);
        });

        // Active navigation highlighting
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-menu a');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Parallax effect for hero section
window.addEventListener('scroll', function () {
    const scrolled = window.scrollY;
    const hero = document.querySelector('.lokasiheader');

    // Ubah posisi latar belakang berdasarkan scroll
    hero.style.backgroundPositionY = -(scrolled * 0.3) + 'px';
});
