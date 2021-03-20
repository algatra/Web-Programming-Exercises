<!DOCTYPE html>
<html>
<head>
	<title> Tabel PHP 3 </title>
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

				if($al % 2 == 1){
					$style = "bgcolor='white' style='color:red;'";
				}
				else{
					$style = "bgcolor='red' style='color:white;'";
				}

				echo "<td $style>cell ke $al</td>";
				$al++;
			}
			echo "</tr>";
		}
		echo "</table>";

	?>

</body>
</html>