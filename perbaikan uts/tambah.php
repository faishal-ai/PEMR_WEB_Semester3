<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO Buku (Judul, Penulis, Penerbit, Stok) VALUES (:judul, :penulis, :penerbit, :stok)";
    $stmt = $koneksi->prepare($sql);
    $stmt->bindParam(':judul', $judul);
    $stmt->bindParam(':penulis', $penulis);
    $stmt->bindParam(':penerbit', $penerbit);
    $stmt->bindParam(':stok', $stok);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: Data gagal ditambahkan.";
    }
}
?>
