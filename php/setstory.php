<?php
session_start();
include "php/queries.php";
if(isset($_POST['submit'])) {
	if(isset($_POST['name']) && isset($_POST['text']) && isset($_POST['postcode'])){
		$name = $_POST['name'];
		$text = $_POST['text'];
		$postcode = $_POST['postcode'];
		setStory($name, $text, $postcode);
		
	} else {
		//set session error to one of the fields are not set
	}
}
?>