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
		function teste(&$x) {
			$x += 2;
			echo "<p>O valor de X é $x</p>";
		}

		$a = 3;
		teste($a);
		echo "<p>O valor de A é $a</p>";
	?>

</div>	
</body>
</html>