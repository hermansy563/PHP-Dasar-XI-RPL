<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nilai 2</title>
</head>
<body>
    <?php
    $nilai = 90;
    if($nilai >= 80){
        echo "nilai anda $nilai,anda lulus";
    }elseif($nilai >= 60){
        echo "nilai anda $nilai,anda remedial";
    }else{
        echo "nilai anda $nilai,anda tidak lulus";
    }
    ?>
</body>
</html>