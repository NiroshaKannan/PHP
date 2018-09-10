<!DOCTYPE html>
<html>
	<body>
	<h3> Array in php </h3>
		<?php
			$x = array('id' => 1);

			$y = array('value' => 10);

			$z = $x + $y;
			print_r ($z);
			
			$a = array('id' => 1);
			$b = array('id' => 1);
			
			if($a == $b){
				print_r ($a);
				print_r ($b);
				echo 'equal';
			}else
			{
				print_r ($a);
				print_r ($b);
				echo 'not equal';
			}
			
			
			$aa = array('id' => 1);
			$bb = array('id' => "1");
			
			if($aa === $bb){
				print_r ($aa);
				print_r ($bb);
				echo ' same';
			}else
			{
				print_r ($aa);
				print_r ($bb);
				echo ' not same';
			}
			
			$aa = array('id' => 1);
			$bb = array('id' => "1");
			
			if($aa != $bb){
				print_r ($aa);
				print_r ($bb);
				echo 'True';
			}else
			{
				print_r ($aa);
				print_r ($bb);
				echo 'False';
			}
			
			$aa = array('id' => 1);
			$bb = array('id' => "1");
			
			if($aa !== $bb){
				print_r ($aa);
				print_r ($bb);
				echo 'True';
			}else
			{
				print_r ($aa);
				print_r ($bb);
				echo 'False';
			}
			
			$actions = array('Dance','Sing','Walk');
			echo count($actions);
			
			$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
			sort($persons);
			print_r($persons);
			
			$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
			ksort($persons);
			print_r($persons);
			
		?>
	</body>
</html>