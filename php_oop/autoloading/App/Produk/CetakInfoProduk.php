<?php 
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