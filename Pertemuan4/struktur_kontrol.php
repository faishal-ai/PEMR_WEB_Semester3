<?php
$nilaiNumerik = 87;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
}elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$JarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $JarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo"<P>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan =10;
$tanamanPerLahan = 5;
$buahPerTaman = 10;
$JumlahBuah = 0;

for ($i=0; $i <$jumlahLahan ; $i++) { 
    $JumlahBuah += ($tanamanPerLahan * $buahPerTaman );
}

echo "<p>Jumlah buah yang akan dipanen adalah: $JumlahBuah ";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo"<p>Total skor ujian adalah: $totalSkor <br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88 , 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo"Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

// Nilai siswa 
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// urutkan nilai 
sort($nilaiSiswa);

// Menghapus dua nilai terendah dan dua nilai tertinggi
$nilaiTengah = array_slice($nilaiSiswa, 2, -2);

// Menghitung total nilai dan mengabaikan dua nilai tertinggi dan terendah
$totalNilai = array_sum($nilaiTengah);

// Mhitung rata-rata
$rataRata = $totalNilai / count($nilaiTengah);

// tampil hasil
echo "<br>Total nilai yang digunakan: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata";

$hargaAwal = 120000;
$diskon = 0.20;

if ($hargaAwal > 100000) {

    $jumlahDiskon = $hargaAwal * $diskon;

    $hargaSetelahDiskon = $hargaAwal - $jumlahDiskon;

    echo "<p>Harga setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
} else {
    echo "<br>Harga tidak memenuhi syarat diskon, bayar: Rp " . number_format($hargaAwal, 0, ',', '.');
}


$totalPoin = 330; 

echo "<br><br>Total skor pemain adalah: $totalPoin<br>";

if ($totalPoin > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}

?>