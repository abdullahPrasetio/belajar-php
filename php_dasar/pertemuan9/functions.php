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
?>