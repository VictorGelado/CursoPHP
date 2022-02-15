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
		$n1 = $_GET['a']; 
		$n2 = $_GET['b'];
		$tipo = $_GET['op'];

		echo "<p>Os valores passados foram $n1 e $n2</p>";

		$r = ($tipo == "s")? $n1 + $n2: $n1 * $n2;

		echo "O resultado foi: $r"
	?>
</div>
</body>
</html>