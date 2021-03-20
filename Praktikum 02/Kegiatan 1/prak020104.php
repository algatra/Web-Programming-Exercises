<!DOCTYPE html>
<html>
<head>
	<title> Looping PHP </title>
</head>
<body>

	<?php  
		$i = 1;
		while($i<=6){
			$style = '';
			if ($i%2==0) {
				$style = 'style="color : red;"';
			}
			echo "<h$i $style>Heading $i</h$i>";
			$i++;
		}
	?>

</body>
</html>