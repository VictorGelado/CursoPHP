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
		$nome = isset($_GET['nome'])? $_GET['nome']: "[NÃO INFORMADO]";
		$ano = isset($_GET['ano'])? $_GET['ano']: date("Y");
		$sexo = isset($_GET['sexo'])? $_GET['sexo']: "[SEM SEXO]";
		$idade = date("Y") - $ano;

		echo "$nome é $sexo e tem $idade anos.";
	?>
	<a href="./02-exercicio.html">Voltar</a>
</div>
</body>
</html>