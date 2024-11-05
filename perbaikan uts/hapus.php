<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM Buku WHERE Id = :id";
$stmt = $koneksi->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    echo "Error: Data gagal dihapus.";
}
?>
