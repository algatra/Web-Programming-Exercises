<?php  

	if ((!isset($_COOKIE['bilrand'])) or (isset($_COOKIE['bilrand']) && ($_COOKIE['bilrand'] == null)) ) {
		setcookie("bilrand", rand(0,100), time()+7*24*3600,"/");
	}

	echo "<p>Hallo, Nama saya Mr Math. Saya telah memilih sebuah bilangan integer 0-100. Silahkan ditebak yaa ^_^</p>";
	// var_dump($_COOKIE['bilrand']);

?>
	<form method="POST" action="p2.php">
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
			setcookie("bilrand", null, -1, '/');
			unset($_POST['bilask']);
			echo '<a style="text-decoration: none;" href="p2.php">Mulai Lagi</a>';
		}
		unset($_POST['bilask']);
		
	} else if (isset($_POST['bilask']) && is_numeric($_POST['bilask']) == False){
		echo "<p>Hanya Masukkan Angka</p>";
	}

?>

<p style="text-decoration: none;"></p>
