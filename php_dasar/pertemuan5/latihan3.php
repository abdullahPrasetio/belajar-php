<?php 
    $mahasiswa=["Waluyo Ade Prasetio","201743500312","Teknik Informatika","temancode@gmail.com"];
    $students=[
        ["Waluyo Ade Prasetio","201743500312","Teknik Informatika","temancode@gmail.com"],
        ["Aga Prabowo","201743523432","Teknik Informatika","aga@gmail.com"]
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
    <h1>Daftar Mahasiswa</h1>
    <!-- <ul>
        <?php foreach ($mahasiswa as $key => $ms) :?>
            <li><?= $ms?></li>
        <?php endforeach ?>
    </ul> -->
    <?php foreach ($students as $key => $student) : ?>
        <ul>
            <li>Nama : <?= $student[0] ?></li>
            <li>NPM :<?= $student[1] ?></li>
            <li>Jurusan :<?= $student[2] ?></li>
            <li>Email :<?= $student[3] ?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>