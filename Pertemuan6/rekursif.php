<?php
// function tampilkanHaloDunia(){
//     echo"Halo dunia! <br>";

//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();

// for ($i=0; $i <= 25 ; $i++) { 
//     echo"Perulangan ke- {$i} <br>";
// }

function tampilAngka (int $jumlah, int $indeks = 1) {
    echo"Pelungan ke-{$indeks}<br>";

    if($indeks < $jumlah){
        tampilAngka($jumlah, $indeks+1);
    }
}
tampilAngka(20)
?>