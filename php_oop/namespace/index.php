<?php 

// Aturan penulisan namespace 
// namespace Vendor\Namespace\Subnamespace;

// bisa use namespace
use App\Service\User;
use App\Produk\User as UserProduk;

require_once 'App/init.php';

// $produk1=new Komik("Naruto","Masashi Kisimoto","Shonen Jump",300000,100);
// // Game
// $produk2=new Game("FIFA 2021","FIFA","FIFA PSSI",100000,50);

// echo "<br>";

// $cetakProduk=new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();
// echo "<hr>";

// jika gunakan use
new User();

// Jika tidak gunakan use
echo "<hr>";
new UserProduk();