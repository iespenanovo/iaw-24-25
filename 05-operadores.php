<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Operadores en PHP</title>
</head>
<body>
	<h1>Operadores en PHP</h1>

	<h3>Operadores artitméticos +, -, *, /, %</h3>
	<?php 
		$a=5;
		$b=2;
		echo "\n<br>$a + $b = ".$a+$b;
		echo "\n<br>$a - $b = ".$a-$b;
		echo "\n<br>$a * $b = ".$a*$b;
		echo "\n<br>$a / $b = ".$a/$b;
		echo "\n<br>$a % $b = ".$a%$b; //operador MODULO: resto de la división entera
	?>
	<h3>Operadores de asignación =, +=, -=, *=, /=, .= </h3>
	<?php
		$c=1;//asignación simple
		echo "\n<br>\$c=1 ---> $c";
		$c+=2;//asignación sumando
		echo "\n<br>\$c+=2 ---> $c";
		$c-=1;//asignación restando
		echo "\n<br>\$c-=1 ---> $c";

	?>

</body>
</html>