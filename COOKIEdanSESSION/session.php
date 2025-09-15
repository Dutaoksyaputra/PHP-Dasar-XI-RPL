<?php

	session_start();
	// Ketika button buat di klik
	if (isset($_POST['buat'])) {
		// Nama dari inputan
		$namaSession=$_POST['session'];
		// Membuat Cookie
		$_SESSION['isi']= $namaSession;

		header("Location:session.php");
	}

	// Ketika button hapus di klik
	if (isset($_POST['hapus'])) {

		// Menghapus session
		session_unset();

		header("Location:session.php");
	}
?>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
	<h1>Nanti Session muncul di bawah !</h1>
	<?php if (isset($_SESSION['isi'])): ?>
		<h4>Sekarang makan kue <?= $_SESSION['isi']?></h4>
	<?php endif ?>
	<form method="post"action="">
		<input type="text" name="session">
		<button type="submit" name="buat">Buat</button>
		<button type="submit" name="hapus">Hapus</button>
	</form>
</body>
</html>