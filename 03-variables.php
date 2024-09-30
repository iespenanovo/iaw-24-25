<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Variables y constantes en PHP</title>
</head>
<body>
	<h1>Variables y constantes en PHP</h1>
	<?php 
		/*****************************************/
		/*            variables                  */   
		/*****************************************/
		//ámbito global (fuera de las funciones)
		$variableGlobal1=100;
		$variableGlobal2=200;

		function funcion1() { //declaración de la función, no se ejecuta hasta que se llame 
			//dentro de la función: ámbito local
			echo "\n\t<br>Ejecutando funcion1:";
			$variableLocal1=10;
			$variableLocal2=20;
			echo "\n\t<p>Valor de \$variableLocal1 --> $variableLocal1</p>";
			echo "\n\t<p>Valor de \$variableGlobal1 --> $variableGlobal1</p>";
		}
		function funcion2() { //declaración de la función, no se ejecuta hasta que se llame 
			//dentro de la función: ámbito local
			echo "\n\t<br>Ejecutando funcion2:";
			$variableLocal3=10;
			$variableLocal4=20;
			echo "\n\t<p>Valor de \$variableLocal3 --> $variableLocal3</p>";
			echo "\n\t<p>Valor de \$variableGlobal1 --> $variableGlobal1</p>";
		}
		
		echo "\n\t<hr>";
		funcion1(); //llamada a la función 'funcion1'
		echo "\n\t<hr>";
		funcion2(); //llamada a la función 'funcion2'
		echo "\n\t<hr>";

		echo "\n\t<p>Valor de \$variableGlobal1 --> $variableGlobal1</p>";
		echo "\n\t<p>Valor de \$variableGlobal2 --> $variableGlobal2</p>";

		echo "\n\t<p>Valor de \$variableLocal1 --> $variableLocal1</p>";


		/*****************************************/
		/*            constantes                 */   
		/*****************************************/
		define("PI", 3.1416);
		define("EURO", 166.386);
		$euros=600;
		$pesetas=$euros*EURO;
		echo "\n\t<p>$euros € son $pesetas pts</p>";

	?>

</body>
</html>