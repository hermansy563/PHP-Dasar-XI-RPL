<?php
        //ketika button buat di klik
    if (isset($_POST['buat'])){
        //nama dari inputan
        $namaKue=$_POST['kue'];
        //membuat cookie
        setcookie('kue', $namaKue , time() + 3600);

        header("location:COOKIE.php");
    }
        //ketika button hapus di klik
    if (isset($_POST['hapus'])){
       
        //menghapus cookie
        setcookie('kue', "" , time() - 3600);

        header("location:COOKIE.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <h1>Nanti cookie muncul di bawah !</h1>
    <?php if (isset($_COOKIE['kue'])):?>
        <h4>sekarang makan kue <?=$_COOKIE['kue']?></h4>
    <?php endif?>
    

    <form method="post" action="">
        <input type="text" name="kue">
        <button type="submit" name="buat">buat</button>
        <button type="submit" name="hapus">hapus</button>
    </form>

</body>
</html>