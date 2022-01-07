<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doação de sangue</title>
</head>
<body>
	<?php
		$nome = 'Matheus';
		$idade = 18;
		$peso = 70;
		$doente = false;
		$elegivel = false;

		if (($idade>=16 && $idade<=69) && $peso >=50 && $doente != true) {
			$elegivel = true;
		}
	?>
	<h2>Sistema de doação de sangue</h2>
	<h3>Seja bem vindo <?= $nome?>!</h3>
	<p>Sua idade é: <?= $idade?> anos.</p>
	<p>Seu peso é: <?= $peso?> Kg.</p>
	<p>Portanto você <?= $elegivel == true ? 'atende aos requisitos' : 'não atende aos requisitos' ?>.</p>
</body>
</html>
