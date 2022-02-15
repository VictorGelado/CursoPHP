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
		$preco = $_GET['p'];

		echo "<p>O preço do produto é: R$ $preco</p>";

		$preco += $preco*10/100;

		echo "<p>O novo preço com 10% de aumento é: R$". number_format($preco, 2, ",", ".") ."</p>";
	?>
</div>	
</body>
</html>