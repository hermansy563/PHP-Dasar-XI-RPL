
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
    <!-- menghubungkan CDN icon bootstrap -->
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
            <div class="row">
               <div class="col-3">
               <img src="../foto/<?= $_GET['foto'] ?>" class="rounded" height="200" class="rounded" style="width: 100%">
</div>
               <div class="col-6">
                <table>
                    <tr>
                        <td><h5>Nama</h5></td>
                        <td>:</td>
                        <td><h5><?= $_GET['nama'] ?></h5></td>
                    </tr>
                    <tr>
                        <td>Nisn</td>
                        <td>:</td>
                        <td><?= $_GET['nisn'] ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?= $_GET['kelas'] ?></td> 
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?= $_GET['alamat'] ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td><?= $_GET['gender'] ?></td>
                    </tr>
</table>
               <a href="data_siswa.php" class="btn btn-warning">kembali</a>
               </div>
               </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>