<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operator logika</title>
</head>
<body>
    <?php
    $n = true;
    $i = false;

    echo "=== operator logika and ===";
    echo "<br>";
    echo "A && B :";  var_dump($n && $i);
    echo "<br>";
    echo "B && B :"; var_dump($i && $i);
    echo "<br>";
    echo "A && A :"; var_dump($n && $n);
    echo "<br>";
    echo "B && A :"; var_dump($i && $n);
    echo "<br>";
    echo "<br>";

    echo "=== operator logika or ===";
    echo "<br>";
    echo "A || B :"; var_dump($n || $i);
    echo "<br>";
    echo "B || B :"; var_dump($i || $i);
    echo "<br>";
    echo "A || A :"; var_dump($n || $n);
    echo "<br>";
    echo "B || A :"; var_dump($i || $n);
    echo "<br>";
    echo "<br>";

    echo "=== operator logika negasi ===";
    echo "<br>";
    echo "negasi A:";  var_dump(!$n);
    echo "<br>";
    echo "negasi B :";  var_dump(!$i);
    ?>
</body>
</html>