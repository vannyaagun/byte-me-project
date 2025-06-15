<!-- resources/views/register.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vacsin - Platform Edukasi Vaksin Indonesia</title>
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
  <div class="container">
    <div class="left-section">
      <div class="logo-container">
        <h1><span class="logo-v">V</span>acsin</h1>
      </div>
      <div class="tagline">
<h2>
  Platform Edukasi Vaksin <br>
  <span class="with-flag">
    Indonesia <img src="{{ asset('images/id-flag.png') }}" alt="ID Flag" class="flag-icon">
  </span>
</h2>
        <p>Ayo bantu Indonesia menuju endemi!</p>
      </div>
      <div class="gambar-dokter">
        <img src="{{ asset('images/doctor.png') }}" alt="Dokter" class="mt-6 max-w-sm">
      </div>
    </div>

    <div class="right-section">
      <div class="form-container">
        <h2>Registrasi</h2>
        <form action="{{ route('register.submit') }}" method="POST">
          @csrf
          <div class="form-row">
            <div class="form-group">
              <label for="first-name">Nama Depan</label>
              <input type="text" id="first-name" name="first-name" placeholder="Nama Depan">
            </div>
            <div class="form-group">
              <label for="last-name">Nama Belakang</label>
              <input type="text" id="last-name" name="last-name" placeholder="Nama Belakang">
            </div>
          </div>

          <div class="form-group">
            <label for="identity_number">Nomor Identitas</label>
            <input type="text" id="identity_number" name="identity_number" placeholder="17926389237****">
          </div>

          <div class="form-group">
            <label for="phone">Nomor Handphone</label>
            <div class="phone-input">
              <div class="country-code">
                <span class="flag">🇮🇩</span>
                <span>+62</span>
              </div>
              <input type="tel" id="phone" name="phone" placeholder="81234567890">
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="cth: example@gmail.id">
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="password">Kata Sandi</label>
              <input type="password" id="password" name="password" placeholder="Minimal 8 Karakter">
            </div>
            <div class="form-group">
              <label for="password_confirmation">Konfirmasi Kata Sandi</label>
              <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Minimal 8 Karakter">
            </div>
          </div>

          <button type="submit" class="btn-submit">Daftar</button>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
        </form>

        <div class="login-link">
          <p>Sudah Memiliki Akun? <a href="#">Masuk</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
