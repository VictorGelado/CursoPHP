<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../_css/style.css">
	<style type="text/css">
		* {
			text-align: center;
		}
	</style>
</head>
<body>
<div>
	<?php 
		for ($c=0; $c <= 10; $c++) { 
			echo "$c.. ";
		}
		echo "<br/>";
		for ($i=10; $i >= 0; $i--) { 
			echo "$i.. ";
		}
		echo "<br/>";
		for ($i = 0; $i <= 50; $i += 5) {
			echo "$i.. ";
		}
		echo "<br/>";
		for ($i = 20; $i >= 0; $i -= 2) {
			print("$i.. ");
		}
	?>
</div>	
</body>
</html>