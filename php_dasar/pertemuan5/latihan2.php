<?php 
// Pengulangan pada array 
// for / foreach

    $angka=[3,4,6,7,2,0,99,56,947];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak{
            width:50px;
            height:50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float :left;
        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>
    <!-- Cara 1 -->
    <?php for ($i=0; $i < count($angka); $i++): ?>
        <div class="kotak"><?= $angka[$i] ?></div>
    <?php endfor ?>
    <div class="clear"></div>
    <!-- Cara ke dua -->
    <?php foreach ($angka as $key => $value) :?>
        <div class="kotak"><?= $value ?></div>
    <?php endforeach ?>
</body>
</html>