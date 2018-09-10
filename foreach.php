<!DOCTYPE html>
<html>
	<body>
	<h3> Looping in php </h3>
		<?php
			$flowers = array("rose","jasmin","lily");
			
			foreach($flowers as $flower_value){
				echo $flower_value . "<br>";
			}
		?>
	</body>
</html>