<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengulangan 2</title>
</head>
<body>
    
    <h1>pengulangan</h1>
    <h2>for</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Hello word <br>";
    }
    ?>

    <h2>while</h2>
    <?php
    $i = 1;
    while ($i <= 5) {
        echo "Hello word <br>";
        $i++;
    }
    ?>

    <h2>do while</h2>
    <?php
    $i = 1;
    do {
        echo "Hello word <br>";
        $i++;
    } while ($i <= 5);
    ?>
</body>
</html>