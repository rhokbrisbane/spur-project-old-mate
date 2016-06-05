<?php
session_start();
include "php/queries.php";

if(isset($_POST['Subscribe'])) {
	if(isset($_POST['NAME']) && isset($_POST['EMAIL']) && isset($_POST['POSTCODE'])){
		$name = $_POST['NAME'];
		$email = $_POST['EMAIL'];
		$postcode = $_POST['POSTCODE'];
		setPledger($name, $email, $postcode);
		postToChimp();
	} else {
		//set session error to one of the fields are not set
		
	}
} else {
	header("Location: http://oldmate.spurprojects.org/");
}
function postToChimp(){
	// where are we posting to?
	$url = 'http://spurprojects.us2.list-manage.com/subscribe/post?u=c319b91ac25607f4451c84e2b&amp;id=a34e1c5eb6';
	// what post fields?
	$fields = array(
	   'EMAIL' => $_POST['EMAIL'],
	   'NAME' => $_POST['NAME'],
	   'POSTCODE' => $_POST['POSTCODE'],
	);

	// build the urlencoded data
	$postvars = http_build_query($fields);

	// open connection
	$ch = curl_init();

	// set the url, number of POST vars, POST data
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, count($fields));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);

	// execute post
	$result = curl_exec($ch);

	// close connection
	curl_close($ch);
	
}

?>