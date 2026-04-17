<?php
session_start();
require_once '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password' AND status='aktif'");
    $admin = mysqli_fetch_assoc($query);

    if ($admin) {
        $_SESSION['admin']    = $admin;
        $_SESSION['id_admin'] = $admin['id_admin'];
        $_SESSION['nama']     = $admin['nama_lengkap'];
        $_SESSION['role']     = $admin['role'];

        mysqli_query($conn, "UPDATE admin SET terakhir_login=NOW() WHERE id_admin='{$admin['id_admin']}'");

        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
}
?>
