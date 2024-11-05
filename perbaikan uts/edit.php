<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM Buku WHERE Id = :id";
$stmt = $koneksi->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$buku = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $stok = $_POST['stok'];

    $sql = "UPDATE Buku SET Judul = :judul, Penulis = :penulis, Penerbit = :penerbit, Stok = :stok WHERE Id = :id";
    $stmt = $koneksi->prepare($sql);
    $stmt->bindParam(':judul', $judul);
    $stmt->bindParam(':penulis', $penulis);
    $stmt->bindParam(':penerbit', $penerbit);
    $stmt->bindParam(':stok', $stok);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: Data gagal diupdate.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>

<h2>Edit Buku</h2>
<form action="" method="POST">
    <label>Judul:</label><br>
    <input type="text" name="judul" value="<?= htmlspecialchars($buku['Judul']) ?>" required><br>
    
    <label>Penulis:</label><br>
    <input type="text" name="penulis" value="<?= htmlspecialchars($buku['Penulis']) ?>" required><br>
    
    <label>Penerbit:</label><br>
    <input type="text" name="penerbit" value="<?= htmlspecialchars($buku['Penerbit']) ?>" required><br>
    
    <label>Stok:</label><br>
    <input type="number" name="stok" value="<?= htmlspecialchars($buku['Stok']) ?>" required><br><br>
    
    <button type="submit">Simpan Perubahan</button>
</form>

</body>
</html>
