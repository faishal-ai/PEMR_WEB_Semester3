<?php
$nilaiSiswa = [85,92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(",", $nilaiLulus);

$daftarkaryawan =[
['Alice', 7],
['Bob', 3],
['Charlie', 9],
['David', 5],
['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarkaryawan as $karyawan) {
if ($karyawan [1] > 5) {
    $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<p>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(',',
$karyawanPengalamanLimaTahun);

$daftarNilai =[
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
$mataKuliah = 'Fisika';

echo "<p>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

$daftarNilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
$jumlahSiswa = count($daftarNilaiSiswa);

foreach ($daftarNilaiSiswa as $siswa) {
    $totalNilai += $siswa[1];
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "<p>Rata-rata nilai kelas: $rataRata</p>";

echo "<p>Daftar siswa yang mendapat nilai di atas rata-rata: <br>";

foreach ($daftarNilaiSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]} <br>";
    }
}
?>
