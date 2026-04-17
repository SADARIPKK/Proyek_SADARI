<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Artikel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins',sans-serif; }
        body { background:#f4f4f4; }
        .navbar { background:#2e7d32; padding:15px 30px; display:flex; justify-content:space-between; align-items:center; }
        .navbar span { color:white; font-weight:600; font-size:16px; }
        .navbar a { color:white; text-decoration:none; background:#1b5e20; padding:6px 12px; border-radius:5px; font-size:13px; }
        .container { padding:30px; max-width:800px; }
        h5 { font-size:18px; color:#333; margin-bottom:25px; }
        .form-group { margin-bottom:18px; }
        .form-group label { display:block; font-size:13px; font-weight:500; color:#444; margin-bottom:6px; }
        .form-group input, .form-group textarea, .form-group select { width:100%; padding:10px 14px; border:1.5px solid #e0e0e0; border-radius:8px; font-size:13px; font-family:'Poppins',sans-serif; outline:none; }
        .form-group input:focus, .form-group textarea:focus { border-color:#2e7d32; }
        .btn-simpan { background:#2e7d32; color:white; padding:10px 25px; border:none; border-radius:8px; font-size:14px; font-family:'Poppins',sans-serif; cursor:pointer; }
        .btn-simpan:hover { background:#1b5e20; }
    </style>
</head>
<body>
    <div class="navbar">
        <span> Admin PKK Desa</span>
        <a href="index.php">← Kembali</a>
    </div>

    <div class="container">
        <h5>Tambah Artikel Baru</h5>
        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" name="judul" placeholder="Masukkan judul artikel" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" placeholder="contoh: Kesehatan, Kegiatan">
            </div>
            <div class="form-group">
                <label>Ringkasan</label>
                <textarea name="ringkasan" rows="3" placeholder="Deskripsi singkat artikel..."></textarea>
            </div>
            <div class="form-group">
                <label>Isi Artikel</label>
                <textarea name="konten" rows="10" placeholder="Tulis isi artikel di sini..." required></textarea>
            </div>
            <div class="form-group">
                <label>Thumbnail</label>
                <input type="file" name="thumbnail" accept="image/*">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status">
                    <option value="draft">Draft</option>
                    <option value="diterbitkan">Diterbitkan</option>
                </select>
            </div>
            <button type="submit" class="btn-simpan">Simpan Artikel</button>
        </form>
    </div>
</body>
</html>