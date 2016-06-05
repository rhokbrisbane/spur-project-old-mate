<?php

function connect(){
	$host = "66.116.150.173";
	$port = 3306;
	$user = "BBBm1fa_admin";
	$pwd = "OldMateArmy1";
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