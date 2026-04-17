<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}
require_once '../../koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM artikel ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Artikel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins',sans-serif; }
        body { background:#f4f4f4; }
        .navbar { background:#2e7d32; padding:15px 30px; display:flex; justify-content:space-between; align-items:center; }
        .navbar span { color:white; font-weight:600; font-size:16px; }
        .navbar a { color:white; text-decoration:none; background:#1b5e20; padding:6px 12px; border-radius:5px; margin-left:8px; font-size:13px; }
        .navbar a:hover { background:#4caf50; }
        .container { padding:30px; }
        .top { display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; }
        .top h5 { font-size:18px; color:#333; }
        .btn-tambah { background:#2e7d32; color:white; padding:8px 16px; border-radius:8px; text-decoration:none; font-size:13px; }
        table { width:100%; border-collapse:collapse; background:white; border-radius:10px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.08); }
        th { background:#2e7d32; color:white; padding:12px 15px; font-size:13px; text-align:left; }
        td { padding:12px 15px; font-size:13px; border-bottom:1px solid #f0f0f0; color:#444; }
        tr:hover td { background:#f9f9f9; }
        .badge { padding:4px 10px; border-radius:20px; font-size:11px; font-weight:500; }
        .badge-hijau { background:#e8f5e9; color:#2e7d32; }
        .badge-kuning { background:#fff8e1; color:#f9a825; }
        .badge-abu { background:#f5f5f5; color:#888; }
        .btn-edit { background:#f9a825; color:white; padding:5px 10px; border-radius:5px; text-decoration:none; font-size:12px; }
        .btn-hapus { background:#e53935; color:white; padding:5px 10px; border-radius:5px; text-decoration:none; font-size:12px; }
        .kosong { text-align:center; padding:40px; color:#aaa; }
    </style>
</head>
<body>
    <div class="navbar">
        <span> Admin PKK Desa</span>
        <div>
            <a href="../dashboard.php">Dashboard</a>
            <a href="../logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="top">
            <h5>Kelola Artikel</h5>
            <a href="tambah.php" class="btn-tambah">+ Tambah Artikel</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php if (mysqli_num_rows($query) == 0) { ?>
                <tr><td colspan="6" class="kosong">Belum ada artikel</td></tr>
            <?php } else { $no = 1; while ($data = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['judul'] ?></td>
                    <td><?= $data['kategori'] ?? '-' ?></td>
                    <td>
                        <?php if ($data['status'] == 'diterbitkan') { ?>
                            <span class="badge badge-hijau">Diterbitkan</span>
                        <?php } elseif ($data['status'] == 'draft') { ?>
                            <span class="badge badge-kuning">Draft</span>
                        <?php } else { ?>
                            <span class="badge badge-abu">Diarsipkan</span>
                        <?php } ?>
                    </td>
                    <td><?= date('d/m/Y', strtotime($data['created_at'])) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $data['id_artikel'] ?>" class="btn-edit">Edit</a>
                        <a href="hapus.php?id=<?= $data['id_artikel'] ?>" class="btn-hapus" onclick="return confirm('Yakin hapus artikel ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } } ?>
            </tbody>
        </table>
    </div>
</body>
</html>