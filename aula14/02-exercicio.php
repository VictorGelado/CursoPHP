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
		function soma ($a, $b) {
    		// $s = $a + $b;
    		return $a + $b;
    	}


    	$x = 3;
		$y = 4;
		$r = soma($x, $y); 
    	echo "A soma vale entre $x e $y vale $r";
	?>

</div>	
</body>
</html>