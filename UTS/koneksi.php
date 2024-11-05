<?php
//Database
$serverName = "LAPTOP-TT5LU6G7\\SQLEXPRESS";
$database = "UTSFAISHAL"; 
$user = ""; 
$pass = ""; 

try {
    //Connect
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
