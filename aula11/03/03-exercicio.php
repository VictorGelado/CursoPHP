<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../../_css/style.css">
</head>
<body>
<div>
	<?php
		$ini = isset($_POST['inicio'])? $_POST['inicio']: 1;
		$fim = isset($_POST['fim'])? $_POST['fim']: 10;
		$incremento = isset($_POST['incre'])? $_POST['incre']: 1;

		if ($ini < $fim) { // menor
			while ($ini <= $fim) {
				echo "$ini.. ";
				$ini += $incremento;
			}
		} else { // == e maior
			while ($fim <= $ini) {
				echo "$ini.. ";
				$ini -= $incremento;
			}
		}
		
	?>
	<a href="./03-exercicio.html"><button>Voltar</button></a>
</div>	
</body>
</html>