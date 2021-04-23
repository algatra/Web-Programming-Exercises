<?php  
session_start();

// User
$users = array(
				array("user1","Rosihan Ari Yuana","123456"),
				array("user2","AlFarkhan Adji P","256855")
				);
	
if(isset($_POST['submit'])){
	$uname = $_POST['uname'];
	$passwd = $_POST['passwd'];

	foreach ($users as $profile) {
		if (($profile[0] == $uname) && ($profile[2] == $passwd)) {
			$_SESSION['namauser'] = $profile[1];
			header("Location: page1.php");
		}
	}
	echo "<h3>Username Tidak Terdaftar</h3>";
	echo "<p>Silahkan <a href='form.html'>Login Lagi</a> </p>";
}

?>