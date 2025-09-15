<!DOCTYPE html>
<html>
<head>
    <title>Tugas Nilai 3</title>
</head>
<body>

<?php
$na =85;4

if ($na > 100 || $na < 0) {
    echo "Keterangan : nilai tidak valid<br>";
    echo "Predikat : Nilai tidak valid<br>";
    echo "Nilai akhir : $na";
} else if ($na >= 90) {
    echo "Keterangan : Lulus<br>";
    echo "Predikat : A<br>";
    echo "Nilai akhir : $na";
} else if ($na >= 80) {
    echo "Keterangan : Lulus<br>";
    echo "Predikat : B<br>";
    echo "Nilai akhir : $na";
} else if ($na >= 70) {
    echo "Keterangan : Lulus<br>";
    echo "Predikat : C<br>";
    echo "Nilai akhir : $na";
} else if ($na >= 60) {
    echo "Keterangan : Tidak Lulus<br>";
    echo "Predikat : D<br>";
    echo "Nilai akhir : $na";
} else {
    echo "Keterangan : Tidak Lulus<br>";
    echo "Predikat : E<br>";
    echo "Nilai akhir : $na";
}
?>

</body>
</html>
