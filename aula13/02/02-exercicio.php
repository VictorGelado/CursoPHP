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
		$num = isset($_GET['num'])? $_GET['num']: 1;

		echo "<h1>Mostrando a tabuada de $num</h1>";

		for ($c = 1; $c <= 10; $c++) {
			$r = $c * $num;
			echo "<p>$c x $num = $r</p>";
		}		
	?>
	<a href="./02-exercicio-form.php"><button>Voltar</button></a>
</div>	
</body>
</html>