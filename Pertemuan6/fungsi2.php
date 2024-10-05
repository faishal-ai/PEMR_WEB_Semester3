<?php
// function hitungUmur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

//     echo "Umur saya daalah ".hitungUmur(2005,2024) . " tahun<br>";

//percobaan 2
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualikum") {
    echo $salam. ",";
    echo"Perkenalkan, nama saya ".$nama."</br>";

    echo "saya berusia ".hitungUmur(2005,2024) . " tahun<br>";
    echo "Senang berkenalan dengan anda</br>";
}

perkenalan("Faishal");

?>