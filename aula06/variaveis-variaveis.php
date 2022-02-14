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
		$x = "abc";
		$$x = "def";
		echo "<p>O conteudo da variavel X é $x</p>";

		echo "<p>A variavel criada($x) recebeu o valor $abc</p>";
	?>
</div>
</body>
</html>