<?php  
	include 'func.php';
	include 'header.php';
	checker();
	$hasil = $_SESSION['bil1'] + $_SESSION['bil2'];

	echo '<title>Game Start</title>
			<section class="u-align-center u-clearfix u-white u-section-1" id="carousel_1a45">
				<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">';
	
	switch ($_SESSION['stats']) {
		case 1:
			echo "<h2>Selamat ".$_COOKIE['nama'].", Jawaban Kamu Benar !</h2>";
			break;
		case 0:
			echo "<h2>Wahh, Sayang Sekali Jawaban Kamu Salah ".$_COOKIE['nama'].", Goodluck Buat Soal Berikutnya !<h2>";
			break;
		case 2:
			echo "<h2>GAME OVER</h2>";
			echo "<h3>Wahh, Sayang Sekali ".$_COOKIE['nama']." Kesempatan Kamu Sudah Habis :'(.<br>Skor Akhir Kamu Adalah ".$_SESSION['point']." <br>Jika Kamu Ingin Memainkan Game Ini Lagi, Silahkan Klik <a style='color: crimson;'  href='func.php?f=reset'>Reset</a></h3>";
			echo '<h3>Atau Kamu Bisa Melihat Peringkatmu Di <a style="color: crimson;" href="halloffame.php">Hall Of Fame</a></h3>';
			break;
		default:
			echo "<h2>Hello ".$_COOKIE['nama'].", Goodluck Have Fun ^_^</h2>";
			break;
	}

	if ($_SESSION['hp'] == 0) {
		$_SESSION['stats'] = 2;
		$_SESSION['hp'] = -1;
		updateData("epiz_28535987_dtgame", $_COOKIE['nama'], $_SESSION['point']);
		header("Location:gamestart.php");

	} else if ($_SESSION['hp'] > 0){
		echo "<h3>Lives : ".$_SESSION['hp']." | Score : ".$_SESSION['point']."</h3>";
	}

	if (isset($_POST['submit'])) {
		$_SESSION['tebak'] = $_POST['tebak'];
		if ($_SESSION['tebak'] == $hasil) {
			benar();
			echo "<p>Benar</p>";
		} else {
			salah();
			echo "<p>Salah</p>";
		}
		$_SESSION['tebak'] = -1;
		header("Location:gamestart.php");
	} 

	if (isset($_GET['acak'])) {
		if ($_GET['acak'] == 1) {
			generand();
			$_SESSION['tebak'] = null;
			header("Location:gamestart.php");
		}
	}

	if (!isset($_SESSION['tebak'])) {
		?>
		<form method="POST" action="gamestart.php">
			Hasil Dari <?php echo $_SESSION['bil1']." + ".$_SESSION['bil2']." = "; ?> 
			<input type="text" name="tebak" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top"> 
			<input type="submit" name="submit" value="submit" class="u-black u-border-0 u-btn u-btn-submit u-button-style u-btn-1">
		</form>
		<?php
	} else if ($_SESSION['hp'] > 0){
		echo '<center><a class="u-black u-border-0 u-btn u-btn-submit u-button-style u-btn-1" href="gamestart.php?acak=1">Soal Berikutnya</a></center>';
	}
	echo "</div>
		</section>";
	include 'footer.php';
?>
