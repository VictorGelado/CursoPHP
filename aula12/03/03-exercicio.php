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
		$c = 1;

		echo "<h1>Mostrando a tabuada de $num</h1>";

		do {
			$r = $num * $c;
			echo "<p>$num x $c = $r</p>";
			$c++;
		} while ($c <= 10);
	?>
	<a href="./03-exercicio-form.php"><button>Voltar</button></a>
</div>	
</body>
</html>