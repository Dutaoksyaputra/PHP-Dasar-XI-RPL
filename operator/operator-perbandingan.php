<!DOCTYPE html>
<html>
<head>
	<title>Operator perbandingan</title>
</head>
<body>
	<?php 
	$a =10;
	$b =20;
		echo "== OPERATOR PERBANDINGAN =="; 	
		echo "<br>";
		echo "Nilai A adalah $a dan Nilai B adalah $b";
		echo "<br><br>";
		echo "A == B : ";
		var_dump($a == $b);
		echo "<br>";
		echo "A != B : ";
		var_dump($a != $b);
		echo "<br>";
		echo "A > B : ";
		var_dump($a > $b);
		echo "<br>";
		echo "A < B : ";
		var_dump($a < $b);
		echo "<br>";
		echo "A >= B : ";
		var_dump($a >= $b);
		echo "<br>";
		echo "A <= B : ";
		var_dump($a <= $b);
	 ?>
</body>
</html>