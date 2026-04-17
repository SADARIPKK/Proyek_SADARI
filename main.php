<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SADARI — PKK Desa Lohbener</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --teal-900: #063a45;
      --teal-800: #0a5468;
      --teal-700: #0d6e89;
      --teal-600: #1188a8;
      --teal-500: #14a3c7;
      --teal-400: #35bdd8;
      --teal-300: #6cd3e6;
      --teal-100: #d4f2f8;
      --teal-50:  #eef9fc;
      --white:    #ffffff;
      --gray-50:  #f7fafa;
      --gray-100: #eef3f4;
      --gray-400: #7a9ea5;
      --gray-600: #3d6470;
      --gray-900: #061e24;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--gray-900);
      background: var(--white);
      line-height: 1.6;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 28px;
    }

    /* ══════════════════════════════
       NAVBAR
    ══════════════════════════════ */
    .navbar {
      position: sticky;
      top: 0;
      z-index: 999;
      background: rgba(255,255,255,0.96);
      backdrop-filter: blur(14px);
      border-bottom: 1px solid rgba(17,136,168,0.1);
      box-shadow: 0 2px 20px rgba(6,58,69,0.06);
      padding: 0;
    }

    .navbar-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 68px;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
    }
    .brand-box {
      width: 42px; height: 42px;
      background: linear-gradient(135deg, var(--teal-800), var(--teal-500));
      border-radius: 11px;
      display: flex; align-items: center; justify-content: center;
      font-size: 20px; font-weight: 800; color: var(--white);
      box-shadow: 0 4px 12px rgba(13,110,137,0.35);
      flex-shrink: 0;
    }
    .brand-text strong {
      display: block;
      font-size: 16px;
      font-weight: 800;
      color: var(--teal-900);
      line-height: 1.1;
    }
    .brand-text span {
      font-size: 11px;
      color: var(--gray-400);
      font-weight: 500;
    }

    .nav-menu {
      display: flex;
      align-items: center;
      list-style: none;
      gap: 2px;
    }
    .nav-menu a {
      text-decoration: none;
      color: var(--gray-600);
      font-weight: 600;
      font-size: 14px;
      padding: 8px 15px;
      border-radius: 9px;
      transition: all 0.2s;
    }
    .nav-menu a:hover,
    .nav-menu a.active {
      color: var(--teal-700);
      background: var(--teal-50);
    }
    .nav-menu .btn-login {
      background: linear-gradient(135deg, var(--teal-800), var(--teal-600));
      color: var(--white) !important;
      padding: 9px 22px;
      border-radius: 10px;
      font-weight: 700;
      box-shadow: 0 4px 14px rgba(13,110,137,0.3);
      margin-left: 8px;
      transition: all 0.25s !important;
    }
    .nav-menu .btn-login:hover {
      background: linear-gradient(135deg, var(--teal-900), var(--teal-700)) !important;
      transform: translateY(-1px);
      box-shadow: 0 6px 20px rgba(13,110,137,0.4) !important;
    }

    /* ══════════════════════════════
       HERO
    ══════════════════════════════ */
    .hero {
      background: linear-gradient(135deg, var(--teal-900) 0%, var(--teal-700) 55%, var(--teal-500) 100%);
      padding: 90px 0 80px;
      position: relative;
      overflow: hidden;
    }
    .hero::before {
      content: '';
      position: absolute;
      width: 600px; height: 600px;
      border-radius: 50%;
      background: rgba(255,255,255,0.04);
      top: -200px; right: -150px;
      pointer-events: none;
    }
    .hero::after {
      content: '';
      position: absolute;
      width: 350px; height: 350px;
      border-radius: 50%;
      background: rgba(255,255,255,0.04);
      bottom: -120px; left: -80px;
      pointer-events: none;
    }

    .hero-wrapper {
      display: flex;
      align-items: center;
      gap: 64px;
      position: relative;
      z-index: 1;
    }

    .hero-content { flex: 1; }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255,255,255,0.12);
      border: 1px solid rgba(255,255,255,0.2);
      color: rgba(255,255,255,0.9);
      font-size: 12px;
      font-weight: 600;
      padding: 6px 14px;
      border-radius: 20px;
      margin-bottom: 22px;
      backdrop-filter: blur(6px);
    }
    .hero-badge::before {
      content: '';
      width: 7px; height: 7px;
      border-radius: 50%;
      background: var(--teal-300);
    }

    .hero-content h1 {
      font-size: 50px;
      font-weight: 800;
      color: var(--white);
      line-height: 1.15;
      margin-bottom: 20px;
      letter-spacing: -0.5px;
    }

    .hero-content p {
      font-size: 17px;
      color: rgba(255,255,255,0.82);
      line-height: 1.8;
      margin-bottom: 38px;
      max-width: 420px;
    }

    .hero-btns {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
    }
    .btn-white {
      background: var(--white);
      color: var(--teal-800);
      padding: 13px 28px;
      border-radius: 11px;
      text-decoration: none;
      font-weight: 700;
      font-size: 14px;
      transition: all 0.25s;
      box-shadow: 0 4px 18px rgba(0,0,0,0.15);
    }
    .btn-white:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 28px rgba(0,0,0,0.2);
    }
    .btn-ghost {
      background: rgba(255,255,255,0.1);
      border: 1.5px solid rgba(255,255,255,0.5);
      color: var(--white);
      padding: 13px 28px;
      border-radius: 11px;
      text-decoration: none;
      font-weight: 700;
      font-size: 14px;
      transition: all 0.25s;
      backdrop-filter: blur(4px);
    }
    .btn-ghost:hover {
      background: rgba(255,255,255,0.18);
      border-color: var(--white);
      transform: translateY(-2px);
    }

    .hero-image {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .hero-image img {
      max-width: 280px;
      max-height: 280px;
      object-fit: contain;
      filter: drop-shadow(0 16px 40px rgba(0,0,0,0.25));
    }

    /* ══════════════════════════════
       STATS BAR
    ══════════════════════════════ */
    .stats-bar {
      background: var(--white);
      border-bottom: 1px solid var(--gray-100);
      padding: 28px 0;
      box-shadow: 0 4px 20px rgba(6,58,69,0.05);
    }
    .stats-inner {
      display: flex;
      justify-content: center;
      gap: 60px;
    }
    .stat-item {
      text-align: center;
    }
    .stat-item strong {
      display: block;
      font-size: 28px;
      font-weight: 800;
      color: var(--teal-800);
      line-height: 1;
      margin-bottom: 4px;
    }
    .stat-item span {
      font-size: 13px;
      color: var(--gray-400);
      font-weight: 500;
    }

    /* ══════════════════════════════
       VISI MISI
    ══════════════════════════════ */
    .visimisi-section {
      padding: 100px 0;
      background: var(--gray-50);
    }
    .visimisi-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 72px;
      align-items: start;
    }
    .section-label {
      display: inline-block;
      background: var(--teal-100);
      color: var(--teal-800);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      padding: 5px 14px;
      border-radius: 20px;
      margin-bottom: 16px;
    }
    .visi h2 {
      font-size: 32px;
      font-weight: 800;
      color: var(--teal-900);
      line-height: 1.3;
      margin-bottom: 16px;
    }
    .visi p {
      color: var(--gray-600);
      font-size: 15px;
      line-height: 1.85;
    }
    .misi-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-top: 8px;
    }
    .misi-list li {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      padding: 16px 20px;
      background: var(--white);
      border: 1px solid var(--teal-100);
      border-radius: 14px;
      box-shadow: 0 2px 8px rgba(6,58,69,0.05);
      transition: all 0.25s;
      font-size: 14px;
      color: var(--gray-600);
      font-weight: 500;
      line-height: 1.6;
    }
    .misi-list li:hover {
      border-color: var(--teal-400);
      transform: translateX(6px);
      box-shadow: 0 6px 20px rgba(13,110,137,0.1);
      background: var(--teal-50);
    }
    .misi-num {
      background: linear-gradient(135deg, var(--teal-800), var(--teal-600));
      color: var(--white);
      font-weight: 700;
      font-size: 12px;
      padding: 4px 9px;
      border-radius: 7px;
      flex-shrink: 0;
      margin-top: 2px;
    }

    /* ══════════════════════════════
       JADWAL
    ══════════════════════════════ */
    .jadwal-section {
      padding: 80px 0;
      background: var(--white);
    }
    .section-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      margin-bottom: 36px;
    }
    .section-title {
      font-size: 28px;
      font-weight: 800;
      color: var(--teal-900);
      margin-bottom: 4px;
    }
    .section-sub {
      font-size: 14px;
      color: var(--gray-400);
      font-weight: 500;
    }
    .link-all {
      color: var(--teal-700);
      text-decoration: none;
      font-weight: 700;
      font-size: 14px;
      transition: 0.2s;
    }
    .link-all:hover { color: var(--teal-900); }

    .jadwal-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }
    .jadwal-card {
      background: var(--teal-50);
      border: 1px solid var(--teal-100);
      border-radius: 18px;
      padding: 24px;
      display: flex;
      gap: 18px;
      transition: all 0.28s;
    }
    .jadwal-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 14px 36px rgba(13,110,137,0.12);
      background: var(--white);
      border-color: var(--teal-300);
    }
    .jadwal-icon {
      width: 46px; height: 46px;
      background: linear-gradient(135deg, var(--teal-800), var(--teal-500));
      border-radius: 12px;
      display: flex; align-items: center; justify-content: center;
      font-size: 20px;
      flex-shrink: 0;
      box-shadow: 0 4px 12px rgba(13,110,137,0.28);
    }
    .jadwal-body h3 {
      font-size: 16px;
      font-weight: 700;
      color: var(--teal-900);
      margin-bottom: 8px;
    }
    .jadwal-body p {
      font-size: 13px;
      color: var(--gray-600);
      margin: 3px 0;
      font-weight: 500;
    }
    .jadwal-body .loc {
      color: var(--teal-700);
      font-weight: 700;
      margin-top: 10px;
      font-size: 13px;
    }

    /* ══════════════════════════════
       ARTIKEL
    ══════════════════════════════ */
    .artikel-section {
      padding: 80px 0;
      background: linear-gradient(135deg, var(--teal-900) 0%, var(--teal-700) 100%);
      position: relative;
      overflow: hidden;
    }
    .artikel-section::before {
      content: '';
      position: absolute;
      width: 400px; height: 400px;
      border-radius: 50%;
      background: rgba(255,255,255,0.03);
      top: -100px; right: -100px;
    }
    .artikel-section .section-title { color: var(--white); }
    .artikel-section .section-sub { color: rgba(255,255,255,0.6); }

    .artikel-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 26px;
    }
    .artikel-card {
      background: var(--white);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 32px rgba(0,0,0,0.12);
      transition: all 0.3s;
      display: flex;
      flex-direction: column;
    }
    .artikel-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 50px rgba(0,0,0,0.18);
    }
    .artikel-img {
      position: relative;
      overflow: hidden;
    }
    .artikel-img img {
      width: 100%;
      height: 210px;
      object-fit: cover;
      transition: transform 0.5s;
      display: block;
    }
    .artikel-card:hover .artikel-img img {
      transform: scale(1.05);
    }
    .artikel-body {
      padding: 24px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }
    .cat-badge {
      display: inline-block;
      background: var(--teal-100);
      color: var(--teal-800);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
      padding: 4px 10px;
      border-radius: 20px;
      margin-bottom: 12px;
    }
    .artikel-body h3 {
      font-size: 17px;
      font-weight: 700;
      color: var(--teal-900);
      line-height: 1.45;
      margin-bottom: 10px;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
    .artikel-body p {
      font-size: 13px;
      color: var(--gray-600);
      line-height: 1.75;
      flex-grow: 1;
      margin-bottom: 18px;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
    .read-more {
      color: var(--teal-700);
      text-decoration: none;
      font-weight: 700;
      font-size: 13px;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: 0.2s;
    }
    .read-more:hover { color: var(--teal-900); gap: 10px; }
    .read-more::after { content: '→'; }

    /* ══════════════════════════════
       GALERI
    ══════════════════════════════ */
    .galeri-section {
      padding: 80px 0;
      background: var(--gray-50);
    }
    .galeri-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      margin-top: 36px;
    }
    .galeri-item {
      height: 230px;
      border-radius: 16px;
      overflow: hidden;
      position: relative;
      box-shadow: 0 4px 16px rgba(6,58,69,0.08);
      transition: all 0.3s;
    }
    .galeri-item:hover {
      transform: translateY(-4px);
      box-shadow: 0 14px 36px rgba(6,58,69,0.15);
    }
    .galeri-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s;
      display: block;
    }
    .galeri-item:hover img { transform: scale(1.08); }
    .galeri-overlay {
      position: absolute;
      bottom: 0; left: 0;
      width: 100%;
      padding: 20px 16px 16px;
      background: linear-gradient(transparent, rgba(6,30,36,0.82));
      color: var(--white);
      opacity: 0;
      transition: 0.35s;
    }
    .galeri-overlay p {
      font-size: 13px;
      font-weight: 600;
      margin: 0;
    }
    .galeri-item:hover .galeri-overlay { opacity: 1; }

    /* ══════════════════════════════
       FOOTER
    ══════════════════════════════ */
    .footer {
      background: var(--teal-900);
      padding: 56px 0 24px;
    }
    .footer-grid {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr;
      gap: 48px;
      padding-bottom: 40px;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      margin-bottom: 24px;
    }
    .footer-brand h3 {
      color: var(--white);
      font-size: 18px;
      font-weight: 800;
      margin-bottom: 10px;
    }
    .footer-brand p {
      color: rgba(255,255,255,0.55);
      font-size: 13px;
      line-height: 1.8;
    }
    .footer-col h4 {
      color: var(--white);
      font-size: 13px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      margin-bottom: 16px;
    }
    .footer-col ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 8px;
    }
    .footer-col ul li a {
      color: rgba(255,255,255,0.55);
      text-decoration: none;
      font-size: 13px;
      font-weight: 500;
      transition: 0.2s;
    }
    .footer-col ul li a:hover { color: var(--teal-300); }
    .footer-bottom {
      text-align: center;
      color: rgba(255,255,255,0.3);
      font-size: 12px;
    }

    /* ══════════════════════════════
       RESPONSIVE
    ══════════════════════════════ */
    @media (max-width: 900px) {
      .hero-wrapper { flex-direction: column; gap: 40px; text-align: center; }
      .hero-content p { max-width: 100%; }
      .hero-btns { justify-content: center; }
      .hero-content h1 { font-size: 36px; }
      .hero-image img { max-width: 200px; }
      .visimisi-grid { grid-template-columns: 1fr; gap: 40px; }
      .galeri-grid { grid-template-columns: repeat(2,1fr); }
      .footer-grid { grid-template-columns: 1fr; gap: 28px; }
      .stats-inner { gap: 28px; flex-wrap: wrap; justify-content: center; }
      .section-header { flex-direction: column; align-items: flex-start; gap: 10px; }
    }
    @media (max-width: 560px) {
      .galeri-grid { grid-template-columns: 1fr; }
      .nav-menu { display: none; }
    }
  </style>
</head>
<body>

<!-- ══ NAVBAR ══ -->
<header class="navbar">
  <div class="container">
    <div class="navbar-inner">
      <a href="main.php" class="brand">
        <div class="brand-box">S</div>
        <div class="brand-text">
          <strong>SADARI</strong>
          <span>PKK Desa Lohbener</span>
        </div>
      </a>
      <nav>
        <ul class="nav-menu">
          <li><a href="main.php" class="active">Beranda</a></li>
          <li><a href="#visimisi">Visi Misi</a></li>
          <li><a href="#artikel">Artikel</a></li>
          <li><a href="#galeri">Galeri</a></li>
          <li><a href="#jadwal">Jadwal</a></li>
          <li><a href="login.php" class="btn-login">Login</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>

<!-- ══ HERO ══ -->
<section class="hero">
  <div class="container">
    <div class="hero-wrapper">
      <div class="hero-content" data-aos="fade-right">
        <div class="hero-badge">PKK Desa Lohbener, Kab. Indramayu</div>
        <h1>Sadar Informasi,<br/>Sehatkan Desa</h1>
        <p>Bersama PKK Desa Lohbener, mari wujudkan keluarga sehat dan sejahtera melalui informasi kesehatan yang tepat dan terpercaya.</p>
        <div class="hero-btns">
          <a href="#artikel" class="btn-white">Baca Artikel</a>
          <a href="#jadwal" class="btn-ghost">Lihat Jadwal</a>
        </div>
      </div>
      <div class="hero-image" data-aos="fade-left">
        <img src="assets/img/hero_image.png" alt="Logo PKK" />
      </div>
    </div>
  </div>
</section>

<!-- ══ STATS ══ -->
<div class="stats-bar">
  <div class="container">
    <div class="stats-inner">
      <div class="stat-item">
        <strong>10+</strong>
        <span>Program PKK Aktif</span>
      </div>
      <div class="stat-item">
        <strong>50+</strong>
        <span>Anggota PKK</span>
      </div>
      <div class="stat-item">
        <strong>20+</strong>
        <span>Artikel Tersedia</span>
      </div>
      <div class="stat-item">
        <strong>12+</strong>
        <span>Kegiatan Per Tahun</span>
      </div>
    </div>
  </div>
</div>

<!-- ══ VISI MISI ══ -->
<section id="visimisi" class="visimisi-section">
  <div class="container">
    <div class="visimisi-grid">
      <div class="visi" data-aos="fade-right">
        <span class="section-label">Visi Kami</span>
        <h2>Mewujudkan Keluarga Sejahtera untuk Indonesia Maju</h2>
        <p>Terwujudnya keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia dan berbudi luhur, sehat sejahtera, maju-mandiri, kesetaraan dan keadilan gender serta kesadaran hukum dan lingkungan.</p>
      </div>
      <div data-aos="fade-left">
        <span class="section-label">Misi Kami</span>
        <ul class="misi-list">
          <li><span class="misi-num">01</span> Memantapkan penghayatan dan pengamalan Pancasila.</li>
          <li><span class="misi-num">02</span> Meningkatkan pendidikan dan ekonomi keluarga.</li>
          <li><span class="misi-num">03</span> Meningkatkan ketahanan keluarga melalui pemenuhan pangan, sandang, dan perumahan yang layak.</li>
          <li><span class="misi-num">04</span> Meningkatkan derajat kesehatan, kelestarian lingkungan hidup, dan perencanaan sehat.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ══ JADWAL ══ -->
<section id="jadwal" class="jadwal-section">
  <div class="container">
    <div class="section-header">
      <div>
        <h2 class="section-title">Kegiatan Mendatang</h2>
        <p class="section-sub">Jadwal kegiatan PKK Desa Lohbener</p>
      </div>
      <a href="#" class="link-all">Lihat Semua →</a>
    </div>
    <div class="jadwal-grid">

      <!-- nanti diisi dari database, ini contoh statis dulu -->
      <div class="jadwal-card" data-aos="fade-up" data-aos-delay="100">
        <div class="jadwal-icon">📅</div>
        <div class="jadwal-body">
          <h3>Tarawih Keliling</h3>
          <p>Ramadan 2026</p>
          <p>19:30 WIB - Selesai</p>
          <p class="loc">Masjid &amp; Mushola Desa</p>
        </div>
      </div>

      <div class="jadwal-card" data-aos="fade-up" data-aos-delay="200">
        <div class="jadwal-icon">📅</div>
        <div class="jadwal-body">
          <h3>Pembagian Takjil</h3>
          <p>Ramadan 2026</p>
          <p>16:30 - 18:00 WIB</p>
          <p class="loc">Area Balai Desa</p>
        </div>
      </div>

      <div class="jadwal-card" data-aos="fade-up" data-aos-delay="300">
        <div class="jadwal-icon">📅</div>
        <div class="jadwal-body">
          <h3>Penanaman TOGA</h3>
          <p>Maret 2026</p>
          <p>08:00 WIB - Selesai</p>
          <p class="loc">Greenhouse Gotong Royong</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ══ ARTIKEL ══ -->
<section id="artikel" class="artikel-section">
  <div class="container">
    <div class="section-header" style="margin-bottom:36px;">
      <div>
        <h2 class="section-title">Artikel &amp; Kegiatan</h2>
        <p class="section-sub" style="color:rgba(255,255,255,0.6);">Informasi terbaru dari PKK Desa Lohbener</p>
      </div>
      <a href="#" class="link-all" style="color:rgba(255,255,255,0.8);">Lihat Semua →</a>
    </div>
    <div class="artikel-grid">

      <!-- nanti diisi dari database, ini contoh statis dulu -->
      <article class="artikel-card" data-aos="fade-up" data-aos-delay="100">
        <div class="artikel-img">
          <img src="assets/img/Artikel1.png" alt="Belajar Ibu Rumah Tangga" />
        </div>
        <div class="artikel-body">
          <span class="cat-badge">Pendidikan</span>
          <h3>Mendorong Ibu Rumah Tangga agar Terus Belajar</h3>
          <p>Belajar tidak mengenal usia dan status. Bagi ibu rumah tangga, terus mengasah kemampuan atau mempelajari hal baru bukan hanya soal menambah wawasan, tapi juga tentang aktualisasi diri.</p>
          <a href="#" class="read-more">Baca Selengkapnya</a>
        </div>
      </article>

      <article class="artikel-card" data-aos="fade-up" data-aos-delay="200">
        <div class="artikel-img">
          <img src="assets/img/Artikel2.png" alt="Budidaya Sayuran" />
        </div>
        <div class="artikel-body">
          <span class="cat-badge">Pemberdayaan</span>
          <h3>Pemberdayaan Ibu Rumah Tangga Melalui Budidaya Sayuran</h3>
          <p>Budidaya sayuran di lahan sempit atau menggunakan metode hidroponik kini menjadi tren positif bagi ibu rumah tangga untuk menjamin kualitas gizi keluarga.</p>
          <a href="#" class="read-more">Baca Selengkapnya</a>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- ══ GALERI ══ -->
<section id="galeri" class="galeri-section">
  <div class="container">
    <div class="section-header">
      <div>
        <h2 class="section-title">Galeri Kegiatan</h2>
        <p class="section-sub">Dokumentasi kegiatan PKK Desa Lohbener</p>
      </div>
      <a href="#" class="link-all">Lihat Semua →</a>
    </div>
    <div class="galeri-grid">

      <!-- nanti diisi dari database -->
      <div class="galeri-item" data-aos="zoom-in" data-aos-delay="100">
        <img src="assets/img/galeri1.jpeg" alt="Foto 1" />
        <div class="galeri-overlay"><p>Kegiatan Zoom PKK</p></div>
      </div>
      <div class="galeri-item" data-aos="zoom-in" data-aos-delay="150">
        <img src="assets/img/galeri2.jpeg" alt="Foto 2" />
        <div class="galeri-overlay"><p>Penanaman Toga</p></div>
      </div>
      <div class="galeri-item" data-aos="zoom-in" data-aos-delay="200">
        <img src="assets/img/galeri3.jpeg" alt="Foto 3" />
        <div class="galeri-overlay"><p>Penanaman Toga</p></div>
      </div>
      <div class="galeri-item" data-aos="zoom-in" data-aos-delay="250">
        <img src="assets/img/galeri4.jpeg" alt="Foto 4" />
        <div class="galeri-overlay"><p>Pertemuan Rutin Bulanan</p></div>
      </div>
      <div class="galeri-item" data-aos="zoom-in" data-aos-delay="300">
        <img src="assets/img/galeri5.jpeg" alt="Foto 5" />
        <div class="galeri-overlay"><p>Panen Pakcoy</p></div>
      </div>
      <div class="galeri-item" data-aos="zoom-in" data-aos-delay="350">
        <img src="assets/img/galeri6.jpeg" alt="Foto 6" />
        <div class="galeri-overlay"><p>Bagi Takjil Bersama Kader PKK</p></div>
      </div>

    </div>
  </div>
</section>

--FOOTER-- 
<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <h3>SADARI</h3>
        <p>Sistem Aplikasi Digital Aspirasi dan Referensi Informasi PKK Desa Lohbener, Kec. Lohbener, Kab. Indramayu.</p>
        <p style="margin-top:8px;">📧 pkklohbener@gmail.com</p>
      </div>
      <div class="footer-col">
        <h4>Navigasi</h4>
        <ul>
          <li><a href="main.php">Beranda</a></li>
          <li><a href="#visimisi">Visi Misi</a></li>
          <li><a href="#artikel">Artikel</a></li>
          <li><a href="#galeri">Galeri</a></li>
          <li><a href="#jadwal">Jadwal</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Tentang</h4>
        <ul>
          <li><a href="#">Tentang PKK</a></li>
          <li><a href="#">Program Kerja</a></li>
          <li><a href="#">Kontak Kami</a></li>
          <li><a href="login.php">Login Admin</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2026 SADARI PKK Desa Lohbener. All Rights Reserved.</p>
    </div>
  </div>
</footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({ duration: 900, once: true, offset: 80 });
</script>

</body>
</html>