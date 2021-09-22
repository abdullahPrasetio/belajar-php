<?php 
// Array
// Membuat array
    // $hari=array("Senin","Selasa","Rabu");
    // $bulan=["Januari","Februari","Maret"];
    // $arr=[100,"text",true];

    // // Menampilkan array
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // // Menampilkan satu element pada array
    // echo "<br>";
    // echo $arr[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
    <style>
        .kotak{
            width:30px;
            height:30px;
            background-color: #BADA55;
            text-align:center;
            line-height: 30px;
            margin: 3px;
            float:left;    
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php 
        // array 1 dimensi
        // $angka=[1,2,3,4,5,6,7,8,9];
        // array multidimensi
        $angka=[
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
    ?>
    <!-- array 1 dimensi -->
    <!-- <?php foreach($angka as $a):?>
        <div class="kotak"><?= $a?></div>
    <?php endforeach; ?> -->
    <!-- array multidimensi -->
    <!-- <?php echo $angka[2][2]?> -->
    <?php foreach($angka as $a):?>
        <?php foreach($a as $aa) :?>
            <div class="kotak"><?= $aa?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>