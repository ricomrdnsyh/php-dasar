<?php 
// Array
// variabel yang dapat meimiliki banyak nilai

// membuat array cara lama
$hari = array("Senin,", "Selasa", "Rabu");

// membuat array cara baru
$bulan = ["Januari", "Februari", "Maret"];

// boleh menggunakan tipe data berbeda
$arr1 = [123, "Teks", true];

//Menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan satu elemen
// echo$bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);

?>