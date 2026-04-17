<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - PKK Desa</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    * { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins', sans-serif; }
        body { background:#f0f4f0; display:flex; justify-content:center; align-items:center; min-height:100vh; }
        .card { background:white; padding:40px; border-radius:15px; box-shadow:0 4px 20px rgba(0,0,0,0.1); width:380px; }
        .judul { text-align:center; margin-bottom:25px; }
        .judul h4 { color:#2e7d32; font-size:22px; }
        .judul p { color:#888; font-size:14px; margin-top:5px; }
        .form-group { margin-bottom:18px; }
        .form-group label { display:block; margin-bottom:6px; font-size:14px; color:#333; }
        .form-group input { width:100%; padding:10px 12px; border:1px solid #ddd; border-radius:8px; font-size:14px; outline:none; }
        .form-group input:focus { border-color:#2e7d32; }
        .btn { width:100%; padding:11px; background:#2e7d32; color:white; border:none; border-radius:8px; font-size:15px; cursor:pointer; }
        .btn:hover { background:#1b5e20; }
        .error { background:#fdecea; color:#c62828; padding:10px; border-radius:8px; font-size:14px; margin-bottom:15px; text-align:center; }
    </style>
</head>
<body>
    <div class="card">
        <div class="judul">
            <h4>Admin PKK Desa</h4>
            <p>Silakan login untuk melanjutkan</p>
        </div>

        <?php if (isset($_GET['error'])) { ?>
            <div class="error">Username atau password salah!</div>
        <?php } ?>

        <form action="proses_login.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div style="position: relative;">
    <input type="password" id="password" name="password" placeholder="Masukkan password" required style="padding-right: 40px;">

    <span id="togglePassword">
    <i class="fa-solid fa-eye"></i>
</span>
</div>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
    <script>
<script>
const password = document.getElementById("password");
const toggle = document.getElementById("togglePassword");
const icon = toggle.querySelector("i");

toggle.addEventListener("click", () => {
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    if (type === "password") {
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    } else {
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    }
});
</script>
</script>
</body>
</html>