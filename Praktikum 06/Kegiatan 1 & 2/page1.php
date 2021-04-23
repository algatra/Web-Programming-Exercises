<?php  
session_start();
include('cek.php');

if (isset($_SESSION['namauser'])) {
	echo "<h1>Page 1</h1>";
	echo "<p>Selamat Datang ". $_SESSION['namauser'] ."</p>";

	echo "<h2>Menu Utama</h2>";
	echo "<p><a href='page1.php'>Page1</a> | <a href='page2.php'>Page 2</a> | <a href='page3.php'>Page 3</a> | <a href='logout.php'>Logout</a></p>";
} else {
	echo "<h1>Hayooo mau ngapain</h1>";
}

?>