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
		$n1 = $_GET['n1']; 
		$n2 = $_GET['n2'];
		$m = ($n1 + $n2)/ 2;

		echo "<p>A media entre $n1 e $n2 é $m</p>";

		//$sit = $m < 6? "REPROVADO": "APROVADO";

		echo "A situacao do aluno é ". ($m < 6? "REPROVADO": "APROVADO");

	?>
</div>
</body>
</html>