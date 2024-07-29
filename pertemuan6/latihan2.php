<?php 
    // $mahasiswa = [
    //     ["Rico Mardiansyah", 2121400147, "rico@gmail.com", "Teknik Informatika"],
    //     ["Jihan Nabilla", 2122400056, "jihan@gmail.com", "Teknik Informatika"],
    // ];

    // Array Associative
    // key-nya adalah string yang kita buat sendiri
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
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"]; ?>" width="100px" alt=""></li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NIM : <?= $mhs["nim"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>