<?php  

	if(isset($_POST['submit'])){
		setcookie("username",$_POST['uname'], time()+3*30*24*3600,"/");
		setcookie("visits", 0, time()+3*30*24*3600,"/");
		setcookie("lastvisit", date("d-m-Y H:i:s"), time()+3*30*24*3600,"/");
		header("Location: myapp.php");
	}

	if(isset($_COOKIE['username'])){
		echo "<p>Hallo Selamat Datang ".$_COOKIE["username"]."</p>";
		echo "<p>Ini kunjungan Anda yang ke-".($_COOKIE['visits']++)."</p>";
		echo "<p>Kunjungan anda sebelumnya adalah pada tanggal".$_COOKIE['lastvisit']."</p>";

		setcookie("username",$_COOKIE["username"], time()+3*30*24*3600,"/");
		setcookie("visits", $_COOKIE["visits"], time()+3*30*24*3600,"/");
		setcookie("lastvisit", date("d-m-Y H:i:s"), time()+3*30*24*3600,"/");
	} else {

		?>

		<h1>Welcome To MyApp</h1>
		<p>Ini kunjungan Anda Pertama Kali</p>
		<p>Silahkan Input Informasi Anda </p>
		<form method="POST" action="myapp.php">
			Nama Kamu <input type="text" name="uname"> <br> 
			<input type="submit" name="submit" value="submit">
		</form>

	<?php
	}

?>