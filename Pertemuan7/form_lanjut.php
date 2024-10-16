<!DOCTYPE html>
<html>
<head>
    <title>Form Contoh dengan PHP</title>
</head>
<body>
    <form method="POST" action="#">
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

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedBuah = $_POST['buah'];

        if (isset($_POST['warna'])) {
            $selectedWarna = $_POST['warna'];
        } else {
            $selectedWarna = [];
        }

        $selectedJenisKelamin = $_POST['jenis_kelamin'];

        echo "Anda memilih buah: " . $selectedBuah . "<br>";

        if (!empty($selectedWarna)) {
            echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
        } else {
            echo "Anda tidak memilih warna favorit.<br>";
        }

        echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
    }
    ?>
</body>
</html>
