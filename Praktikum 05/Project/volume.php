<?php 

// V = 3.14 r^2 t
	$name = $_GET['n'];
	$volume = 3.14 * (($_GET['d'] / 2)**2) * $_GET['t'];

	echo "<h2>Volume Tabung $name = $volume</h2>";

 ?>