<?php 

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