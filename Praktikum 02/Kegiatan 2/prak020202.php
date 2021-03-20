<!DOCTYPE html>
<html>
<head>
	<title> Tabel PHP 2 </title>
</head>
<body>

	<?php  

		$baris = 4;
		$kolom = 5;
		echo "<table border='1'>";
		$al = 1;
		for ($i=1; $i <= $baris ; $i++) { 
			echo "<tr>";
			for ($j=1; $j <= $kolom ; $j++) { 
				echo "<td>cell ke $al</td>";
				$al++;
			}
			echo "</tr>";
		}
		echo "</table>";

	?>

</body>
</html>