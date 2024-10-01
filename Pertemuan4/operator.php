<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang= $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$Pangkat = $a ** $b;

echo "<h2>Hasil Operasi Aritmatika</h2>";
echo "<p>Hasil Penjumlahan $a + $b = $hasilTambah</p>";
echo "<p>Hasil Pengurangan $a - $b = $hasilKurang</p>";
echo "<p>Hasil Perkalian $a * $b = $hasilKali</p>";
echo "<p>Hasil Pembagian $a / $b = $hasilBagi</p>";
echo "<p>Hasil Sisa Bagi $a % $b = $sisaBagi</p>";
echo "<p>Hasil Pangkat $a ** $b = $Pangkat</p>";

$hasilsama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<h2>Hasil Operasi Logika 1</h2>";
echo "<p>hasilsama $a == $b = $hasilsama 0</p>";
echo "<p>hasilTidakSama $a != $b = $hasilTidakSama</p>";
echo "<p>hasilLebihKecil $a < $b = $hasilLebihKecil 0</p>";
echo "<p>hasilLebihBesar $a > $b = $hasilLebihBesar</p>";
echo "<p>hasilLebihKecilSama $a <= $b = $hasilLebihKecilSama 0</p>";
echo "<p>hasilLebihBesarSama $a >= $b = $hasilLebihBesarSama</p>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<h2>Hasil Operasi Logika 2</h2>";
echo "<p>Hasil AND ($a && $b) = $hasilAnd</p>";
echo "<p>Hasil OR ($a || $b) = $hasilOr</p>";
echo "<p>Hasil NOT A (!$a) = $hasilNotA 0</p>";
echo "<p>Hasil NOT B (!$b) = $hasilNotB 0</p>";


$a = 10;
$b = 5;

echo "<h2>Hasil Operasi Penugasan Gabungan</h2>";

$a += $b;
echo "<p>Hasil \$a += \$b (10 += 5) = $a</p>";

$a = 10; 
$a -= $b;
echo "<p>Hasil \$a -= \$b (10 -= 5) = $a</p>";

$a = 10;
$a *= $b;
echo "<p>Hasil \$a *= \$b (10 *= 5) = $a</p>";

$a = 10;
$a /= $b; 
echo "<p>Hasil \$a /= \$b (10 /= 5) = $a</p>";

$a = 10; 
$a %= $b;
echo "<p>Hasil \$a %= \$b (10 %= 5) = $a</p>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<h2>Hasil Operasi Identik dan Tidak Identik</h2>";
echo "<p>Hasil \$a === \$b (10 === 5) = " . ($hasilIdentik ? 'true' : 'false') . "</p>";
echo "<p>Hasil \$a !== \$b (10 !== 5) = " . ($hasilTidakIdentik ? 'true' : 'false') . "</p>";

$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi; 
$persenKosong = ($kursiKosong / $totalKursi) * 100; 

echo "<h2>Perhitungan Persentase Kursi Kosong di Restoran</h2>";
echo "<p>Total Kursi: $totalKursi</p>";
echo "<p>Kursi Terisi: $kursiTerisi</p>";
echo "<p>Kursi Kosong: $kursiKosong</p>";
echo "<p>Persentase Kursi Kosong: " . number_format($persenKosong, 2) . "%</p>";
?>



