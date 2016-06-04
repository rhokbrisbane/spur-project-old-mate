<?php
session_start();
include("connection.php");

//to be implmented
function setPledger(name, email, postcode){
	if(getEmailCount(email) && checkPostCode(postcode){
		try{
			//attmpt query
		}
		catch(Exception $e){
			//server was unavailable to process request
		}
	}
}

//to be implmented
function checkEmail(email){
	
	//return bool for email
	//if false set session error and return false
}

//to be implmented
function checkPostCode(postcode){
	//return bool for post code
	
	//if false set session error and return false
}

//to be implmented
function getAllUsersEmail(){
	//check mail chimp
	
}

//to be implmented
function incrementArea(postcode, month){
	if(checkPostCode){
		//if valid month increment Area
	}
}

//to be implmented
function getTotalHourArea(postcode){
	//returns all the hours logged for postcode
}

//to be implmented
function getMaxMonthUserPledge(postcode){
	//returns the count of the users for postcode
}

//to be implmented
function setStory(name, text, postcode){
	if(strlen(text) <= 1000 && checkPostCode(postcode)){
		//attempt queries
	}
}

//to be implmented
function getStories(amount, from){
	if(amount > 0){
		//get query name text postcode date
	}
}
?>