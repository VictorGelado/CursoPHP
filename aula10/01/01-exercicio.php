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
		if ((isset($_GET['num']) && $_GET['num'] <> '')) {
			$num = $_GET['num'];
		} else {
			$num = 0;
		}
		$tipo = isset($_GET['oper'])? $_GET['oper']: 1;

		switch($tipo) {
			case 1:
				$r = $num * 2;
				break;
			case 2:
				$r = pow($num, 3);
				break;
			case 3:
				$r = sqrt($num);
				break;			
		}

		echo "<p>O resultado foi: $r</p>";
	?>

	<a href="./01-exercicio.html"><button>Voltar</button></a>

</div>	
</body>
</html>