<?php 
	
	$pelajar="Septian";

	function siswa($nama="Duta", $kelas="XI RPL"){
		global $pelajar; //mengambil variable dari luar function
		echo "Siswa kelas $kelas yang bernama $pelajar
		Selalu Rajin.";
	}

	siswa();
	
?>