<?php $students=[
        ['083311','Riyan','XI RPL','Cijambe','Laki-laki','1.jpg'],
        ['083393','Herman','XI RPL','Cijambe','Laki-laki','2.jpg'],
        ['083379','Fajar','XI RPL','Cijambe','Laki-laki','3.jpg'],
        ['083354','Najril','XI RPL','Cijambe','Laki-laki','4.jpg']
      ];
      $no=1;
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data siswa</title>
    <!-- menghubungkan CDN Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <!-- menghubungkan CDN Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <!-- menghubungkan icon bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid bg-primary-subtle py-5">
        <div class="container">
        <!-- card -->
        <div class="card">
            <div class="card-header">
                data siswa
            </div>
            <div class="card-body">
                <table class="table">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">foto</th>
      <th scope="col">nisn</th>
      <th scope="col">nama</th>
      <th scope="col">gender</th>
      <th scope="col">kelas</th>
      <th scope="col">alamat</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($students as $student):?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><img src="../foto/<?=$student['5'] ?>" class="rounded"></td>
      <td><?php echo $student['0']?></td>
      <td><?php echo $student['1']?></td>
      <td><?php echo $student['4']?></td>
      <td><?php echo $student['2']?></td>
      <td><?php echo $student['3']?></td>
      <td>
        <a href="edit.php?foto=<?= $student['5'] ?>
        &nisn=<?= $student['0'] ?>
        &nama=<?= $student['1'] ?>
        &gender=<?= $student['4'] ?>
        &kelas=<?= $student['2'] ?>
        &alamat=<?= $student['3'] ?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
        <a href="detail_siswa.php?foto=<?= $student['5'] ?>
        &nisn=<?= $student['0'] ?>
        &nama=<?= $student['1'] ?>
        &gender=<?= $student['4'] ?>
        &kelas=<?= $student['2'] ?>
        &alamat=<?= $student['3'] ?>" class="btn btn-primary"><i class="bi bi-list"></i></a>
      </td>
    </tr>
    <?php $no++?>
    <?php endforeach ?>
  </tbody>
</table>
                    </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>