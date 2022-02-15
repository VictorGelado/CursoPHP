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
		$a = isset($_GET['ano'])? $_GET['ano']: date("Y");
		$i = date("Y") - $a;

		echo "<p>Você nasceu em $a e tem $i anos</p>";

		if ($i < 16) {
  			$tipoVoto = "nao vota";
		} elseif (($i >= 16 && $i < 18) || ($i > 65)) {
			$tipoVoto = "voto é opcional";
		} else {
			// if () {}
			$tipoVoto = "voto é obrigatório";
		}
		

		echo "<p>Para essa idade, $tipoVoto</p>";	
	?>

	<a href="./02-exercicio.html"><button>Voltar</button></a>
</div>
</body>
</html>