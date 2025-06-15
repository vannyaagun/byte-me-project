<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vacsin - Isi Data Diri</title>
  <link rel="stylesheet" href="style-data.css">
</head>
<body>
  <div class="container data-page">

    <!-- Bagian Header & Langkah Daftar -->
    <header class="navigation">
      <div class="logo-container">
        <h1><span class="logo-v">V</span>acsin</h1>
      </div>
      <nav>
        <ul>
          <li><a href="/homepage">Home</a></li>
          <li><a href="#">Varian</a></li>
          <li><a href="/edukasi">Edukasi</a></li>
          <li><a href="#">Lokasi Vaksin</a></li>
          <li><a href="/kontak">Kontak</a></li>
        </ul>
      </nav>
      <div class="profile-icon">
        <div class="circle"></div>
      </div>
    </header>

    <section class="intro-section">
      <div class="intro-text">
        <h2>Langkah-Langkah Mendaftar Vaksin</h2>
        <p>Berikut adalah langkah-langkah untuk mendapatkan <br> vaksin. Jadwalkan vaksin anda segera.</p>
        <a href="#data-form" class="btn-submit">Lengkapi Data Diri</a>
      </div>
      <div class="intro-image">
        <img src="{{ asset('images/thumbs.png') }}" alt="Orang memberi jempol">
      </div>
    </section>

    <section class="steps-section">
      <div class="step">
        <img src="{{ asset('images/icon1.png') }}" alt="Registrasi">
        <h4>Registrasi</h4>
        <p>Langkah awal untuk atur vaksinasi</p>
      </div>
        <div class="line"></div>

      <div class="step">
        <img src="{{ asset('images/icon2.png') }}" alt="Data Diri">
        <h4>Lengkapi Data Diri</h4>
        <p>Untuk Memudahkan Proses Vaksin</p>
      </div>
        <div class="line"></div>

      <div class="step">
        <img src="{{ asset('images/icon3.png') }}" alt="Jadwal Vaksin">
        <h4>Jadwalkan Vaksin</h4>
        <p>Pilih jadwal vaksin sesuai keinginan anda</p>
      </div>
        <div class="line"></div>

      <div class="step">
        <img src="{{ asset('images/icon4.png') }}" alt="Persiapan Diri">
        <h4>Persiapkan Diri</h4>
        <p>Persiapkan diri sehat jasmani dan rohani</p>
      </div>
    </section>

    <!-- Formulir Data Diri -->
<main id="data-form" class="data-form">
  <h2>Isi Data Diri</h2>

  <!-- FORM MULAI DI SINI -->
  <form action="{{ route('data-diri.store') }}" method="POST">
    @csrf

    <section class="data-section">
      <h3>Status Vaksin</h3>
      <div class="form-grid">
        <!-- Vaksin dosis 1 -->
        <div class="form-question-group">
          <p>Apakah sudah menerima VAKSIN dosis 1?</p>
          <div class="radio-group">
            <label class="radio-label">
              <input type="radio" name="sudah_vaksin" value="ya">
              <span class="radio-custom"></span> Ya
            </label>
            <label class="radio-label">
              <input type="radio" name="sudah_vaksin" value="tidak">
              <span class="radio-custom"></span> Tidak
            </label>
          </div>
        </div>

        <!-- Jenis vaksin -->
        <div class="form-question-group">
          <p>Vaksin apa yang didapat?</p>
          <div class="select-container">
            <select name="jenis_vaksin">
              <option value="sinovac">SINOVAC</option>
              <option value="astrazeneca">AstraZeneca</option>
              <option value="pfizer">Pfizer</option>
              <option value="moderna">Moderna</option>
              <option value="sinopharm">Sinopharm</option>
            </select>
          </div>
        </div>

        <!-- Tanggal vaksin -->
        <div class="form-question-group">
          <p>Kapan Vaksin dosis pertama anda?</p>
          <div class="date-input">
            <input type="date" name="tanggal_vaksin" placeholder="dd/mm/yyyy">
            <span class="calendar-icon">📅</span>
          </div>
        </div>

        <!-- Gejala setelah vaksin -->
        <div class="form-question-group">
          <p>Apakah memiliki gejala serius setelah vaksin?</p>
          <input type="text" name="gejala_serius" class="full-width-input">
        </div>
      </div>
    </section>

    <section class="data-section">
      <h3>Status Kesehatan</h3>
      <div class="form-grid">

        <!-- Pernah COVID -->
        <div class="form-question-group">
          <p>Apakah anda pernah terkonfirmasi menderita COVID-19?</p>
          <div class="radio-group">
            <label class="radio-label">
              <input type="radio" name="pernah_covid" value="ya">
              <span class="radio-custom"></span> Ya
            </label>
            <label class="radio-label">
              <input type="radio" name="pernah_covid" value="tidak">
              <span class="radio-custom"></span> Tidak
            </label>
          </div>
        </div>

        <!-- Gejala ISPA -->
        <div class="form-question-group">
          <p>Apakah anda mengalami gejala ISPA dalam 7 hari terakhir?</p>
          <div class="radio-group">
            <label class="radio-label">
              <input type="radio" name="gejala_ispa" value="ya">
              <span class="radio-custom"></span> Ya
            </label>
            <label class="radio-label">
              <input type="radio" name="gejala_ispa" value="tidak">
              <span class="radio-custom"></span> Tidak
            </label>
          </div>
        </div>

        <!-- Hipertensi -->
        <div class="form-question-group">
          <p>Apakah anda memiliki penyakit hipertensi?</p>
          <div class="radio-group">
            <label class="radio-label">
              <input type="radio" name="hipertensi" value="ya">
              <span class="radio-custom"></span> Ya
            </label>
            <label class="radio-label">
              <input type="radio" name="hipertensi" value="tidak">
              <span class="radio-custom"></span> Tidak
            </label>
          </div>
        </div>

        <!-- Penyakit kronis -->
        <div class="form-question-group">
          <p>Apakah anda memiliki penyakit kronis lainnya?</p>
          <input type="text" name="penyakit_kronis" class="full-width-input">
        </div>
      </div>
    </section>

    <!-- Tombol Simpan -->
    <div class="save-button-container">
      <button type="submit" class="btn-submit">Simpan</button>
    </div>
  </form>
  <!-- FORM BERAKHIR DI SINI -->
</main>
    
<footer>
    <div class="footer-left">
        <h2><span class="logo-v">V</span>acsin <img src="images/id-flag.png" alt="Indonesian Flag" /></h2>
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
