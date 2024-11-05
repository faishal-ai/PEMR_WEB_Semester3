<?php 
session_start();
session_unset();
session_destroy();     

echo '<script>alert("Anda Berhasil Logout");windo.location="login.php"</script>';
?>