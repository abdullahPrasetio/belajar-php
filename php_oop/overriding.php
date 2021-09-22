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

    public function getInfoProduk()
    {
        $str="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}
// Perluas kelas produk
class Komik extends Produk{
    public $jmlHalaman;

    // Override construct
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0, $jmlHalaman=0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    // Override menggunakan parrent
    public function getInfoProduk(){
        $str="Komik :  ".parent::getInfoProduk(). " - {$this->jmlHalaman} Halaman";

        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    // Override construct
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga, $waktuMain=0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain = $waktuMain;
    }
    // Override menggunakan parrent
    public function getInfoProduk(){
        $str="Game : ".parent::getInfoProduk(). " - {$this->waktuMain} Jam";

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

$produk1=new Komik("Naruto","Masashi Kisimoto","Shonen Jump",300000,100);
// Game
$produk2=new Game("FIFA 2021","FIFA","FIFA PSSI",345000,50);

echo "<br>";
// Komik : Masashi Kisimoto, Shonen Jump
// Game : FIFA 2021, FIFA
// Naruto | Masashi Kisimoto, Shonen Jump (Rp.300000)

// Komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp.300000) - 100 Halaman
// GAme : FIFA | FIFA 2021, FIFA PSSI (Rp.320000) - 50 Jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();