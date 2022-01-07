<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculadora de Imposto de Renda</title>
</head>
<body>

	<?php
		function calcularImpostoDeRenda($salario){
			$salario = $salario;
			if ($salario <=1903.98 ){
				echo "Você está isento do imposto de renda!";
			} else if ($salario >= 1903.99 && $salario <=2826.65){
				$IR = $salario * 0.075;
				echo "Você deve pagar RS: $IR de imposto de renda!";
			} else if ($salario >= 2826.66 && $salario <=3751.05){
				$IR = $salario * 0.15;
				echo "Você deve pagar RS: $IR de imposto de renda!";
			} else if ($salario >= 3751.06 && $salario <=4664.68){
				$IR = $salario * 0.225;
				echo "Você deve pagar RS: $IR de imposto de renda!";
			} else {
				$IR = $salario * 0.275;
				echo "Você deve pagar RS: $IR de imposto de renda!";
			}
		}

		$salario = 10354.01;

		calcularImpostoDeRenda($salario);
	?>

</body>
</html>