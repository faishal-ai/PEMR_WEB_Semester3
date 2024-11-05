<?php
include 'koneksi.php';

// Mengambil data buku dari database
$sql = "SELECT * FROM Buku";
$stmt = $koneksi->query($sql);
$bukuList = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
</head>
<body>

<h2>Daftar Buku</h2>
<table border="1">
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($bukuList as $buku): ?>
    <tr>
        <td><?= htmlspecialchars($buku['Judul']) ?></td>
        <td><?= htmlspecialchars($buku['Penulis']) ?></td>
        <td><?= htmlspecialchars($buku['Penerbit']) ?></td>
        <td><?= htmlspecialchars($buku['Stok']) ?></td>
        <td>
            <a href="edit.php?id=<?= $buku['Id'] ?>">Edit</a> | 
            <a href="hapus.php?id=<?= $buku['Id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>Tambah Buku</h2>
<form action="tambah.php" method="POST">
    <label>Judul:</label><br>
    <input type="text" name="judul" required><br>
    
    <label>Penulis:</label><br>
    <input type="text" name="penulis" required><br>
    
    <label>Penerbit:</label><br>
    <input type="text" name="penerbit" required><br>
    
    <label>Stok:</label><br>
    <input type="number" name="stok" required><br><br>
    
    <button type="submit">Tambah Buku</button>
</form>

</body>
</html>