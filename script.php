<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['oneclickid'])){
    
}else{
    die(header('location: ./destroy.php'));    
}

$data = $_POST['dataURL'];
	list($type, $data) = explode(';', $data);
	list(, $data)      = explode(',', $data);
	$data = base64_decode($data);
	$filename = $_SESSION['oneclickid'].'.jpg';
	$_SESSION['filename'] = $filename;	
	file_put_contents(__DIR__ . "/photos/".$filename, $data);
	echo "ok";
?>