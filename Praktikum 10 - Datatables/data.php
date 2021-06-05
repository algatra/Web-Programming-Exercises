<?php 

	$detailb = array(
		'host' => 'localhost',
		'user' => 'root',
		'pass' => '',
		'db' => 'p13',
	);

	$col = array(
		array('db' => 'id_tma', 'dt' => 0),
		// array('db' => 'id_pos', 'dt' => 1),
		array('db' => 'nilai', 'dt' => 1),
		array('db' => 'waktu', 'dt' => 2)
	);

	require 'ssp.class.php';
	$raw_data = json_encode(SSP::simple($_GET, $detailb, 'tma', 'id_tma', $col));
	echo $raw_data;
	// $dataset = json_decode($raw_data, true)['data'];
	// // var_dump($dataset);
	// foreach ($dataset as $fixed) {
	// 	echo "<tr>
	// 			<td> $fixed[0]</td>
	// 			<td> $fixed[2]</td>
	// 			<td> $fixed[3]</td>
	// 			<td>
	// 				<button class='btn btn-info'>Edit</button>
	// 				<button class='btn btn-danger'>Hapus</button>
	// 			</td>
	// 		</tr>";
	// }

 ?>