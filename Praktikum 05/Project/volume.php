<?php 

	$name = $_GET['n'];
	$diameter = $_GET['d'];
	$tinggi = $_GET['t'];
	$volume = 3.14 * (($diameter / 2)**2) * $tinggi;

	echo "<h2>Volume Tabung $name dengan diameter $diameter dan tinggi $tinggi adalah $volume satuan luas</h2>";

 ?>
