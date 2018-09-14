<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
	$myArr = array();
    
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
	$email = $_REQUEST['email'];
	
	$sql = "INSERT INTO myusers (firstname, lastname, email)
    VALUES ( '$firstname', '$lastname', '$email')";
	
	$conn->exec($sql);

	$last_id = $conn->lastInsertId();
	
		$myArr = array("success" => "1","message" => "success","id" => $last_id);
	
	echo json_encode($myArr);
	
	//header ("refresh:2; url=insert.html");

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>