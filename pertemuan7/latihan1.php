<?php 
// Variabel scope / Lingkup variabel
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();

// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// var_dump($_SERVER);

// $_GET
// var_dump($_GET);

$mahasiswa = [
    [
        "nama" => "Rico Mardiansyah",
        "nim" => 2121400147,
        "email" => "rico@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rico.jpg"
    ],
    [
        "nama" => "Jihan Nabilla",
        "nim" => 2121800023,
        "email" => "jihan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "jihan.jpg"
    ]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
            &nim=<?= $mhs["nim"]; ?>
            &email=<?= $mhs["email"]; ?>
            &jurusan=<?= $mhs["jurusan"]; ?>
            &gambar=<?= $mhs["gambar"]; ?>">
            <?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>