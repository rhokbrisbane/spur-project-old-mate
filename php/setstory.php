<?php
session_start();
include "php/queries.php";
if(isset($_POST['Submit'])) {
	if(isset($_POST['NAME']) && isset($_POST['MESSAGE']) && isset($_POST['POSTCODE'])){
		$name = $_POST['NAME'];
		$text = $_POST['MESSAGE'];
		$postcode = $_POST['POSTCODE'];
		setStory($name, $text, $postcode);
		
	} else {
		//set session error to one of the fields are not set
	}
}
?>