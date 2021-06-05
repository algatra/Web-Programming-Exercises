<?php  

	function dbconnect($dbname){
		$conn = new mysqli("localhost", "root", "", "$dbname");

		if ($conn->connect_error) {
			die("Koneksi Gagal : ". $conn->connect_error);
		} 
		return $conn;
	}

	function execute($cmd, $dbname){
		$conn = dbconnect($dbname);
		if (isset($_POST['GO'])) {
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$notelp = $_POST['notelp'];
			$gender = $_POST['gender'];
			$alamat = $_POST['alamat'];
			$t4lhr = $_POST['t4lhr'];
			$tgllhr = $_POST['tgllhr'];

			if ($cmd == 'create') {
				$sql = "INSERT INTO core(nama, email, telpon, alamat, gender, tempat_lhr, tgl_lhr) 
						VALUES('$nama', '$email', '$notelp', '$alamat', '$gender', '$t4lhr', '$tgllhr')";
			} else if ($cmd == 'edit') {
				$id = $read['id_karyawan'];
				$sql = "UPDATE core SET nama='$nama', email='$email', telpon='$notelp', alamat='$alamat', gender='$gender', tempat_lhr='$t4lhr', tgl_lhr='$tgllhr' WHERE id_karyawan='$id'";
			}
			
			$conn->query($sql);
			$conn->close();
			// $_POST['GO'] = null;
			unset($_POST['GO']);
			header("Location:index.php");
		}

	}

	function read($dbname){
		$konek = dbconnect($dbname);
		$result = $konek->query("SELECT * FROM core ORDER BY nama");
		return $result;
	}

	function delete($dbname, $id){
		$conn = dbconnect($dbname);
		$sql = "DELETE FROM core WHERE id_karyawan=$id";

		$conn->query($sql);
		$conn->close();
		header("Location:index.php");

	}

?>