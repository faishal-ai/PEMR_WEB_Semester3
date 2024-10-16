<?php
// $pattern = '/[a-z]/'; // Cocokkan huruf kecil
// $text = 'This is a Sample Text.';

// if (preg_match($pattern, $text)) {
//     echo "Huruf kecil ditemukan!<br>";

//     // Menemukan semua huruf kecil
//     preg_match_all($pattern, $text, $matches);
//     echo "Huruf kecil yang ditemukan: " . implode(', ', $matches[0]);
// } else {
//     echo "Tidak ada huruf kecil!";
// }

//p2

// $pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit
// $text = 'There are 123 apples and 456 oranges.';

// // Memeriksa apakah ada digit dalam teks
// if (preg_match($pattern, $text, $matches)) {
//     echo "Cocokkan: " . $matches[0] . "<br>";

//     // Menemukan semua digit yang cocok
//     preg_match_all($pattern, $text, $allMatches);
//     echo "Semua digit yang ditemukan: " . implode(', ', $allMatches[0]);
// } else {
//     echo "Tidak ada yang cocok!";
// }

// $pattern = '/apple/'; // Pola yang akan dicocokkan
// $replacement = 'banana'; // Kata pengganti
// $text = 'I like apple pie'; // Teks asli

// // Melakukan penggantian
// $new_text = preg_replace($pattern, $replacement, $text);

// // Menampilkan hasil
// echo "Teks asli: " . $text . "<br>";
// echo "Teks setelah penggantian: " . $new_text; // Output: "I like banana pie."

//p4
//$pattern = '/go*d/'; 
//$pattern = '/go?d/'; 
$pattern = '/go{1,2}d/';// Cocokkan "god", "good", "gooood", dll.
$text = 'god is good and gooood.';

// Memeriksa apakah ada kata yang cocok
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan pertama: " . $matches[0] . "<br>";

    // Menemukan semua kata yang cocok
    preg_match_all($pattern, $text, $allMatches);
    echo "Semua kata yang cocok: " . implode(', ', $allMatches[0]);
} else {
    echo "Tidak ada yang cocok!";
}


?>
