<?php  

	$nim = $_POST['nim'];
	$nama = $_POST['nim'];
	$tgllhr = $_POST['tgllhr'];
	$tmplhr = $_POST['t4lhr'];

	$myfile = fopen("datamhs.dat", "a") or die("File Tak bisa dibuka");
	fwrite($myfile, "$nim|$nama|$tgllhr|$tmplhr\n");
	fclose($myfile);

	echo "<h2> Data Berhasil Ditambahkan </h2>";


?>