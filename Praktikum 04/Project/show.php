<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1">
		<tr>
			<td>No</td>
			<td>NIM</td>
			<td>Nama Mhs</td>
			<td>Tgl Lahir</td>
			<td>Tempat Lahir</td>
			<td>Usia (Thn)</td>
		</tr>

		<?php  

			function hitungUsia($tglLahir){
				$lahir = new DateTime($tglLahir);
				$now = new DateTime("today");
				if($lahir > $now){return "Tidak Terdefinisi";}
				$umur = $now -> diff($lahir) -> y;
				return $umur;
			}

			$file = "datamhs.dat";
			$al = fopen($file, "r") or die("Tidak bisa buka file!");
			$count = 1;
			while(!feof($al)) {
				echo "<tr>";
			  	$data = fgets($al);
			  	$data = explode("|",$data);
			  	$umur = hitungUsia($data[2]);
			  	echo "<td> $count </td>";
			  	for ($i=0; $i < sizeof($data); $i++) { 
			  		echo "<td> $data[$i] </td>";
			  	}
			  	echo "<td> $umur </td>";
			  	echo "</tr>";
			  	$count++;
			}
			fclose($al);
			echo "Jumlah Data : ".($count-1);

		?>
	</table>

</body>
</html>
