<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../_css/style.css">
</head>
<body>
<div>
	<?php 
		function soma() {
			$p = func_get_args ();
			$t = func_num_args ();
			$s = 0; 

			/*for ($i=0; $i<$t; $i++) {
			   $s += $p[$i]; 
			}*/

			foreach ($p as $value) {
				$s += $value;
			}

			return $s;
		}

		print("O resultado foi ". soma(1, 2, 554, 78, 98, 398, 338));
		
	?>
</div>	
</body>
</html>