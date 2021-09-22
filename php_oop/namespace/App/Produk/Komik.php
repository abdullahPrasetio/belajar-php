<?php 
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