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
	
	<form mathod="get">
		<?php
			$c = 1;
			while ($c <= 5) {
				echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
				$c++;
			}
		?>
   		
   		<input type="submit" value="Enviar" class="botao"/>
	</form>
	
</div>	
</body>
</html>