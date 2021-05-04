<?php  
	session_start();

	if(isset($_GET['f'])){
		if (($_GET['f'] == 'reset') or ($_GET['f'] == 'del')) {
			delete();
		}
	}

	function login(){
		if (isset($_POST['GO'])) {
			setcookie("nama", $_POST['nama'], time()+3*3600);
			insertData("epiz_28535987_dtgame", "username", $_POST['nama']);
			// header("Location: index.php");
		}
	}

	function delete(){
		if(isset($_GET['f'])){
			if ($_GET['f'] == 'del') {
				setcookie("nama", null, -1);
				setcookie("email", null, -1);
			}
		}
		unset($_SESSION['hp']);
		unset($_SESSION['point']);
		unset($_SESSION['hasil']);
		unset($_SESSION['bil1']);
		unset($_SESSION['bil2']);
		unset($_SESSION['tebak']);
		unset($_SESSION['stats']);
		header("Location: index.php");
	}



	function checker(){
		if (!isset($_COOKIE['nama'])) {
			header("Location:login.php");
		}
	}

	function generand(){
		if (!isset($_SESSION['hp']) && !isset($_SESSION['point'])) {
			$_SESSION['hp'] = 5;
			$_SESSION['point'] = 0;
		}
		$_SESSION['bil1'] = random_int(0, 20);
		$_SESSION['bil2'] = random_int(0, 20);

		if ($_SESSION['hp'] > 0) {
			$_SESSION['stats'] = 3;
		}

	}

	function dbconnect($dbname){
		$conn = new mysqli("sql211.epizy.com", "epiz_28535987", "GgMtVroJ5wNF8Xj", "$dbname");

		if ($conn->connect_error) {
			die("Koneksi Gagal : ". $conn->connect_error);
		} 
		return $conn;
	}

	function insertData($dbname, $kolom, $data){
		$conn = dbconnect($dbname);
		$cmd = "INSERT INTO halloffame($kolom)
				VALUES ('$data')";
		$conn->query($cmd);
		header("Location: index.php");
		$conn->close();
	}

	function updateData($dbname, $where, $data){
		$conn = dbconnect($dbname);
		$cmd = "UPDATE halloffame
				SET score='$data'
				WHERE username='$where'";
		if ($conn->query($cmd) === True) {
			echo "Sukses Insert Data";
		} else {
			echo "Error : ".$conn->error;
		}
		$conn->close();
	}

	function benar(){
		$_SESSION['point'] += 10;
		$_SESSION['stats'] = 1;
	}

	function salah(){
		$_SESSION['point'] -= 2;
		$_SESSION['hp'] -=1;
		$_SESSION['stats'] = 0;
	}

?>