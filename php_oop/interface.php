<?php 
// Interface
// Interface tidak boleh ada property dan hanya berisi method dan
// method tidak boleh ada isi / hanya deklarasi method saja
interface InfoProduk{
    public function getInfoProduk();
}


// Jualan produk1
// komik
// Game
abstract class Produk{
    protected $judul,
            $penulis,
            $penerbit,
            $diskon=0,
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

    abstract public function getInfo();
    // Getter setter
    public function getDiskon()
    {
        return $this->diskon;
    }
    public function setDiskon($diskon){
        return $this->diskon=$diskon;
    }

    public function getHarga(){
        return $this->harga-($this->harga * $this->diskon/100);
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
}
// Perluas kelas produk
class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;

    // Override construct
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0, $jmlHalaman=0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    // Syarat Abstrack class / karena meng extends abstrac class yang 
    // memiliki function abstract maka harus ada fungsi yang ditulis di abstrac
    public function getInfo()
    {
        $str="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
    // Override menggunakan parrent
    public function getInfoProduk(){
        $str="Komik :  ".$this->getInfo(). " - {$this->jmlHalaman} Halaman";

        return $str;
    } 
}

class Game extends Produk implements InfoProduk{
    public $waktuMain;

    // Override construct
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga, $waktuMain=0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain = $waktuMain;
    }
    // Syarat Abstrack class / karena meng extends abstrac class yang 
    // memiliki function abstract maka harus ada fungsi yang ditulis di abstrac
    public function getInfo()
    {
        $str="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
    // Override menggunakan parrent
    public function getInfoProduk(){
        $str="Game : ".$this->getInfo(). " - {$this->waktuMain} Jam";

        return $str;
    }
}

class CetakInfoProduk{
    public $daftarProduk=[];

    // Agar hanya menerima class produk maka tambahkan classnya Produk
    public function cetak(){
        $str= "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $key => $produk) {
            $str.="- {$produk->getInfoProduk()} <br>";
        }
        return $str;
    }

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }
}
// Komik/buku

$produk1=new Komik("Naruto","Masashi Kisimoto","Shonen Jump",300000,100);
// Game
$produk2=new Game("FIFA 2021","FIFA","FIFA PSSI",100000,50);

echo "<br>";

$cetakProduk=new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

// $produk=new Produk();
