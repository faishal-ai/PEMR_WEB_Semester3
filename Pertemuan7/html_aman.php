<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dan Output</title>
</head>
<body>

<h2>Form Input PHP</h2>

<?php
$input = "";
$email = "";
$emailErr = "";

// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil dan sanitasi input dari form
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    // Validasi email
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Email valid
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); // Sanitasi email
    } else {
        // Email tidak valid
        $emailErr = "Format email tidak valid!";
    }

    // Tampilkan output setelah disubmit
    echo "<h3>Hasil Input:</h3>";
    echo "<p>Input: " . $input . "</p>";
    if (empty($emailErr)) {
        echo "<p>Email: " . $email . "</p>";
    } else {
        echo "<p class='error'>" . $emailErr . "</p>";
    }
}
?>

<!-- Form input -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="input">Masukkan sesuatu: </label>
    <input type="text" id="input" name="input" value="<?php echo $input; ?>"><br><br>

    <label for="email">Masukkan email: </label>
    <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>
    <span class="error"><?php echo $emailErr; ?></span><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
