<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin — SADARI</title>
  <script nonce="LeuPm7GYxmKvOEYp" type="text/javascript" src="//self.adblockultimate.net/manager.js?tm=1775217912&amp;lg=true" guid="{929526C9-9501-4FF1-8AB9-560BF24FCE0D}" inwhitelist="false" status="true" autohide="true"></script><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: "Inter", sans-serif;
      min-height: 100vh;
      display: flex;
      background: #f0f9fa;
      color: #333;
    }

    /* ── KIRI: Branding Panel ── */
    .left-panel {
      width: 48%;
      background: linear-gradient(150deg, #0b7a93 0%, #0b91ad 50%, #19b8d8 100%);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 50px 56px;
      position: relative;
      overflow: hidden;
    }

    .circle-big {
      position: absolute;
      width: 500px; height: 500px;
      border-radius: 50%;
      background: rgba(255,255,255,0.07);
      bottom: -160px; right: -160px;
    }
    .circle-small {
      position: absolute;
      width: 220px; height: 220px;
      border-radius: 50%;
      background: rgba(255,255,255,0.07);
      top: -70px; left: -70px;
    }
    .circle-mid {
      position: absolute;
      width: 150px; height: 150px;
      border-radius: 50%;
      background: rgba(255,255,255,0.05);
      top: 45%; left: 55%;
      transform: translate(-50%,-50%);
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 14px;
      position: relative;
      z-index: 1;
    }
    .brand-icon {
      width: 50px; height: 50px;
      background: rgba(255,255,255,0.2);
      border: 1.5px solid rgba(255,255,255,0.35);
      border-radius: 14px;
      display: flex; align-items: center; justify-content: center;
      font-size: 22px; font-weight: 800; color: #fff;
    }
    .brand-text strong {
      display: block;
      color: #fff;
      font-size: 20px;
      font-weight: 800;
    }
    .brand-text span {
      color: rgba(255,255,255,0.75);
      font-size: 12px;
    }

    .panel-center {
      position: relative;
      z-index: 1;
    }
    .panel-center h2 {
      font-size: 36px;
      font-weight: 800;
      color: #fff;
      line-height: 1.25;
      margin-bottom: 16px;
    }
    .panel-center p {
      color: rgba(255,255,255,0.8);
      font-size: 15px;
      line-height: 1.7;
      max-width: 340px;
    }

    .feature-list {
      list-style: none;
      position: relative;
      z-index: 1;
      display: flex;
      flex-direction: column;
      gap: 14px;
    }
    .feature-list li {
      display: flex;
      align-items: center;
      gap: 12px;
      color: rgba(255,255,255,0.9);
      font-size: 14px;
      font-weight: 500;
    }
    .feature-list li .dot {
      width: 34px; height: 34px;
      border-radius: 50%;
      background: rgba(255,255,255,0.15);
      display: flex; align-items: center; justify-content: center;
      font-size: 16px;
      flex-shrink: 0;
    }

    /* ── KANAN: Form ── */
    .right-panel {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 24px;
    }

    .login-box {
      width: 100%;
      max-width: 420px;
    }

    .top-label {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #e6f7f9;
      color: #0b91ad;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      padding: 6px 14px;
      border-radius: 20px;
      margin-bottom: 20px;
    }
    .top-label::before {
      content: '';
      width: 8px; height: 8px;
      border-radius: 50%;
      background: #0b91ad;
    }

    .login-box h1 {
      font-size: 30px;
      font-weight: 800;
      color: #10434e;
      margin-bottom: 8px;
    }
    .subtitle {
      color: #6b8f95;
      font-size: 14px;
      margin-bottom: 36px;
    }

    .alert-error {
      background: #fef2f2;
      border: 1.5px solid #fca5a5;
      color: #dc2626;
      border-radius: 10px;
      padding: 12px 16px;
      font-size: 13px;
      margin-bottom: 20px;
      display: none;
    }

    .form-group {
      margin-bottom: 22px;
    }
    .form-group label {
      display: block;
      font-size: 13px;
      font-weight: 600;
      color: #10434e;
      margin-bottom: 8px;
    }
    .input-wrap {
      position: relative;
    }
    .input-icon {
      position: absolute;
      left: 14px;
      top: 50%;
      transform: translateY(-50%);
      color: #aac5ca;
      font-size: 16px;
      pointer-events: none;
    }
    .form-group input {
      width: 100%;
      padding: 13px 14px 13px 42px;
      border: 1.8px solid #d0e8ec;
      border-radius: 12px;
      font-size: 14px;
      font-family: "Inter", sans-serif;
      color: #333;
      background: #fff;
      outline: none;
      transition: border-color 0.25s, box-shadow 0.25s;
    }
    .form-group input:focus {
      border-color: #0b91ad;
      box-shadow: 0 0 0 4px rgba(11,145,173,0.1);
    }
    .form-group input::placeholder { color: #b0c8cd; }

    .toggle-pw {
      position: absolute;
      right: 14px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      cursor: pointer;
      color: #aac5ca;
      font-size: 16px;
      padding: 0;
      transition: color 0.2s;
    }
    .toggle-pw:hover { color: #0b91ad; }

    .form-options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 28px;
    }
    .remember {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      color: #555;
      cursor: pointer;
    }
    .remember input[type="checkbox"] {
      accent-color: #0b91ad;
      width: 15px; height: 15px;
    }
    .forgot-link {
      font-size: 13px;
      color: #0b91ad;
      text-decoration: none;
      font-weight: 600;
    }
    .forgot-link:hover { text-decoration: underline; }

    .btn-login-submit {
      width: 100%;
      padding: 14px;
      background: #0b91ad;
      color: #fff;
      font-size: 15px;
      font-weight: 700;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      font-family: "Inter", sans-serif;
      transition: background 0.25s, transform 0.15s, box-shadow 0.25s;
      box-shadow: 0 6px 20px rgba(11,145,173,0.3);
      letter-spacing: 0.3px;
    }
    .btn-login-submit:hover {
      background: #0a7f99;
      transform: translateY(-2px);
      box-shadow: 0 10px 28px rgba(11,145,173,0.4);
    }
    .btn-login-submit:active { transform: translateY(0); }

    .divider {
      display: flex;
      align-items: center;
      gap: 12px;
      margin: 28px 0;
      color: #b0c8cd;
      font-size: 12px;
    }
    .divider::before, .divider::after {
      content: '';
      flex: 1;
      height: 1px;
      background: #d8eef1;
    }

    .back-home {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      text-decoration: none;
      color: #6b8f95;
      font-size: 13px;
      font-weight: 600;
      padding: 12px;
      border: 1.8px solid #d0e8ec;
      border-radius: 12px;
      transition: all 0.25s;
      background: #fff;
    }
    .back-home:hover {
      color: #0b91ad;
      border-color: #0b91ad;
      background: #f0f9fa;
    }

    .form-footer {
      text-align: center;
      margin-top: 28px;
      color: #9db5ba;
      font-size: 12px;
    }

    @media (max-width: 768px) {
      .left-panel { display: none; }
      .right-panel { padding: 40px 20px; }
    }
  </style>
</head>
<body>

  <!-- PANEL KIRI -->
  <div class="left-panel">
    <div class="circle-big"></div>
    <div class="circle-small"></div>
    <div class="circle-mid"></div>

    <div class="brand">
      <div class="brand-icon">S</div>
      <div class="brand-text">
        <strong>SADARI</strong>
        <span>PKK Desa Lohbener</span>
      </div>
    </div>

    <div class="panel-center">
      <h2>Panel Admin<br/>SADARI</h2>
      <p>Kelola konten website PKK Desa Lohbener dengan mudah — artikel, jadwal kegiatan, dan galeri foto dalam satu tempat.</p>
    </div>

    <ul class="feature-list">
      <li><span class="dot">📝</span> Kelola artikel &amp; konten</li>
      <li><span class="dot">📅</span> Atur jadwal kegiatan PKK</li>
      <li><span class="dot">🖼️</span> Upload &amp; kelola galeri foto</li>
    </ul>
  </div>

  <!-- PANEL KANAN -->
  <div class="right-panel">
    <div class="login-box">

      <div class="top-label">Admin Panel</div>
      <h1>Selamat Datang 👋</h1>
      <p class="subtitle">Masuk untuk mengelola konten website SADARI</p>

      <div class="alert-error" id="alertError">
        Username atau password salah. Silakan coba lagi.
      </div>

      <form method="POST" action="proses_login.php" onsubmit="return validateForm()">

        <div class="form-group">
          <label for="username">Username</label>
          <div class="input-wrap">
            <span class="input-icon">👤</span>
            <input
              type="text"
              id="username"
              name="username"
              placeholder="Masukkan username admin"
              required
              autocomplete="username"
            />
          </div>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-wrap">
            <span class="input-icon">🔒</span>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Masukkan password"
              required
              autocomplete="current-password"
            />
            <button type="button" class="toggle-pw" onclick="togglePassword()">👁️</button>
          </div>
        </div>

        <div class="form-options">
          <label class="remember">
            <input type="checkbox" name="remember" />
            Ingat saya
          </label>
          <a href="#" class="forgot-link">Lupa password?</a>
        </div>

        <button type="submit" class="btn-login-submit">Masuk ke Dashboard</button>

      </form>

      <div class="divider">atau</div>

      <a href="main.php" class="back-home">← Kembali ke Halaman Utama</a>

      <p class="form-footer">© 2026 SADARI PKK Desa Lohbener</p>
    </div>
  </div>

  <script>
    function togglePassword() {
      const pw = document.getElementById('password');
      pw.type = pw.type === 'password' ? 'text' : 'password';
    }

    function validateForm() {
      const username = document.getElementById('username').value.trim();
      const password = document.getElementById('password').value.trim();
      const alert = document.getElementById('alertError');
      if (!username || !password) {
        alert.style.display = 'block';
        alert.textContent = 'Username dan password tidak boleh kosong.';
        return false;
      }
      return true;
    }

    // Tampilkan error jika redirect dari PHP dengan ?error=1
    const params = new URLSearchParams(window.location.search);
    if (params.get('error') === '1') {
      document.getElementById('alertError').style.display = 'block';
    }
  </script>

</body>
</html>
