<!DOCTYPE html>
<html>
<head>
	<title> Looping PHP </title>
</head>
<body>

	<?php  
		for($i=1; $i <= 6; $i++){
			$style = '';
			if ($i%2==0) {
				$style = 'style="color : red;"';
			}
			echo "<h$i $style>Heading $i</h$i>";
		}
	?>

</body>
</html>