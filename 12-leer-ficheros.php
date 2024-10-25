<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Leer ficheros de texto plano en PHP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">	
</head>
<body>
	<div class="container">
		<h1 class="text-center">Leer ficheros de texto plano en PHP</h1>
	</div>

	<?php 
	//abrimos archivo en modo lectura:
	$fichero="dat/datos.csv";
	$gf=@fopen($fichero,"r") or die ("<p class='alert alert-danger text-center'>Error al abrirl el fichero $fichero</p>");

	$linea=fgets($gf);//leemos un línea del fichero de texto, hasta encontrar un retorno de carro \n
	//var_dump($linea);
	echo "\n<table class='table table-striped caption-top'>";
	echo "\n\t<caption>Contenido de datos.csv:</caption>";
	echo "\n\t<tr>
		<th>nombre</th>
		<th>email</th>
		<th>edad</th>
		<th>f.nacimiento</th>
		<th>sexo</th>
		<th>terminos</th>
		<th>provincia</th>
		<th>deportes</th>
		<th>comentario</th>
	</tr>";
	while (!feof($gf)) { // mientras no llegamos al final del fichero
		echo "\n\t<tr>";
		$campos=explode(";", $linea);
		list($nombre,$email,$edad,$fnac,$sexo,$terminos,$prov,$dep,$coment)=$campos;
		//echo "\n<br>$linea";
		echo "\n\t\t<td>$nombre</td>";
		echo "\n\t\t<td>$email</td>";
		echo "\n\t\t<td>$edad</td>";
		echo "\n\t\t<td>$fnac</td>";
		echo "\n\t\t<td>$sexo</td>";
		echo "\n\t\t<td>$terminos</td>";
		echo "\n\t\t<td>$prov</td>";
		echo "\n\t\t<td>$dep</td>";
		echo "\n\t\t<td>$coment\t</td>";
		$linea=fgets($gf);
		echo "\n\t</tr>";

	}
	echo "\n</table>";


	fclose($gf);
	?>
		
</body>
</html>