<?php

function connect(){
	$host = ""; 
	$user = "";
	$pwd = "";
	$db = "";
	try{
		$conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch(Exception $e){
		die(print_r($e));
	}
	return $conn;
}
?>