<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="./_css/style.css">
</head>
<body>
<div>
	<?php
		$a = 3;
		$b = "3";

		echo "<p>A e B são iguais?</p>";

		$r = $a == $b? "<p>A variável A é igual a variável B</p>": "<p>A variável A não é igual a variável B</p>";

		echo $r;

		echo "<p>A e B são identicas?</p>";

		$r = $a === $b? "<p>A variável A é identica a variável B</p>": "<p>A variável A não é identica a variável B</p>";

		echo $r;

	?>	
</div>
</body>
</html>