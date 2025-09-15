<?php 

	function tambah(int $a, int $b): int{
		return $a + $b;
	}
	function kurang(int $a, int $b): int{
		return $a - $b;
	}
	function kali(int $a, int $b): int{
		return $a * $b;
	}
	function bagi(int $a, int $b): int{
		return $a / $b;
	};

	echo "Hasil Tambah : ".tambah(3, 5);
	echo "<br>Hasil Kurang : ".kurang(3, 5);
	echo "<br>Hasil Kali : ".kali(3, 5);
	echo "<br>Hasil Bagi : ".bagi(3, 5);

?>