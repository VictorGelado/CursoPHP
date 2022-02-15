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
		$v1 = $_GET['x'];
		$v2 = $_GET['y'];

		echo "<h2>Valores recebidos: $v1 e $v2</h2>";

		$va = "O valor absoluto de $v2 é: ". abs($v2);
		$vp = "A valor de $v1<sup>$v2</sup> é: ". pow($v1, $v2);
		$vr = "A raíz quadrada de $v1 é: ". sqrt($v1);
		$vro = "O valor de $v2 arredondado é: ". round($v2); // pode substituir o round por ceil(arredonda sempre para cima) ou floor(arredonda sempre para baixo)
		$vi = "A parte inteira de $v2 é: ". intval($v2);
		$vf = "O valor de $v1 em moeda é: R$". number_format($v1, 2, ",", "."); // valor / casas decimais / separador decimal / separador milar hhahaha

		echo "<h2>$va</h2>";
		echo "<h2>$vp</h2>";
		echo "<h2>$vr</h2>";
		echo "<h2>$vro</h2>";
		echo "<h2>$vi</h2>";
		echo "<h2>$vf</h2>";
	?>
</div>
</body>
</html>