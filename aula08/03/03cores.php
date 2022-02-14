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
	<?php
		$txt = isset($_GET['t'])? $_GET['t']: "Texto Generico";
		$tam = isset($_GET['tam'])? $_GET['tam']: "12px";
		$cor = isset($_GET['cor'])? $_GET['cor']: "ffffff";

		echo "
			<p>$txt</p>
			<style>
				p {
					font-size: $tam;
					color: $cor;
				}
			</style>
		";
	?>
	
</div>
</body>
</html>