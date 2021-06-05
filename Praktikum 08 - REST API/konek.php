<?php  

	class konekDB{
		function konek(){
			// global $konek;
			$konek = new mysqli('localhost','root','','universitas') or die("Gagal Terhubung");
			if ($konek->connect_error) {
				exit();
			}
			return $konek;
		}

		function getMhs($nim=''){
			$query = "SELECT * FROM mahasiswa";
			$json = array(
				'Kode' => '200 OK',
				'Status' => 'Berhasil',
				'Data' => null
			);
			if (!empty($nim)) {
				$query .= " WHERE nim = '$nim'";
			}
			$result = $this->konek()->query($query);
			$i=0;
			while($row = $result->fetch_array()){
				$data = array(
					'Nim' => $row['nim'],
					'Nama' => $row['nama'],
					'Angkatan' => $row['angkatan'],
					'Semester' => $row['semester'],
					'IPK' => $row['ipk']
				);
				$json['Data'][$i] = $data;
				$i++;
			}
			header('Content-Type: application/json');
			echo json_encode($json);
		}

		function editMhs($cmd='', $nims=''){
			$data = json_decode(file_get_contents('php://input'), true);
			$nim = $data['nim'];
			$nama = $data['nama'];
			$angkatan = $data['angkatan'];
			$semester = $data['semester'];
			$ipk = $data['ipk'];

			switch($cmd){
				case 'POST':
					$sql = "INSERT INTO mahasiswa (nim, nama, angkatan, semester, ipk) 
					VALUES ('$nim', '$nama', '$angkatan', '$semester', '$ipk')";
					break;

				case 'PUT':
					$sql = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', angkatan = '$angkatan', semester = '$semester', ipk = '$ipk' WHERE nim = '$nims'";
					break;

				case 'DELETE':
					$sql = "DELETE FROM mahasiswa WHERE nim = '$nims'";
					break;

				default:
					break;
			}

			if($this->konek()->query($sql)){
				$json = array(
					'Kode' => "True",
					'Status' => "Berhasil Mengeksekusi"
				);
			} else {
				$json = array(
					'Kode' => "False",
					'Status' => "Gagal Mengeksekusi"
				);
			}
			header("Content-Type: application/json");
			echo json_encode($json);
		}

	}

?>