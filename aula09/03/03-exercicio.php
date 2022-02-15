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
		if ((isset($_GET['nota1']) && $_GET['nota1'] <> '') && (isset($_GET['nota2']) && $_GET['nota1'] <> '')) {
			$nota1 = $_GET['nota1'];
			$nota2 = $_GET['nota2'];
			$media = ($nota1 + $nota2)/ 2;	
		} else {
			$nota1 = 0;
			$nota2 = 0;
			$media = 0;
		}

		if ($media < 5) {
			$situacao = "REPROVADO";
		} elseif ($media >= 5 && $media <= 7) {
			$situacao = "RECUPERAÇÃO";
		} else {
			$situacao = "APROVADO";
		}
		
		echo "<p>A média entre ". number_format($nota1, 1) ." e ". number_format($nota2, 1) ." é igual a ". number_format($media, 1) ."</p>
		";
		echo "<p>Situação do aluno: $situacao</p>";
	?>

	<a href="./03-exercicio.html"><button>Voltar</button></a>

</div>	
</body>
</html>