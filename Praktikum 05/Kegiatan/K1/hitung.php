<?php  

	$bil1 = $_POST['bil1'];
	$bil2 = $_POST['bil2'];

	$op = $_POST['operasi'];

	if ($op = "+") {
		$hasil = $bil1 + $bil2;
	} elseif ($op = "-") {
		$hasil = $bil1 - $bil2;
	} elseif ($op = "x") {
		$hasil = $bil1 * $bil2;
	} elseif ($op = "/") {
		$hasil = $bil1 / $bil2;
	} elseif ($op = "^") {
		$hasil = $bil1 ** $bil2;
	}

	echo "<h2>$bil1 $op $bil2 = $hasil</h2>";

?>

<body>
	
	<a href="kalkulator1.html">
		<input type="submit" name="submit" value="hitung lagi">
	</a>

</body>