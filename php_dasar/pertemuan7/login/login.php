<?php 

// Apakah tombol submit sudah ditekan
    if (isset($_POST['submit'])) {
        // cek username & password
        if ($_POST['username']=="admin" && $_POST['password']=="123") {   
            // Jika benar ,redirect ke halaman login
            header('Location: admin.php');
        }else{   
            // Jika salah ,Tampilkan pesan kesalahan
            $error=true;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if (isset($error)):?>
        <p style="color:red;  font-style: italic;">Username / password salah</p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Username">
            </li>    
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="password">
            </li>   
        <br>
        <button type="submit" name="submit">Kirim</button>
        </form>
    </ul>
</body>
</html>