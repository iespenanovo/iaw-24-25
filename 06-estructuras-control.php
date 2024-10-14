<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Estructuras de control en PHP</title>
	<style>
		.azul {color: blue;}
		.rojo {color: red;}
	</style>
</head>
<body>
	<h1>Estructuras de control en PHP</h1>
	<h3>Alternativa: if, if else, if elseif </h3>
	<?php  
	$a=rand(-100,100);
	echo "\n<br>\$a=$a";
	if ($a>=0) //no es necesario llaves si solo hay una sentencia a ejecutar 
	echo "\n<br>verdad: $a>=0";

	echo "\n<br>continúa el script";

	if ($a<0) {
		echo "\n<br>verdad: $a<0";
	} else {
		echo "\n<br>falso: $a<0";
	}
	echo "\n<br>continúa el script";

	if ($a<0)
		echo "\n<br>\$a es menor que 0";
	elseif ($a<20)
		echo "\n<br>\$a está entre 0 y 20";
	elseif ($a<40)
		echo "\n<br>\$a está entre 20 y 40";
	elseif ($a<80)
		echo "\n<br>\$a está entre 40 y 80";
	else
		echo "\n<br>\$a es >= 80";	
	?>	

	<h3>Estructura switch , alternativa múltiple</h3>
	<?php
	$color = array("rojo","azul","verde","naranja","blanco");
	//				 0      1       2        3        4
	$aleatorio=rand(0,4);
	$colorSeleccionado=$color[$aleatorio];
	echo "\n<br><hr>Color seleccionado: $colorSeleccionado<hr>";
	switch ($colorSeleccionado) {
		case "rojo":
		echo "\n<br>El color es rojo";
		break;
		case "azul":
		echo "\n<br>El color es azul";
		break;
		case "verde":
		echo "\n<br>El color es verde";
		break;
		default:
		echo "\n<br>Color $colorSeleccionado no reconocido";
		break;
	}

	switch ($colorSeleccionado) {
		case "rojo":
			//sentencias para rojo
			//al no existir break, si se cumple este case, continua al 
			//siguiente aunque no se compla el valor		
		case "azul":
		echo "\n<br>El color es azul o rojo";
		break;
		case "verde":
		echo "\n<br>El color es verde";
		break;
		default:
		echo "\n<br>Color $colorSeleccionado no reconocido";
		break;
	}
	?>
	<h3>Bucle while</h3>

	<?php
		echo "\n<ul>";
		$i = 1;
		$color="azul";
		while ($i <= 10) {
			//$color=$i%2==0?"rojo":"azul"; //esto asigna rojo a los números pares y azul a los impares, no sería necesario las otras 2 instrucciones : asignar azul antes del bucle y la sentencia ternaria final de este bucle
			echo "\n\t<li class='$color'>$i</li>";
			$i++;
			$color=$color=="azul"?"rojo":"azul";

		}
		echo "\n</ul>";

	?>

	<h3>Bucle for</h3>
	<?php  
		echo "\n<ul>";
		$color="azul";
		for ($i=1; $i <=10 ; $i++) { 
			echo "\n\t<li class='$color'>$i</li>";
			$color=$color=="azul"?"rojo":"azul";
		}
		echo "\n</ul>";

	?>
	<h3>Bucle foreach (arrays)</h3>
	<?php 
		//return; //finaliza una función, pero en cuerpo principal, finaliza el script
		$diasSemana = array("lunes","martes","miércoles","jueves","viernes","sábado","domingo");
		//						0 		1 		2 ...									6
		echo "<br>Posición 2 de \$diasSemana: $diasSemana[2]";

		foreach ($diasSemana as $indice => $valor) {
			//if($indice==1) continue;
			//if($indice==4) break;
			echo "\n<br>$valor ($indice), ";

		}
		echo "\n<hr>";
		//usando for:
		for ($i=0; $i <=6 ; $i++) { 
			echo "\n<br>$diasSemana[$i] ($i), ";
		}

	?>

</body>
</html>