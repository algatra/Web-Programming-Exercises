<!DOCTYPE html>
<html>
<head>
	<title> Looping PHP </title>
</head>
<body>

	<?php  
		$i = 1;
		do{
			$style = '';
			if ($i%2==0) {
				$style = 'style="color : red;"';
			}
			echo "<h$i $style>Heading $i</h$i>";
			$i++;
		} while($i<=6);
	?>

</body>
</html>