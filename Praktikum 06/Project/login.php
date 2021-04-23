<form method="POST" action="login.php">
	Masukkan Nama Kamu : <input type="text" name="uname"> 
	<input type="submit" name="submit" value="mulai game">
</form>

<?php  
	
	$exp = time()+3*3600;
	if(!isset($_COOKIE['nama'])){
		if (isset($_POST['uname'])){
			setcookie("nama", $_POST['uname'], $exp);
			setcookie("bilrand", null, '/');
			header("Location: berapa.php");
		}
	} 

	if(isset($_COOKIE['nama'])){
		header("Location: berapa.php");
	}


?>