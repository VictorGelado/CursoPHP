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
	<form method="get" action="02-exercicio.php">
		<label>Número: </label>
		<select name="num">			
			<?php
				for ($c = 1; $c <= 10; $c++) {
					echo "<option value='$c'>$c</option>";
				}
			?>
		</select>
		<button type="submit">Tabuada</button>
	</form>
</div>	
</body>
</html>