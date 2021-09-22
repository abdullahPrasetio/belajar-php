<?php 

require_once 'App/init.php';

$produk1=new Komik("Naruto","Masashi Kisimoto","Shonen Jump",300000,100);
// Game
$produk2=new Game("FIFA 2021","FIFA","FIFA PSSI",100000,50);

echo "<br>";

$cetakProduk=new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
echo "<hr>";
new Coba();