<?php  

	$filename = trim($_POST['nama']);
	$filename = "file/$filename.txt";
	$content = trim($_POST['isi']);
	$file = fopen($filename,'w');
	fwrite($file,$content);
	fclose($file);
	header("Location: index.php?notif=true&file=$filename");

?>