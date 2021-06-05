<?php  
	include_once('konek.php');
	$db = new konekDB();
	$req = $_SERVER['REQUEST_METHOD'];
	$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$uri_segment = explode('/', $uri_path);
	if (!empty($uri_segment[4])){
		$nim = $uri_segment[4];
	}
	// var_dump($uri_segment);

	switch($req){
		case 'GET':
			if (isset($nim)){
				$db->getMhs(ucfirst($nim));
			} else {
				$db->getMhs();
			}
			break;

		case 'POST':
			$db->editMhs('POST');
			break;

		case 'PUT':
			// if (isset($nim)) {
				$db->editMhs('PUT', ucfirst($nim));	
			// } 
			break;

		case 'DELETE':
			// if (isset($nim)) {
			$db->editMhs('DELETE', ucfirst($nim));	
			// } 
			break;

		default:
			header('HTTP/1.0 405 Method Tidak Terdaftar');
			break;
	}


?>