<?php 


// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

// Cara 1
// menggunakan closure callback tanpa nama fungsi
spl_autoload_register(function ($class){
    // Explode untuk menghilangkan namespace 
    // App\Produk\User
    $class=explode('\\',$class);
    $class=end($class);
    require_once __DIR__.'/Produk/'.$class.'.php';
});

spl_autoload_register(function ($class){
    // Explode untuk menghilangkan namespace 
    // App\Service\User
    $class=explode('\\',$class);
    $class=end($class);
    require_once __DIR__.'/Service/'.$class.'.php';
});