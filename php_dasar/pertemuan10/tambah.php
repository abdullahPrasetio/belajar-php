<?php 
require 'functions.php';
// Cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal ditambahkan!');
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <ul>
        <form action="" method="POST">
            <li>
                <label for="npm">NPM :</label>
                <input type="text" name="npm" required id="npm">
            </li>        
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" required id="nama">
            </li> 
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" required id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" required id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" required id="gambar">
            </li> 
            <br>
            <button type="submit" name="submit">Tambah data</button>                              
        </form>
    </ul>
</body>
</html>

