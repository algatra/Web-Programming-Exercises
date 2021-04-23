<?php  

	if (!isset($_COOKIE['nama'])) {
		echo "<script>alert('Hayooo, login dulu dong');";
		header("Location: login.php");
	}

	if ($_COOKIE['bilrand'] == null) {
		setcookie("bilrand", rand(0,100), time()+7*24*3600, '/');
		header("Location: berapa.php");
	} 

	echo "<p>Hallo ".$_COOKIE['nama'].", Nama saya Mr Math. Saya telah memilih sebuah bilangan integer 0-100. Silahkan ditebak yaa ^_^</p>";
	var_dump($_COOKIE['bilrand']);

?>
	<form method="POST" action="berapa.php">
		Masukkan Angka : <input type="text" name="bilask">
		<input type="submit" name="submit">
	</form>

<?php

	if (isset($_POST['bilask']) && is_numeric($_POST['bilask']) == True) {
		if ($_POST['bilask'] < ((int)$_COOKIE['bilrand'])) {
			echo "<p style='color:red;'>Wahh Bilangan Kamu Terlalu Kecill, tebak lagi !!</p>";
		} else if ($_POST['bilask'] > ((int)$_COOKIE['bilrand'])) {
			echo "<p style='color:red;'>Waduuhh, terlalu besarr. Coba tebak lagi !!</p>";
		} else if ($_POST['bilask'] == ((int)$_COOKIE['bilrand'])) {
			echo "<h2 style='color:green';>Selamat! Tebakan Kamu Benarr, Angka Itu Adalah ".$_COOKIE['bilrand']."</h2>";
			setcookie("bilrand", null, time()+2, '/');
			unset($_POST['bilask']);
			echo '<p><a style="text-decoration: none;" href="berapa.php">Mulai Lagi</a></p>';
			echo '<p><a style="text-decoration: none;" href="exit.php">Exit</a></p>';
		}
		unset($_POST['bilask']);
		
	} else if (isset($_POST['bilask']) && is_numeric($_POST['bilask']) == False){
		echo "<p>Hanya Masukkan Angka</p>";
	}

?>

<p style="text-decoration: none;"></p>
