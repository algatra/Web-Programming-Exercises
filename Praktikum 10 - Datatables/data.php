<?php 

	$detailb = array(
		'host' => 'localhost',
		'user' => 'root',
		'pass' => '',
		'db' => 'p13',
	);

	$col = array(
		array('db' => 'id_tma', 'dt' => 0),
		array('db' => 'nilai', 'dt' => 1),
		array('db' => 'waktu', 'dt' => 2)
	);

	require 'ssp.class.php';
	$raw_data = json_encode(SSP::simple($_GET, $detailb, 'tma', 'id_tma', $col));
	echo $raw_data;

 ?>
