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
		if ((isset($_GET['ds']) && $_GET['ds'] <> '')) {
			$d = $_GET['ds'];
		} else {
			$d = 0;
		}
		
		switch($d) {
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
				echo "Levanta e vai estudar! :)";
				break;
			case 7:
			case 8: 
				echo "Descanse, pequeno gafanhoto! ;)";
				break;
			default:
				echo "Dia da semana inválido";
		}
	?>

	<a href="./02-exercicio.html"><button>Voltar</button></a>

</div>	
</body>
</html>