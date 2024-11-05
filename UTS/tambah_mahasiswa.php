<?php
//koneksi database
include 'koneksi.php';

// Cek apakah form disubmit
if (isset($_POST['submit'])) {

    //TAMBAH data
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    
    // insert data ke tabel mahasiswa
    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, tanggal_lahir, email) 
              VALUES ('$nama', '$nim', '$jurusan', '$tanggal_lahir', '$email')";
    
    $data = $conn->query($query);
    
    // esekusi query broooo
    if ($data == true) {
        echo '<script>alert("Data mahasiswa berhasil ditambahkan!");window.location="tambah_mahasiswa.php";</script>';
    } else {
        echo '<script>alert("Data mahasiswa Gagal ditambahkan!");window.location="index.php";</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Form Tambah Mahasiswa</h2>
    <form method="POST" action="">
        <label>Nama Mahasiswa:</label><br>
        <input type="text" name="nama" required><br><br>
        
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>
        
        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" required><br><br>
        
        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" required><br><br>
        
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <input type="submit" name="submit" value="Tambah Mahasiswa">
    </form>
    <a href="logout.php">Logout</a>
</body>
</html>
