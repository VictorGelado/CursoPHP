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
		$ano_nas = $_GET['ano'];
		$ano_atual = date('Y');
		$idade = $ano_atual - $ano_nas;

		echo "Sua idade é $idade.";

		$tipo = ($idade >= 18 && $idade < 64)? "OBRIGATÓRIO": "NÃO OBRIGATÓRIO";

		echo " E dessa forma seu voto e $tipo";

	?>
</div>
</body>
</html>