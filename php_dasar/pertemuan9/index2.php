<?php 
// Koneksi ke database
$conn=mysqli_connect('localhost','root','boelack413','belajar_php');
// Ambil data atau query data pada database/table
$result=mysqli_query($conn,'SELECT * FROM mahasiswa');

// Ambil data dari object result (fetch)
// mysqli_fetch_row() // Mengembalikan array numeric
// mysqli_fetch_assoc() // Mengembalikan array associative
// mysqli_fetch_array() //Mengembalikan array numeric & associative
// mysqli_fetch_object() // Mengembalikan object associative

// $mhs=mysqli_fetch_assoc($result); 
// var_dump($mhs);

// while ($mhs=mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nrp</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $no=1;?>
        <?php while ($row=mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?= $no++?></td>
            <td>
                <a href="#">Edit</a> |  
                <a href="#">Delete</a>
            </td>
            <td>
                <img src="/img/<?= $row['gambar'] ?>" alt="" width="50">
            </td>
            <td><?= $row['npm'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['jurusan'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>