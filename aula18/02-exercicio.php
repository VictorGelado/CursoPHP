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
			$n = range(5, 20, 2);
			
			foreach($n as $value) {
				print("$value.. ");
			}
		?>

</div>	
</body>
</html>