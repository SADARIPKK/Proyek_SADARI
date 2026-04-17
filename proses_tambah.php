<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}
require_once '../../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul     = $_POST['judul'];
    $kategori  = $_POST['kategori'];
    $ringkasan = $_POST['ringkasan'];
    $konten    = $_POST['konten'];
    $status    = $_POST['status'];
    $id_admin  = $_SESSION['id_admin'];

    // Buat slug
    $slug = strtolower(str_replace(' ', '-', $judul));
    $slug = preg_replace('/[^a-z0-9-]/', '', $slug);
    $slug = $slug . '-' . time();

    // Upload thumbnail
    $thumbnail = null;
    if (!empty($_FILES['thumbnail']['name'])) {
        $ext       = pathinfo($_FILES['thumbnail']['name'], PATHINFO_EXTENSION);
        $nama_file = 'artikel_' . time() . '.' . $ext;
        $tujuan    = '../../uploads/artikel/' . $nama_file;
        if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $tujuan)) {
            $thumbnail = $nama_file;
        }
    }

    $published_at = ($status == 'diterbitkan') ? "NOW()" : "NULL";

    $query = "INSERT INTO artikel (id_admin, judul, slug, konten, ringkasan, thumbnail, kategori, status, published_at)
              VALUES ('$id_admin', '$judul', '$slug', '$konten', '$ringkasan', '$thumbnail', '$kategori', '$status', $published_at)";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php?success=1");
    } else {
        header("Location: tambah.php?error=1");
    }
    exit();
}
?>