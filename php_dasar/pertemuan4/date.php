<?php 
// Untuk menampilkan gambar dengan format tertentu
    // echo date('l, d-M-Y');
    
    // Time
    // Unix Timestamps / EPOCH Time
    // Detik yang sudah berlalu sejak 1 januari 1970 
    // echo time();

    // Tambah kurang waktu
    // $hari=1;
    // $detik=(60*60*24);
    // echo date('l',time()-$hari*$detik);

    // Mktime
    // Membuar detik sendiri
    // mktime(0,0,0,0,0,0);
    // Jam, Menit, Detik, Bulan, Hari, Tahun
    echo mktime(12,12,12,9,1,1996);
    echo "<br>";
    // echo date('l',mktime(12,12,12,9,1,1996));
    echo strtotime('1 Sept 1996 12:12:12');
    // Tidak akan dieksekusi setelah ini
    // die() ;
    // sleep(10000);
    // $data="";
    // var_dump(empty($data));
?>