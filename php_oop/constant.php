<?php 
// Cara pertama
// Tidak bisa dimasukan didalam class/ global const
// define('NAMA', "Waluyo Ade Prasetio");

// echo NAMA;

// Cara kedua
// bisa dimasukan ke dalam class
// const UMUR=25;
// echo UMUR;


// Magic Constant
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__
// class Coba {
//     const NAMA="Waluyo";
// }

// echo Coba::NAMA;



// function coba() {
//     return __FUNCTION__;
// }
// echo coba();

class Coba{
    public $kelas=__CLASS__;

}

$obj=new Coba();
echo $obj->kelas;