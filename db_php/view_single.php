<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

$mysqli = new mysqli($servername, $username, $password, $dbname);
$myArray = array();
if ($result = $mysqli->query("SELECT u.id, u.firstname, u.lastname, u.email, q.degree, q.college_name FROM myusers u INNER JOIN userqualification q ON q.id = u.id WHERE q.id = 1")) {

    while($row = $result->fetch_array(MYSQL_ASSOC)) {
		$myArray[] = $row;
    }
	
    echo json_encode($myArray);
}

$result->close();
$mysqli->close();

?>