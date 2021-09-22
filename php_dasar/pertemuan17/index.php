<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}

require 'functions.php';
$mhs=query('SELECT * FROM mahasiswa');
// Jika tombol 
if (isset($_POST['cari'])) {
    $mhs=cari($_POST['keyword']);
}
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
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>
    <form method="post">
        <input type="text" name="keyword" size="50" autofocus placeholder="Input keyword" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
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
        <!-- dari fungsi yang resultnya array -->
        <?php foreach ($mhs as $row) :?>
            <tr>
            <td><?= $no++?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id']?>">Edit</a> |  
                <a href="hapus.php?id=<?= $row['id']?>" onclick="return confirm('Yakin akan mau menghapus?');">Delete</a>
            </td>
            <td>
                <img src="/img/<?= $row['gambar'] ?>" alt="" width="50">
            </td>
            <td><?= $row['npm'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['jurusan'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>