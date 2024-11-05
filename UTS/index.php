<?php
session_start();
include_once "koneksi.php";

// Cek
if (!isset($_SESSION['log']) || $_SESSION['log'] != "login") {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
</head>
<body>

<div class="container">
    <h1>Welcome</h1>
    <p>Selamat datang, Anda berhasil login sebagai <b><?= htmlspecialchars($_SESSION['username']) ?></b></p>
</div>

</body>
</html>
