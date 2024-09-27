<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil Penjumlahan $angka1 dan $angka2 Adalah $hasil";

$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah";

//mendevinisikan konstanta nilai tetap
define("NAMA_SITUS", "Websitku.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";

?>