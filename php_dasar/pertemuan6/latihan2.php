<?php 
// Array numeric
    // $mahasiswa=[
    //     ["Waluyo","201743500312","Teknik Informatika","temancode@gmail.com"],
    //     ["Aga","201743500313","Teknik Informatika","aga@gmail.com"],
    //     ["Anggi","201743500314","Teknik Informatika","anggi@gmail.com"],
    // ];
// Array assosiative
// key nya string yang kita definisikan sendiri y
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
    <h1>Daftar Mahasiswa</h1>
    <!-- Array numeric -->
    <!-- <?php foreach ($mahasiswa as $key => $mhs) :?>
        <ul>
            <li>Nama :<?= $mhs[0]?></li>
            <li>NPM :<?= $mhs[1]?></li>
            <li>Jurusan :<?= $mhs[2] ?></li>
            <li>Email :<?= $mhs[3]?></li>
        </ul>
    <?php endforeach; ?> -->
    <!-- Array Associative -->
    <!-- <?php echo $mahasiswa[2]["tugas"][0]?> -->
    <?php foreach ($mahasiswa as $key => $mhs) :?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]?>" alt="" width="100">
            </li>
            <li>Nama :<?= $mhs["nama"]?></li>
            <li>NPM :<?= $mhs["npm"]?></li>
            <li>Jurusan :<?= $mhs["jurusan"] ?></li>
            <li>Email :<?= $mhs["email"]?></li>
        </ul>
    <?php endforeach?>
</body>
</html>