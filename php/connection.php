<?php

function connect(){
	$host = "localhost";
	$port = 3306;
	$user = "root";
	$pwd = "";
	$db = "BBBm1fa_oldmate";
	try{
		$conn = new PDO( 'mysql:host=' . $host . ';port='.$port.';dbname=' . $db, $user, $pwd);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch(Exception $e){
		die(print_r($e));
	}
	return $conn;
}
?>
