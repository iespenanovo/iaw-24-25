<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tipos variables PHP</title>
	<style>
		.tabla {
			border: 1px solid blue;

		}
		.tabla th, .tabla td {
			border: 1px solid grey;
			padding: 1rem;
		}
		.dcha {
			text-align: right;
		}
	</style>
</head>
<body>
	<h1>Tipos de variables en PHP</h1>
	<?php 
		// número entero 
		$entero=5;
		// número coma flotante, real ...
		$real=3.14;
		//cadena
		$cadena="texto de caracteres";
		//array, vector o matriz
		$vector[]=100;
		$vector[]="200";

		//objeto: se definen a través de clases (veremos en otro apartado)

		echo "\n\t<h3>Variables con sus valores y tipos:</h3>";

		echo "\n\t<br>Variable \$entero, valor: $entero, tipo: ".gettype($entero);
		echo "\n\t<br>";
		var_dump($entero);

		echo "\n\t<br>Variable \$real, valor: $real, tipo: ".gettype($real);
		echo "\n\t<br>";
		var_dump($real);

		echo "\n\t<br>Variable \$cadena, valor: $cadena, tipo: ".gettype($cadena);
		echo "\n\t<br>";
		var_dump($cadena);

		echo "\n\t<br>Variable \$vector, valores: $vector[0], $vector[1], tipo: ".gettype($vector);
		echo "\n\t<br>";
		var_dump($vector);
	?>
	
	<h3>Más ejemplos de Arrays:</h3>		

	<?php 
	//definir array con constructor array
	$dias = array("lun","mar","mie","jue","vie","sab","dom");
	//              0     1     2     33    4     5     6 
	//lo anterior equivale a:
	/*
	$dias[0]="lun";
	$dias[1]="mar";
	...
	$dias[6]="dom";
	//también equivalente a:
	$dias[]="lun";
	$dias[]="mar";
	...
	$dias[]="dom";
	*/
	echo "<br>Array dias:<br>";
	var_dump($dias);

	echo "<br>Valor del array \$dias en el índice 3: $dias[3]";

	echo "\n\t<ol>";
		foreach ($dias as $indice => $dia) {
			echo "\n\t\t<li>$dia [$indice]</li>";
		}
	echo "\n\t</ol>";

	echo "\n\t<table class='tabla'>";
		echo "\n\t\t<tr>";
			foreach ($dias as $nombreDia) {
				echo "\n\t\t\t<td>$nombreDia</td>";
			}
		echo "\n\t\t</tr>";

	echo "\n\t</table>";

	/* arrays asociativos, con índices de texto */

	$ventasMeses = array(
		'enero' => 20456 ,
		'febrero' => 55899 ,
		'marzo' => 40440 ,
		'abril' => 30353 ,
		'mayo' => 8456 ,
		'junio' => 555 ,
		 );

	/* equivale a:
		$ventasMeses["enero"]=20456;
		$ventasMeses["febrero"]=55899;
		...
	*/

	echo "<br>Array \$ventasMeses:<br>";
	var_dump($ventasMeses);
	// vamos a mostrar datos del array en una lista desordenada <ul>
	echo "\n\t<ul>";
	foreach ($ventasMeses as $nombreMes => $ventasMes) {
		echo "\n\t\t<li>$nombreMes = $ventasMes €</li>";
	}
	echo "\n\t</ul>";

?>

	<table class="tabla">
		<caption>Ventas por mes</caption>
		<tr>
			<th>Mes</th>
			<th>€</th>
		</tr>
		<?php
		$ventasTotal=0;
		foreach ($ventasMeses as $nombreMes => $ventasMes) {
			echo "\n\t\t<tr>";
			echo "\n\t\t\t<td>$nombreMes</td>";
			echo "\n\t\t\t<td class='dcha'>$ventasMes €</td>";
			echo "\n\t\t</tr>";
			$ventasTotal = $ventasTotal + $ventasMes; //acumula las ventas de todos los meses
		}
		echo "\n\t\t<tr>";
		echo "\n\t\t\t<td><strong>TOTAL</strong></td>";
		echo "\n\t\t\t<td class='dcha'><strong>$ventasTotal €</strong></td>";
		echo "\n\t\t</tr>";

		?>

	</table>


</body>
</html>