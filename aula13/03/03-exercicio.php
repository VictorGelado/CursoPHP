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
		$num = isset($_GET['num'])? $_GET['num']: 5;
		$totalDiv = 0;

		print("<h1>Analizando o número $num </h1>");

		echo "Valores múltiplos: ";

		for ($c = 1; $c <= $num; $c++) {
			if ($num % $c == 0) {
				echo " $c ";
				$totalDiv += 1; 
			}
		}

		echo "<p>Total de múltiplos: $totalDiv</p>";

		if ($totalDiv < 3 && $totalDiv > 1) {
			echo "<p>Resultado: $num É PRIMO!</p>";
		} else {
			echo "<p>Resultado: $num NÃO É PRIMO!</p>";
		}
	?>

	<a href="./03-exercicio.html"><button>Voltar</button></a>

</div>	
</body>
</html>