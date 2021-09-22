<?php 
// Variable scope / Lingkup variable
$x=10;
// echo $x;
// function tampilX() {
//     // Cari varible diluar function
//     global $x;
//     echo $x;
// }

// tampilX();

// SuperGlobals variable 
// variable global milik php
// _GET,_POST,_SERVER,_SESSION,_ENV,_COOKIE,_REQUEST
// merupakan array associative

    // _GET
    // Masukkan data cara 1
    // $_GET["nama"]="Waluyo";
    // $_GET["npm"]="201743500312";

    // Masukkan data cara 2 ?nama=Waluyo Ade Prasetio&npm=201743500312
// var_dump($_GET);
$mahasiswa=[
    [
        "nama"=>"Waluyo Ade Prasetio",
        "npm"=>"201743500312",
        "jurusan"=>"Teknik Informatika",
        "email"=>"temancode@gmail.com",
        "gambar"=>"photo1.jpeg",
    ],
    [
        "nama"=>"Aga Prabowo",
        "npm"=>"201743500334",
        "jurusan"=>"Teknik Informatika",
        "email"=>"aga@gmail.com",
        "gambar"=>"photo2.jpeg",
    ],
    [
        "nama"=>"Anggi Masriyanto",
        "npm"=>"201743500334",
        "jurusan"=>"Teknik Informatika",
        "email"=>"anggi@gmail.com",
        "gambar"=>"photo3.jpeg",
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <!-- <?php foreach ($mahasiswa as $mhs) :?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"]?>" alt="" width="100"></li>
            <li>Nama :<?= $mhs["nama"]?></li>
            <li>NPM :<?= $mhs["npm"]?></li>
            <li>Jurusan :<?= $mhs["jurusan"] ?></li>
            <li>Email :<?= $mhs["email"]?></li>
        </ul>
    <?php endforeach; ?> -->
    <ul>
        <?php foreach ($mahasiswa as $mhs) :?>
                <li>
                    <a href="latihan2.php?nama=<?= $mhs["nama"]?>&gambar=<?= $mhs["gambar"]?>&jurusan=<?= $mhs["jurusan"]?>&email=<?= $mhs["email"]?>">
                        <?= $mhs["nama"]?>
                    </a>
                </li>
            <?php endforeach; ?>
    </ul>
</body>
</html>