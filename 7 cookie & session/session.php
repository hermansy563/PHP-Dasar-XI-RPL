<?php
    session_start();
    
        //ketika button buat di klik
    if (isset($_POST['buat'])){
        //nama dari inputan
        $namaSession=$_POST['session'];
        //membuat cookie
        $_SESSION['isi']= $namaSession;

        header("location:session.php");
    }
    
        //ketika button hapus di klik
    if (isset($_POST['hapus'])){

        //menghapus session
        session_unset();

        header("location:session.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Nanti cookie muncul di bawah !</h1>
    <?php if (isset($_SESSION['isi'])):?>
        <h4>sekarang makan kue <?=$_SESSION['isi']?></h4>
    <?php endif?>
    

    <form method="post" action="">
        <input type="text" name="session">
        <button type="submit" name="buat">buat</button>
        <button type="submit" name="hapus">hapus</button>
    </form>

</body>
</html>