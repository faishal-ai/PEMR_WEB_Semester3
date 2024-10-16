<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input Data</title>
</head>
<body>
    <h1>Form Input Data</h1>
    <form method="post" action="#">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>

        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="jeruk">Jeruk</option>
            <option value="mangga">Mangga</option>
            <option value="semangka">Semangka</option>
        </select>

        <br><br>

        <label>Pilih Warna Favorit:</label><br>
        Merah <input type="checkbox" name="warna[]" value="merah"><br>
        Hijau <input type="checkbox" name="warna[]" value="hijau"><br>
        Biru <input type="checkbox" name="warna[]" value="biru"><br>

        <br>

        <label>Jenis Kelamin:</label><br>
        Laki-laki <input type="radio" name="jenis_kelamin" value="laki-laki"><br>
        Perempuan <input type="radio" name="jenis_kelamin" value="perempuan"><br>

        <br>

        <input type="submit" value="Submit">
    </form>

    //php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $nama = $_POST["nama"];
    //     $email = $_POST["email"];
    //     $buah = $_POST["buah"];
    //     $errors = array();

    //     // Validasi Nama
    //     if (empty($nama)) {
    //         $errors[] = "Nama harus diisi.";
    //     }

    //     // Validasi Email
    //     if (empty($email)) {
    //         $errors[] = "Email harus diisi.";
    //     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         $errors[] = "Format email tidak valid.";
    //     }

    //     // Validasi Buah
    //     if (empty($buah)) {
    //         $errors[] = "Buah harus dipilih.";
    //     }

    //     // Validasi Warna
    //     $warna = isset($_POST['warna']) ? $_POST['warna'] : [];
    //     $jenis_kelamin = $_POST['jenis_kelamin'];

    //     // Jika ada kesalahan validasi
    //     if (!empty($errors)) {
    //         echo "<ul>";
    //         foreach ($errors as $error) {
    //             echo "<li>$error</li>";
    //         }
    //         echo "</ul>";
    //     } else {
    //         // Lanjutkan dengan proses data
    //         echo "Data berhasil dikirim:<br>";
    //         echo "Nama: $nama<br>";
    //         echo "Email: $email<br>";
    //         echo "Buah: $buah<br>";
    //         echo "Warna favorit: " . (!empty($warna) ? implode(", ", $warna) : "Tidak ada") . "<br>";
    //         echo "Jenis kelamin: $jenis_kelamin";
    //     }
    // }
    
</body>
</html> -->


/////////////////////////////////
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<h2>Simple Form Input dengan Validasi</h2>

<form id="myForm">
    <label for="name">Nama:</label><br/>
    <input type="text" id="name" name="name"><br/>
    <span id="name-error" style="color:red;"></span><br/>
    
    <label for="email">Email:</label><br/>
    <input type="text" id="email" name="email"><br/>
    <span id="email-error" style="color:red;"></span><br/>

    <input type="submit" value="Submit">
</form>

<script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        event.preventDefault();
        
        var valid = true;
        var name = $("#name").val();
        var email = $("#email").val();
        
        if(name === "") {
            valid = false;
            $("#name-error").text("Nama harus diisi!");
        } else {
            $("#name-error").text("");
        }
        
        if(email === "") {
            valid = false;
            $("#email-error").text("Email harus diisi!");
        } else {
            $("#email-error").text("");
        }
        
        if(valid) {
            this.submit();
        }
    });
});
</script>

</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi dan AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<h2>Form Input dengan Validasi Password dan AJAX</h2>

<form id="myForm" method="POST">
    <label for="name">Nama:</label><br/>
    <input type="text" id="name" name="nama"><br/>
    <span id="name-error" style="color:red;"></span><br/>
    
    <label for="email">Email:</label><br/>
    <input type="text" id="email" name="email"><br/>
    <span id="email-error" style="color:red;"></span><br/>

    <label for="password">Password:</label><br/>
    <input type="password" id="password" name="password"><br/>
    <span id="password-error" style="color:red;"></span><br/>

    <input type="submit" value="Submit">
</form>

<div id="result"></div>

<script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        event.preventDefault();  // Mencegah pengiriman form secara default

        var valid = true;
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();

        // Validasi nama
        if(name === "") {
            valid = false;
            $("#name-error").text("Nama harus diisi!");
        } else {
            $("#name-error").text("");
        }

        // Validasi email
        if(email === "") {
            valid = false;
            $("#email-error").text("Email harus diisi!");
        } else {
            $("#email-error").text("");
        }

        // Validasi password (minimal 8 karakter)
        if(password.length < 8) {
            valid = false;
            $("#password-error").text("Password harus minimal 8 karakter!");
        } else {
            $("#password-error").text("");
        }

        // Jika semua validasi sukses, kirim data menggunakan AJAX
        if(valid) {
            $.ajax({
                url: "proses_form.php",  // Ganti dengan file PHP untuk memproses form
                type: "POST",
                data: $("#myForm").serialize(),  // Mengumpulkan data form
                success: function(response) {
                    // Tampilkan respons dari server
                    $("#result").html(response);
                },
                error: function() {
                    // Menampilkan pesan error jika AJAX gagal
                    $("#result").html("Terjadi kesalahan saat mengirim data.");
                }
            });
        }
    });
});
</script>

</body>
</html>

<?php
// Cek apakah semua field yang diperlukan tersedia di $_POST
if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['password'])) {
    // Ambil input yang dikirim dan amankan
    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $password = $_POST['password'];

    // Validasi password harus minimal 8 karakter
    if (strlen($password) < 8) {
        echo "Password harus minimal 8 karakter!";
    } else {
        // Tampilkan data yang telah difilter (nama dan email)
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password diterima!";
    }
} else {
    // Jika salah satu field tidak ditemukan
    echo "Nama, email, atau password tidak ditemukan dalam pengiriman form!";
}
?>
