<?php 
require 'functions.php';
if(isset($_POST['register'])){
    if (register($_POST)>0) {
        echo "<script>
            alert('user baru berhasil ditambah');
        </script>";
    }else{
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label{
            display:block
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <ul>
        <form action="" method="post" enctype="multipart/form-data">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" required id="username">
            </li>        
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" required id="password">
            </li>      
            <li>
                <label for="password2">Confirmation Password :</label>
                <input type="password" name="password2" required id="password2">
            </li> 
            <br>

            <button type="register" name="register">Register</button>  
        </form>
    </ul>
</body>
</html>