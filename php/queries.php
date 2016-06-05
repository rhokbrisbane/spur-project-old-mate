<?php
include "php/connection.php";

function setPledger($name, $email, $postcode){

	if(checkEmail($email) && checkPostCode($postcode)){
		try {
		$conn = connect();
		$sql = "INSERT INTO Pledgers VALUES (0,:postcode, :email, :name);";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':postcode', $postcode, PDO::PARAM_INT);
		$stmt->bindValue(':email', $email, PDO::PARAM_STR);
		$stmt->bindValue(':name', $name, PDO::PARAM_STR);
		 $stmt->execute();}
		catch(PDOException $e){echo $e->getMessage();}
	}
}

//to be implmented
function checkEmail($email){
	try { 
		$conn = connect();
		$sql = "SELECT COUNT(*) FROM Pledgers WHERE email=:email";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':email', $email, PDO::PARAM_STR);
		$stmt->execute();
		$result = $stmt->fetchAll();
		if ($result[0][0] > 0){
			return false;
		} else {
			return true;
		}
	}
	catch(Exception $e){echo $e->getMessage();}
}

//to be implmented
function checkPostCode($postcode){
	try { 
		$conn = connect();
		$sql = "SELECT COUNT(*) FROM postcodes WHERE postcode=:postcode";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':postcode', $postcode, PDO::PARAM_STR);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result[0][0];
		if($result[0][0] > 0){
			return true;
		} else {
			return false;
		}
	}
	catch(Exception $e){echo $e->getMessage();}
	
}

//to be implmented
function getAllUsersEmail(){
	
	try { 
		$conn = connect();
		$sql = "SELECT email FROM Pledgers";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	catch(Exception $e){echo $e->getMessage();}
	
}

//to be implmented
function incrementArea($postcode, $month){
	if(checkPostCode($postcode)){
		try { 
			$conn = connect();
			$sql = "UPDATE AreaMonthly SET hours = hours + 1 WHERE postcode=:postcode AND month=:month";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':postcode', $postcode, PDO::PARAM_STR);
			$stmt->bindValue(':month', $month, PDO::PARAM_STR);
			$stmt->execute();
		}catch(Exception $e){echo $e->getMessage();}
	}
}

//to be tested
function getTotalHourArea($postcode){
	//returns all the hours logged for postcode
	if(checkPostCode($postcode)){
		try { 
			$conn = connect();
			$sql = "SELECT hours FROM AreaMonthly WHERE postcode=:postcode";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':postcode', $postcode, PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->fetchAll();
			$totalHours = 0;
			foreach($result as $hours){
				$totalHours += $hours[0];
			}
			return $totalHours;
		}catch(Exception $e){echo $e->getMessage();}
	}
}

//to be tested
function getMaxMonthUserPledge($postcode){
	//returns the count of the users for postcode
	if(checkPostCode($postcode)){
		try { 
			$conn = connect();
			$sql = "SELECT COUNT(*) FROM Pledgers WHERE postcode=:postcode;";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':postcode', $postcode, PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result[0][0];
		}catch(Exception $e){echo $e->getMessage();}
	}
}

//to be tested
function setStory($name, $text, $postcode){
	if(strlen($text) <= 1000 && checkPostCode($postcode)){
		try {
			$conn = connect();
			$sql = "INSERT INTO Stories VALUES (0,:name, :text, :postcode, :timestamp);";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':name', $name, PDO::PARAM_STR);
			$stmt->bindValue(':text', $text, PDO::PARAM_STR);
			$stmt->bindValue(':postcode', $postcode, PDO::PARAM_STR);			
			$result=time();
			$stmt->bindValue(':timestamp', $result, PDO::PARAM_STR);
			$stmt->execute();
		 }
		catch(PDOException $e){echo $e->getMessage();}
	}
}

//to be tested
function getStories($amount, $offset){
	if($amount > 0){
		
		//get query name text postcode date
		try { 
			$conn = connect();
			$sql = "SELECT * FROM Stories ORDER BY timestamp LIMIT :amount OFFSET :offset";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
			$stmt->bindValue(':amount', $amount, PDO::PARAM_INT);			
			$stmt->execute();
			return $stmt->fetchAll();
			
		}catch(Exception $e){echo $e->getMessage();}
	}
}
?>