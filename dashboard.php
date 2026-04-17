<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
require_once '../koneksi.php';

$total_artikel = mysqli_num_rows(mysqli_query($conn, "SELECT id_artikel FROM artikel"));
$total_galeri  = mysqli_num_rows(mysqli_query($conn, "SELECT id_galeri FROM galeri"));
$total_jadwal  = mysqli_num_rows(mysqli_query($conn, "SELECT id_jadwal FROM jadwal"));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - PKK Desa</title>
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family:Arial,sans-serif; }
        body { background:#f4f4f4; }
        .navbar { background:#2e7d32; padding:15px 30px; display:flex; justify-content:space-between; align-items:center; }
        .navbar span { color:white; font-weight:bold; font-size:18px; }
        .navbar a { color:white; text-decoration:none; background:#1b5e20; padding:6px 12px; border-radius:5px; margin-left:10px; font-size:14px; }
        .navbar a:hover { background:#4caf50; }
        .container { padding:30px; }
        .container h5 { font-size:20px; margin-bottom:20px; color:#333; }
        .cards { display:flex; gap:20px; flex-wrap:wrap; }
        .card { background:white; border-radius:10px; padding:25px; flex:1; min-width:200px; box-shadow:0 2px 8px rgba(0,0,0,0.1); }
        .card h6 { color:#666; font-size:14px; margin-bottom:10px; }
        .card h2 { font-size:45px; margin-bottom:10px; }
        .card a { text-decoration:none; font-size:14px; }
        .card.hijau { border-left:5px solid #2e7d32; }
        .card.hijau h2 { color:#2e7d32; }
        .card.hijau a { color:#2e7d32; }
        .card.biru { border-left:5px solid #0288d1; }
.card:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease;
    box-shadow: 0 6px 16px rgba(0,0,0,0.15);
}
        .card.biru h2 { color:#0288d1; }
        .card.biru a { color:#0288d1; }
        .card.kuning { border-left:5px solid #f9a825; }
        .card.kuning h2 { color:#f9a825; }
        .card.kuning a { color:#f9a825; }
        .welcome { background:white; padding:20px 25px; border-radius:10px; margin-bottom:25px; box-shadow:0 2px 8px rgba(0,0,0,0.1); }
        .welcome p { color:#666; margin-top:5px; font-size:14px; }
    </style>
</head>
<body>
    <div class="navbar">
        <span>Admin PKK Desa</span>
        <div>
            <span style="color:white; margin-right:10px;">Halo, <?= $_SESSION['nama'] ?>!</span>
            <a href="artikel/index.php">Artikel</a>
            <a href="galeri/index.php">Galeri</a>
            <a href="jadwal/index.php">Jadwal</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="welcome">
            <h5>Selamat Datang, <?= $_SESSION['nama'] ?>!</h5>
            <p>Ini adalah halaman dashboard admin PKK Desa. Kelola konten website dari sini.</p>
        </div>

        <h5>Ringkasan Data</h5>
        <div class="cards">
            <div class="card hijau">
                <h6>Total Artikel</h6>
                <h2><?= $total_artikel ?></h2>
                <a href="artikel/index.php">Kelola Artikel →</a>
            </div>
            <div class="card biru">
                <h6>Total Galeri</h6>
                <h2><?= $total_galeri ?></h2>
                <a href="galeri/index.php">Kelola Galeri →</a>
            </div>
            <div class="card kuning">
                <h6>Total Jadwal</h6>
                <h2><?= $total_jadwal ?></h2>
                <a href="jadwal/index.php">Kelola Jadwal →</a>
            </div>
        </div>
    </div>
</body>
</html>