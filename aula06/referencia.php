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
		$a = 3;
		$b = &$a;
		$b += 5;
		
		echo "<p>A variavel A vale $a</p>";

		echo "<p>A variavel B vale $b</p>";
	?>
</div>
</body>
</html>