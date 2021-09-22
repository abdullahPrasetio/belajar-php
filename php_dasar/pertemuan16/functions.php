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

    // Upload Gambar
    $gambar=upload();

    if (!$gambar) {
        return false;
    }

    // QUery insert database
    $query="INSERT INTO mahasiswa
            VALUES
            (NULL,'$nama','$npm','$email','$jurusan','$gambar')  
        ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile=$_FILES['gambar']['name'];
    $ukuranFile=$_FILES['gambar']['size'];
    $error=$_FILES['gambar']['error'];
    $tmpName=$_FILES['gambar']['tmp_name'];

    
    // Cek apakah tidak ada gambar yang di upload
    if($error===4){
        echo "<script>
            alert('Pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }
    // Yang apakah yang di upload adalah gambar
    $ekstensiGambarValid=['jpg','jpeg','png'];
    $ekstensiGambar=explode(".",$namaFile);
    $ekstensiGambar=strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar,$ekstensiGambarValid)) {
        echo "<script>
            alert('File yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    // Cek jika ukuran file terlalu besar
    if ($ukuranFile >1000000) {
        echo "<script>
            alert('Ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    // Lolos pengecekan dan file siap di upload_destination_error
    // Generate nama gambar baru
    $namaFileBaru=uniqid();
    $namaFileBaru.='.';
    $namaFileBaru.=$ekstensiGambar;
    move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

    return $namaFileBaru;

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
    $gambarLama=htmlspecialchars($data["gambarLama"]);

    // Cek apakah user pilih gamabar baru atau Tidak
    if($_FILES['gambar']['error']===4){
        $gambar=$gambarLama;
    }else{
        $gambar=upload();
    }

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

function cari($keyword){
    // global $conn;
    $query= "SELECT * FROM mahasiswa
        WHERE 
        nama LIKE '%$keyword%' OR
        npm LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%' 
    ";
    return query($query);
}

function register($data){
    global $conn;

    $username=strtolower(stripslashes($data['username']));
    $password= mysqli_real_escape_string($conn,$data['password']);
    $password2=mysqli_real_escape_string($conn,$data['password2']);

    // Cek username sudah ada atau belum
    $result =mysqli_query($conn,"SELECT username FROM users WHERE username='$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Username sudah terdaftar');
        </script>";
        return false;
    }

    // Cek konfirmasi password
    if ($password!==$password2) {
        echo "<script>
            alert('Konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // tambahkan userbaru ke database_seeder
    mysqli_query($conn,"INSERT INTO users VALUES (NULL,'$username','$password')");

    return mysqli_affected_rows($conn);


}
?>