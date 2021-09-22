<?php 
// Array
// Merupakan variable yang bisa memiliki banyak nilai
// Element pada array boleh menggunakan type data yang berbeda
// Pasangan antara key dan value
// keynya adalah index, yang dimulai dari 0
    // Ada 2 Cara
    // 1. $hari=array('1','2'); Cara lama
    // 2. $hari=['1','2']; Cara baru
    $hari=array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $bulan=['Januari','Februari','Maret'];
    // Menampilkan array 
    // var_dump($hari);
    // print_r($bulan);
    // echo "<br>";
    // Menampilkan satu element pada array
    // echo $bulan[0];
    
    // Menambah array
    var_dump($hari);
    $hari[]="Minggu";
    echo '<br>';
    var_dump($hari);
?>