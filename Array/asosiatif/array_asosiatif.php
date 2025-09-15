<?php

	$students=[
			['083321', 'jepri', 'xi rpl', 'jl. dawuan', 'laki laki', '1.jpg'],
			['032112', 'arkan', 'xi rpl', 'jl. cigadung', 'laki laki', '2.jpg'],
			['032113', 'djati', 'xi rpl', 'jl. otista', 'laki laki', '3.jpg'],
			['032114', 'zeus', 'xi rpl', 'jl. cibogo', 'laki laki', '4.jpg'],
		   ];

	//cara menampilkan array multidimensi
	//var_dump($siswa[3][1])
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array multidimensi</title>
</head>
<body>		


	<?php foreach ($students as $students ): ?>
		<ul>
			<li><img src="foto/<?php echo $students['5'] ?>"></li>
			<li><?php echo $students['0'];?></li>
			<li><?php echo $students['1'];?></li>
			<li><?php echo $students['2'];?></li>
			<li><?php echo $students['3'];?></li>
		</ul>
	<?php endforeach ?>
</body>
</html>