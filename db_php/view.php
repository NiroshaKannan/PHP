<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

$mysqli = new mysqli($servername, $username, $password, $dbname);

$myArrays = array();



$sql="SELECT u.id, c.comment FROM myusers u INNER JOIN usercomment c ON c.id = u.id WHERE c.id = 1";

if ($result=mysqli_query($mysqli,$sql))
 {
  while ($obj=mysqli_fetch_object($result))
  {
	  $myArray[] = $obj;
	
	
  
			  
		if ($result = $mysqli->query("SELECT * FROM myusers")) {

			while($row = $result->fetch_array(MYSQL_ASSOC)) {
				
				$myArrays[] = $row;
				
				
			}
			
			
			$myArray = array("once"=>$myArray,"one"=>$myArrays);
			
		}
		
  }


  $myArr = array("success" => "1","message" => "success","value"=>$myArray );
	
  echo json_encode($myArr);
  
}


	  
    


$result->close();
$mysqli->close();

?>