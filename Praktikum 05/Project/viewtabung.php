<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1">
	<tr>
		<td>Nama Tabung</td>
		<td>Diameter</td>
		<td>Tinggi</td>
		<td>Volume</td>
	</tr>
		
	<?php 

		$myfile = fopen("datatabung.dat", "r") or die("Tidak bisa buka file!");
		while(!feof($myfile)) {
			echo "<tr>";
		  	$data = fgets($myfile);
		  	$data = explode(",",$data);
		  	for ($i=0; $i < sizeof($data); $i++) { 
		  		echo "<td> $data[$i] </td>";
		  	}
	  		echo "<td><a href='http://localhost/pemweb/p/volume.php?n=$data[0]&d=$data[1]&t=$data[2]'>view</a></td>";
		  	echo "</tr>";
	  	}
	  	fclose($myfile);

	 ?>

	 <td><a href=''></a></td>

	</table>


</body>
</html>