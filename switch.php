<!DOCTYPE html>
<html>
	<body>
	<h3> Conditional in php </h3>
		<?php
			
			$name = 'rose';

			switch($name){
				case 'nirosha':
					echo "Name of the person $name";
					break;
				case 'rose':
					echo "Name of the flower $name";
					break;
				defalut:
					echo "Nothing";
					break;
					
			}
		?>
	</body>
</html>