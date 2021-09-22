<?php 

// Biasa digunakan untuk helpers/utility class
class ContohStatic{
    public static $angka=1;

    public static function halo(){
        // Jika tanpa static $this->angka;
        return "Halo." . self::$angka++. " kali." ;
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();

// class Contoh {
//     public static $angka=1;

//     public function halo()
//     {
//         return "Halo ".self::$angka++ ." Kali. <br>";
//     }
// }

// $contoh=new Contoh();
// echo $contoh->halo();
// echo $contoh->halo();
// echo $contoh->halo();
// echo $contoh->halo();

// $obj=new Contoh();
// echo $obj->halo();
// echo $obj->halo();
// echo $obj->halo();
// echo $obj->halo();
