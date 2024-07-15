<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HMTL di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka

// $nama = "Rico Mardiansyah";

// Operator
// Aritmatika
// + - * / %

// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung string / Concattenation / Concat
// .

// $nama_depan = "Rico";
// $nama_belakang = "Mardiansyah";
// echo $nama_depan." ". $nama_belakang;

// Asignment

// =, +=, -=, *=, /=, %=, .=

// $x = 1;
// $x += 4;
// echo $x;

// $nama = "Rico";
// $nama .= " ";
// $nama .= "Mardiansyah";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=

// var_dump(1 < 5);

// Identitas 
// ===, !==

// var_dump(1 === "1");

//Logika
// &&, ||, !

$x = 30;
var_dump($x < 20 || $x % 2 == 0);

?>
 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
 </head>
 <body>
    <h1>Hello, Selamat datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
 </body>
 </html> -->