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
		$valor = isset($_GET['v'])? $_GET['v']: 0;
		$rq = sqrt($valor);
		echo "A raíz quadrada do número $valor é: ". number_format($rq, 2);	
	?>
	<a href="./01-exercicio.html">Voltar</a>
</div>
</body>
</html>