<?php 
// Jualan produk1
// komik
// Game
// Inheritance
// -Mencuptakan hierarki antar class (Parent&Child)
// -Child Class, mewarisi sequa property dan method Dari parent nya(yang visible/public)
// -Child class, memperluas (extends) fungsionalitas Dari parentnya
class Produk{
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $type;

    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0, $jmlHalaman , $waktuMain, $type)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->type = $type;
    }

    public function sayHello(){
        return "Hello World!";
    }

    public function getLabel(){
        return "$this->penulis ,$this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str="{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - ";
        if ($this->type =="komik") {
            $str.="{$this->jmlHalaman} Halaman";
        }else{
            $str.="{$this->waktuMain} Jam";
        }

        return $str;
    }
}

class CetakInfoProduk{
    // Agar hanya menerima class produk maka tambahkan classnya Produk
    public function cetak(Produk $produk){
        return $str="{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    }
}
// Komik/buku

$produk1=new Produk("Naruto","Masashi Kisimoto","Shonen Jump",300000,100,0,"komik");
// Game
$produk2=new Produk("FIFA 2021","FIFA","FIFA PSSI",345000,0,50,"game");

echo "<br>";
// Komik : Masashi Kisimoto, Shonen Jump
// Game : FIFA 2021, FIFA
// Naruto | Masashi Kisimoto, Shonen Jump (Rp.300000)

// Komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp.300000) - 100 Halaman
// GAme : FIFA | FIFA 2021, FIFA PSSI (Rp.320000) - 50 Jam

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();