<?php 
// Koneksi ke database
$conn=mysqli_connect('localhost','root','boelack413','belajar_php');
// Ambil data atau query data pada database/table
// $result=mysqli_query($conn,'SELECT * FROM mahasiswa');

// Ambil data dari object result (fetch)
// mysqli_fetch_row() // Mengembalikan array numeric
// mysqli_fetch_assoc() // Mengembalikan array associative
// mysqli_fetch_array() //Mengembalikan array numeric & associative
// mysqli_fetch_object() // Mengembalikan object associative

function query($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];

    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }

    return $rows;
}


function tambah($data){
    global $conn;
    // Ambil data dari tiap element dalam format
    $npm=htmlspecialchars($data["npm"]);
    $nama=htmlspecialchars($data["nama"]);
    $email=htmlspecialchars($data["email"]);
    $jurusan=htmlspecialchars($data["jurusan"]);
    $gambar=htmlspecialchars($data["gambar"]);

    // QUery insert database
    $query="INSERT INTO mahasiswa
            VALUES
            (NULL,'$nama','$npm','$email','$jurusan','$gambar')  
        ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    // Ambil data dari tiap element dalam format
    $id=$data["id"];
    $npm=htmlspecialchars($data["npm"]);
    $nama=htmlspecialchars($data["nama"]);
    $email=htmlspecialchars($data["email"]);
    $jurusan=htmlspecialchars($data["jurusan"]);
    $gambar=htmlspecialchars($data["gambar"]);

    // QUery insert database
    $query="UPDATE mahasiswa SET
            nama = '$nama',
            npm = '$npm',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar' WHERE id=$id
        ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

?>