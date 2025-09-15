<?php
	// Ketika button buat di klik
	if (isset($_POST['buat'])) {
	// Nama dari inputan
	$namaKue=$_POST['kue'];
	// Membuat Cookie
	setcookie('kue', $namaKue , time() + 3600);

	header("Location:COOKIE.php");
	}

	// Ketika button hapus di klik
	if (isset($_POST['hapus'])) {
	
	// Menghapus Cookie
	setcookie('kue', "" , time() - 3600);

	header("Location:COOKIE.php");
	}
?>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
	<h1>Nanti Cookie muncul di bawah !</h1>
	<?php if (isset($_COOKIE['kue'])): ?>
		<h4>Sekarang makan kue <?= $_COOKIE['kue']?></h4>
	<?php endif ?>
	<form method="post"action="">
		<input type="text" name="kue">
		<button type="submit" name="buat">Buat</button>
		<button type="submit" name="hapus">Hapus</button>
	</form>
</body>
</html>