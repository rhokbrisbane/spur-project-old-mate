<?php
session_start();
include "php/queries.php";
if(isset($_POST['submit'])) {
	if(isset($_POST['postcode'])){
		$postcode = $_POST['postcode'];
		setStory($postcode,date("m", time()));
	} else {
		//set session error to one of the fields are not set
	}
}
?>