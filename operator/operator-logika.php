<!DOCTYPE html>
<html>
<head>
	<title>Operator logika</title>
</head>
<body>
	<?php 
	$a = true;
	$b = false;

	echo "OPERATOR LOGIKA AND";
	echo "<br>";
	echo "A && B : " .var_dump($b && $a);
	echo "<br>";
	echo "B && B : " .var_dump($a && $a);
	echo "<br>";
	echo "A && A : " .var_dump($b && $b);
	echo "<br>";
	echo "B && A : " .var_dump($a && $b);
	echo "<br>";

	echo "OPERATOR LOGIKA OR";
	echo "<br>";
	echo "A || B : " .var_dump($b || $a);
	echo "<br>";
	echo "B || B : " .var_dump($a || $a);
	echo "<br>";
	echo "A || A : " .var_dump($b || $b);
	echo "<br>";
	echo "B || A : " .var_dump($a || $b);
	echo "<br>";

	echo "NEGASI A";var_dump(!$a);
	echo "<br>";
	echo "NEGASI B";var_dump(!$b);

	 ?>

</body>
</html>