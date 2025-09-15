<?php
    $students=[
        ['083311','Riyan','XI RPL','Cijambe','Laki-laki','1.jpg'],
        ['083393','Herman','XI RPL','Cijambe','Laki-laki','2.jpg'],
        ['083379','Fajar','XI RPL','Cijambe','Laki-laki','3.jpg'],
        ['083354','Najril','XI RPL','Cijambe','Laki-laki','4.jpg']
      ];

      //cara menampilakan arrray multidimensi
      //var_dump($siswa[0][1]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>araay multidimensi</title>
</head>
<body>
    <?php foreach ($students as $student):?>
        <ul>
            <li><img src="../foto/<?php echo $student['5']?>"></li>
            <li><?php echo $student['0']?></li>
            <li><?php echo $student['1']?></li>
            <li><?php echo $student['2']?></li>
            <li><?php echo $student['3']?></li>
        </ul>
    <?php endforeach?>
</body>
</html>