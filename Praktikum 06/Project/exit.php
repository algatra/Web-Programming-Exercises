<?php  

if(isset($_COOKIE['nama'])){
	setcookie("nama");
	header("Location: login.php");
}

?>