<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}
require_once '../../koneksi.php';

$id      = $_GET['id'];
$artikel = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel='$id'"));

// Hapus thumbnail kalau ada
if ($artikel['thumbnail']) {
    $file = '../../uploads/artikel/' . $artikel['thumbnail'];
    if (file_exists($file)) unlink($file);
}

// Hapus data dari database
mysqli_query($conn, "DELETE FROM artikel WHERE id_artikel='$id'");
header("Location: index.php");
exit();
?>