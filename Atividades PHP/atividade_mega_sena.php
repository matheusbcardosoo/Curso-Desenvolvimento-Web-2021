<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MEGA SENA</title>
</head>
<body>

	<?php

		$numeros_sorteados = array();
		
		while (count($numeros_sorteados) <= 5) { 
			$numero_sorteado = rand(1,60);
				if (!in_array($numero_sorteado,$numeros_sorteados)){
					$numeros_sorteados[] = $numero_sorteado;
				}
		}

		echo "Os numeros sorteados foram: ";
		foreach ($numeros_sorteados as $num) {
		 	echo "$num ";
		 }

	?>

</body>
</html>