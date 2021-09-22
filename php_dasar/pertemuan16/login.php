<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit();
}
require 'functions.php';
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result=mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");

        // Cek Username
        if (mysqli_num_rows($result)) {
            // Cek Password
            $row=mysqli_fetch_assoc($result);
            if(password_verify($password,$row['password'])){
                // Set Session
                $_SESSION['login']=true;
                header("Location: index.php");
                exit();
            }
        
        }

        $error=true;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <?php if (isset($error)):?>
        <p style="color:red;  font-style: italic;">Username / password salah</p>
    <?php endif; ?>
    <ul>
        <form action="" method="POST">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" required id="username">
            </li>        
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" required id="password">
            </li>   
            <br>
            <button type="submit" name="login">Login</button> 
        </form>
    </ul>
</body>
</html>