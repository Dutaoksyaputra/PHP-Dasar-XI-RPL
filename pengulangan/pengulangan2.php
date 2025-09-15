<!DOCTYPE html>
<html>
<head>
	<title>pengulangan 2</title>
</head>
<body>
	<h1>pengulangan</h1>
	<h2>for</h2>

	<?php
 	for($i = 1; $i <= 5; $i++) {
 		echo "Hello World <br>";
 	}
    ?>

    <h2>While</h2>
    <?php
    $i = 1;
    while ($i <= 5) {
    	echo "Hello World <br>";
    	$i++;
    }
    ?>

    <h2>Do While</h2>
    <?php
    $i = 1;
    do{
    	echo "Hello World <br>";
    	$i++;
    } while ($i <= 5);
    ?>
                        
</body>
</html>