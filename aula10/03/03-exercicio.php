<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../_css/style.css">
	<style type="text/css">
		span {
			color: #058ADF;
			font-weight: 800;
		}
	</style>
</head>
<body>
<div>
	<?php 
		$estados = $_GET['estados'];

		switch($estados) {
			// Norte
			case 'AC':
			case 'AM':
			case 'AP':
			case 'PA':
			case 'RO':
			case 'RR':
			case 'TO':
				$regiao = 'Norte';
				break;
			// Nordeste
			case 'AL':	
			case 'BA':	
			case 'CE':	
			case 'MA':	
			case 'PI':	
			case 'PE':	
			case 'PB':	
			case 'RN':	
			case 'SE':
				$regiao = 'Nordeste';	
				break;
			// Sul
			case 'PR':
			case 'RS':
			case 'SC':
				$regiao = 'Sul';
				break;
			// Sudeste
			case 'ES':
			case 'MG':
			case 'RJ':
			case 'SP':
				$regiao = 'Sudeste';
				break;	
			// Região Centro-oeste
			case 'MT':
			case 'MS':
			case 'GO':
			case 'DF':
				$regiao = 'Centro-oeste';
				break; 	
			default:
				$regiao = 'Centro-oeste';
				break;
		}

		echo "<p>Você mora na <span>Região $regiao</span></p>";
	?>

	<a href="./03-exercicio.html"><button>Voltar</button></a>

</div>	
</body>
</html>