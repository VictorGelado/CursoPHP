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
	<form method="get">
		<label for="number">Número: </label>
		<input type="number" name="num" id="number" min="1" max="15"><br/>
		<button type="submit">Calcular</button>
	</form>

	<?php 
		$num = isset($_GET['num'])? $_GET['num']: 1;
		$c = $num;
		$r = 1;

		do {			
			$r *= $c;
			$c--;
		} while ($c >= 1);

		echo "!$num é ". number_format($r, 0, ',', '.');
	?>
</div>	
</body>
</html>