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
	$id = $_REQUEST['id'];
	
	$sql = "UPDATE myusers SET firstname = '$firstname' WHERE id = $id";
	
	$conn->exec($sql);

		$myArr = array("success" => "1","message" => "success");
	
	echo json_encode($myArr);
	
	//header ("refresh:2; url=insert.html");

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>