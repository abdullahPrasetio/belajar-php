<?php 
// Jualan produk1
// komik
// Game
class Produk{
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function sayHello(){
        return "Hello World!";
    }

    public function getLabel(){
        return "$this->penulis ,$this->penerbit";
    }
}
// Komik/buku

$produk1=new Produk("Naruto","Masashi Kisimoto","Shonen Jump",300000);


// Game
$produk2=new Produk("FIFA 2021","FIFA","FIFA PSSI",345000);
$produk3=new Produk(null,"Hello");
echo "Komik :".$produk1->getLabel();
echo "<br>";
echo "Game :".$produk2->getLabel();
echo "<br>";
echo "Game :".$produk3->getLabel();