<!DOCTYPE html>
<html>
	<body>
	<h3> Array in php </h3>
		<?php 
		
		$movie = array(
						"cartoon" => array("tom and jerry","tarzon"),
						"comics" => array("avengers", "infinity war")
						);
		print_r ($movie);
		
		$movies = array(
						"cartoon" => array( 0 => "tom and jerry",
											1 => "tarzon"),
						"comics" => array(0 =>"avengers", 
										  1 =>"infinity war")
						);
		echo $movies["comics"][1];
		
		?>
	</body>
</html>