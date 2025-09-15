<?php
     session_start();

     if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    header("location:dashboard.php");
}

if (isset($_POST['login'])) {
    $username=$_POST['username'];
     $password=$_POST['password'];

     if ($username=="herman" && $password=="123") {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
    

        header("Location:dashboard.php");
     }else{
    $pesan="
     <div class='alert alert-danger mt-4' role='alert'>
                username dan password salah!</div>
                ";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container-fluid bg-primary-subtle d-flex align-items-center justify-content-center" style="height:100vh">
        <div class="card py-5 px-4 text-center" style="border-radius:15px">
            <H3>Login session</H3>
            <?php
              if (isset($pesan)) {
                echo $pesan;
              }
            ?>
           
            <form method="post" action="">
                <input type="text" placeholder="input username" name="username" class="form-control my-3">
                <input type="password" placeholder="input password" name="password" class="form-control my-3">
                <button type="submit" name="login" class="btn btn-primary">login</button>
            </form>
        </div>

    </div>
</body>
</html>