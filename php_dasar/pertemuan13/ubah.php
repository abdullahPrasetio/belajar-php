<?php 
require 'functions.php';
// Ambil data di url 
$id=$_GET['id'];

// Query data mahasiswa berdasarkan id 
$mhs=query("SELECT * FROM mahasiswa WHERE id=$id")[0];

// Cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])) {
    // cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal diubah!');
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
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <ul>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhs['gambar'] ?>">
            <li>
                <label for="npm">NPM :</label>
                <input type="text" name="npm" required value="<?= $mhs['npm'] ?>" id="npm">
            </li>        
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" required value="<?= $mhs['nama'] ?>" id="nama">
            </li> 
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" required value="<?= $mhs['email'] ?>" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" required value="<?= $mhs['jurusan'] ?>" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar :</label> <br>
                <img src="img/<?= $mhs['gambar'] ?>" alt="" width="50">
                <input type="file" name="gambar" id="gambar">
            </li> 
            <br>
            <button type="submit" name="submit">Update data</button>                              
        </form>
    </ul>
</body>
</html>

