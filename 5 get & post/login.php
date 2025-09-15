 <?php
    // inputan
    $u="admin";
    $p="123";

    // proses
    $iu= $_GET['username'];
    $ip= $_GET['password'];

    // decision / percabangan
    if($iu == $u && $ip == $p){
        // output 1
        header("location:dashboard.php");
    }else{
        // output 2
        echo "username dan password salah!";
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
    </head>
    <body>
        <form action="" method="get">
            <input type="text" name="username" id="username"><br>
            <input type="passwowrd" name="password" id="password"><br>
            <input type="submit" value="login">
        </form>
    </body>
    </html>