<?php
$host = "LAPTOP-TT5LU6G7\\SQLEXPRESS"; 
$dbname = "Perpustakaan";
$user = ""; 
$pass = "";

try {
    $koneksi = new PDO("sqlsrv:Server=$host;Database=$dbname", $user, $pass);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
