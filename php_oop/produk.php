<?php 
// Jualan produk1
// komik
// Game
class Produk{
    public $judul="judul",
            $penulis="penulis",
            $penerbit="penerbit",
            $harga=0;

    public function sayHello(){
        return "Hello World!";
    }

    public function getLabel(){
        return "$this->penulis ,$this->penerbit";
    }
}
// instansiasi object
// $produk1=new Produk();
// $produk1->judul="naruto";
// $produk2=new Produk();
// $produk2->judul="Batman";
// // Tambah property baru
// $produk2->judul2="APa ya";

// var_dump($produk1);
// echo "<br>";
// var_dump($produk2);

// Komik/buku
$produk3=new Produk();
$produk3->judul="Waluyo Biography";
$produk3->penulis="Waluyo";
$produk3->penerbit="Waluyo Foundation";
$produk3->harga=120000;

// var_dump($produk3);
// echo "Buku : $produk3->judul, $produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel();

// echo "<hr>";
// echo "<br>";

// Game
$produk4=new Produk();
$produk4->judul="FIFA 2021";
$produk4->penulis="FIFA";
$produk4->penerbit="FIFA Foundation";
$produk4->harga=3200000;

echo "Komik :".$produk3->getLabel();
echo "<br>";
echo "Game :".$produk4->getLabel();