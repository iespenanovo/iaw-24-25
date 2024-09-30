<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP embebido en HTML</title>
</head>
<body>
	<h1>PHP embebido en HTML</h1>

	<!-- <h3>Salida de la función phpinfo()</h3> -->


<?php 

		//comentarios
		//todas las sentencias deben terminar con caracter ;
		{ //esto es un bloque de sentencias, encerradas entre {}

		}
		//echo "<h4>este texto no sale porque está comentada la sentencia</h4>";
		{
			echo "\t<h3>salida de la función phpinfo(): </h3>\n"; //comentario de línea
			echo "\t<hr>\n"; /* comentario multilínea 
			texto de varias líneas 
			y más
			*/
		}

		echo "\t<hr>\n"; #esto también es un comentario de línea única


		phpinfo();



?>
	

</body>
</html>