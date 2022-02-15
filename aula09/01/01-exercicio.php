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

		if ($i >= 18) {
			$v = "já pode votar";
			$d = "já pode dirigir";
		} else {
			$v = "nao pode votar";
			$d = "nao pode dirigir"; 
		}
		echo "<p>Com essa idade você $v e também $d</p>";
	?>
</div>
</body>
</html>