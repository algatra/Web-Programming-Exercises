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

		$al = fopen("datatabung.dat", "r") or die("Tidak bisa buka file!");
		while(!feof($al)) {
			echo "<tr>";
		  	$databung = fgets($al);
		  	$databung = explode(",",$databung);
		  	for ($i=0; $i < sizeof($databung); $i++) { 
		  		echo "<td> $databung[$i] </td>";
		  	}
	  		echo "<td><a href='volume.php?n=$databung[0]&d=$databung[1]&t=$databung[2]'>view</a></td>";
		  	echo "</tr>";
	  	}
	  	fclose($al);

	 ?>

	 <td><a href=''></a></td>

	</table>


</body>
</html>
