<?php $students=[
        ["nisn"=>"083311",
         "nama"=>"Riyan",
         "kelas"=>"XI RPL",
         "alamat"=>"Cijambe",
         "gender"=>"Laki-laki",
         "foto"=>"1.jpg"
        ],
        ["nisn"=>"083393",
         "nama"=>"Herman",
         "kelas"=>"XI RPL",
         "alamat"=>"Cijambe",
         "gender"=>"Laki-laki",
         "foto"=>"2.jpg"
        ],
        ["nisn"=>"083379",
         "nama"=>"Fajar",
         "kelas"=>"XI RPL",
         "alamat"=>"Cijambe",
         "gender"=>"Laki-laki",
         "foto"=>"3.jpg"
        ],
        ["nisn"=>"083354",
         "nama"=>"Najril",
         "kelas"=>"XI RPL",
         "alamat"=>"Cijambe",
         "gender"=>"Laki-laki",
         "foto"=>"4.jpg"
        ],
        ["nisn"=>"083321",
         "nama"=>"Acong",
         "kelas"=>"XI RPL",
         "alamat"=>"Cijambe",
         "gender"=>"Laki-laki",
         "foto"=>"5.jpg"
        ],
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
      <th scope="col">kelas</th>
      <th scope="col">alamat</th>
      <th scope="col">gender</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($students as $student):?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><img src="../foto/<?=$student['foto'] ?>" class="rounded"></td>
      <td><?php echo $student['nisn']?></td>
      <td><?php echo $student['nama']?></td>
      <td><?php echo $student['kelas']?></td>
      <td><?php echo $student['alamat']?></td>
      <td><?php echo $student['gender']?></td>
      <td>
        <a href="edit.php?foto=<?= $student['foto'] ?>
        &nisn=<?= $student['nisn'] ?>
        &nama=<?= $student['nama'] ?>
        &gender=<?= $student['kelas'] ?>
        &kelas=<?= $student['alamat'] ?>
        &alamat=<?= $student['gender'] ?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
        <a href="detail_siswa.php?foto=<?= $student['foto'] ?>
        &nisn=<?= $student['nisn'] ?>
        &nama=<?= $student['nama'] ?>
        &gender=<?= $student['kelas'] ?>
        &kelas=<?= $student['alamat'] ?>
        &alamat=<?= $student['gender'] ?>" class="btn btn-primary"><i class="bi bi-list"></i></a>
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