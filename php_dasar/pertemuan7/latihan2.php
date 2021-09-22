<?php 
    // Cek apakah data ada di $_GET
    if (!isset($_GET['nama']) || 
        !isset($_GET['npm']) || 
        !isset($_GET['email']) || 
        !isset($_GET['jurusan']) || 
        !isset($_GET['gambar']) 
    ) {
        // reidrect
        header("Location: latihan1.php");
        exit();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <!-- Get Methode -->
    <ul>
        <li>
        <li><img src="img/<?= $_GET["gambar"]?>" alt="" width="100"></li>
            <li>Nama :<?= $_GET["nama"]?></li>
            <li>NPM :<?= $_GET["npm"]?></li>
            <li>Jurusan :<?= $_GET["jurusan"] ?></li>
            <li>Email :<?= $_GET["email"]?></li>
        </li>
    </ul>
    <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>