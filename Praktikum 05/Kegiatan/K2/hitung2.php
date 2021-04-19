<?php  

	$bil1 = $_POST['bil1'];
	$bil2 = $_POST['bil2'];

	// $op = $_POST['operasi'];

	if (isset($_POST['jml']) ) {
		$hasil = $bil1 + $bil2;
		$op = $_POST['jml'];
	} elseif (isset($_POST['krg'])) {
		$hasil = $bil1 - $bil2;
		$op = $_POST['krg'];
	} elseif (isset($_POST['kali'])) {
		$hasil = $bil1 * $bil2;
		$op = $_POST['kali'];
	} elseif (isset($_POST['bagi'])) {
		$hasil = $bil1 / $bil2;
		$op = $_POST['bagi'];
	} elseif (isset($_POST['kdrt'])) {
		$hasil = $bil1 ** $bil2;
		$op = $_POST['kdrt'];
	}

	echo "<h2>$bil1 $op $bil2 = $hasil</h2>";

?>

<body>
	
	<a href="kalkulator2.html">
		<input type="submit" name="submit" value="hitung lagi">
	</a>

</body>