<?php
session_start();
require 'functions.php';
// Cek cookies
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id=$_COOKIE['id'];
    $key=$_COOKIE['key'];
    $result=mysqli_query($conn,"SELECT username FROM users WHERE id=$id");
    $row=mysqli_fetch_assoc($result);

    // cek cookie dengan usernames
    if ($key===hash('sha256',$row['username']))  {
        $_SESSION['login']=true;
    }
}
if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit();
}
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

                // Cek remember meta
                if (isset($_POST['remember'])) {
                    // BUat Cookies
                    setcookie('id',$row['id'],time()+3600);
                    setcookie('key',hash('sha256',$row['username']),time()+3600);
                    // setcookie('login','true', time()+60);
                }
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
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </li>
            <br>
            <button type="submit" name="login">Login</button> 
        </form>
    </ul>
</body>
</html>