<?php 
// Jualan produk1
// komik
// Game
class Produk{
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;

    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0, $jmlHalaman , $waktuMain)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function sayHello(){
        return "Hello World!";
    }

    public function getLabel(){
        return "$this->penulis ,$this->penerbit";
    }

    public function getInfoProduk()
    {
        $str="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        return $str;
    }
}
// Perluas kelas produk
class Komik extends Produk{
    public function getInfoProduk(){
        $str="Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";

        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str="Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam";

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

$produk1=new Komik("Naruto","Masashi Kisimoto","Shonen Jump",300000,100,0);
// Game
$produk2=new Game("FIFA 2021","FIFA","FIFA PSSI",345000,0,50);

echo "<br>";
// Komik : Masashi Kisimoto, Shonen Jump
// Game : FIFA 2021, FIFA
// Naruto | Masashi Kisimoto, Shonen Jump (Rp.300000)

// Komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp.300000) - 100 Halaman
// GAme : FIFA | FIFA 2021, FIFA PSSI (Rp.320000) - 50 Jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();