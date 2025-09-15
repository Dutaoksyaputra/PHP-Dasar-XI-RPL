<?php
    $students=[
            ['10011','Duta','XI RPL','Purwadadi','Laki-Laki','1.jpg'],
            ['10022','Humam','XI RPL','Ciheuleut','Laki-Laki','2.jpg'],
            ['10033','Sulthan','XI RPL','Pagaden','Laki-Laki','3.jpg'],
            ['10044','jais','XI RPL','Cibogo','Laki-Laki','4.jpg'],
            ['10055','Husen','XI RPL','Cijambe','Laki-Laki','5.jpg'],
            ];
            $no= 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
        <!-- Menghubungkan CDN Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
        <!-- Menghubungkan CDN Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Menghubungkan CDN Icon Bootstrap -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid bg-primary-subtle py-5">
    <div class="container">
    <div class="card">
    <div class="card-header">
    Data siswa
    </div>
    <div class="card-body">
    <table class="table">
    <thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Foto</th>
    <th scope="col">NISN</th>
    <th scope="col">Nama</th>
    <th scope="col">Kelas</th>
    <th scope="col">Alamat</th>
    <th scope="col">Gender</th>
    <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $students ):?>
    <tr>
    <th scope="row"><?= $no ?></th>
    <td><img src="foto/<?=$students['5'] ?>" class="rounded"></td>
    <td><?php echo $students['0']?></td>
    <td><?php echo $students['1']?></td>
    <td><?php echo $students['2']?></td>
    <td><?php echo $students['3']?></td>
    <td><?php echo $students['4']?></td>
    <td>
        <a href="edit.php?foto=<?=$students['5'] ?>&nisn=<?= $students['0']?>&nama=<?= 
        $students['1']?>&kelas=<?= $students['2']?>&alamat=<?= $students['3']?>&gender=<?= $students['4']?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
        <a href="detail.php?foto=<?=$students['5'] ?>&nisn=<?= $students['0']?>&nama=<?= 
        $students['1']?>&kelas=<?= $students['2']?>&alamat=<?= $students['3']?>&gender=<?= $students['4']?>" class="btn btn-primary"><i class="bi bi-list"></i></a>
    </td>
    </tr>
    <?php $no++ ?>
    <?php endforeach ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
</body>
</html>