<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Funciones predefinidas en PHP</title>
</head>
<body>
	<h1>Funciones predefinidas en PHP</h1>
	<?php 

		$saludo="Buenas tardes"; 
		echo "\n<br><br>La cadena '$saludo' tiene ".strlen($saludo)." caracteres";

		echo "\n<br><br>Saludo en mayúsculas: ".strtoupper($saludo);
		echo "\n<br><br>Saludo en minúsculas: ".strtolower($saludo);

		$nif="12345678Z";

		echo "\n<br><br>El NIF $nif se compone de ".substr($nif,0,-1)." - ".substr($nif, -1) ;

		$diasSemana = array("Lu","Ma","Mi","Ju","Vi","Sa","Do");

		echo "\n<br><br>El array \$diasSemana tiene ".count($diasSemana)." elementos.";

		$registro="Luis;Pérez Díaz;lperez@gmail.com;666777222;Vilalba";

		$datos=explode(";", $registro);//devuelve array con valores de la cadena, en función del separador ';'

		echo "\n<br><br>$registro<br><br>";
		var_dump($datos);

		list($nom,$ape,$email,$tnfo,$dom)=$datos;//pasa a variables simples los datos del array (por orden)
		echo "\n<br><br>Nombre: $nom";
		echo "\n<br>Apellidos: $ape";
		//...

		$cadenaDiasSemana=implode("-", $diasSemana);//devuelve una cadena con los valores del array, separados por "-";
		echo "\n<br><br>$cadenaDiasSemana";

		//funciones de fechas
		setlocale(LC_ALL,"spanish");
		error_reporting(0);//para evitar el error 'Deprecated: Function strftime()';

		$dia=29;
		$mes=2;
		$ano=2023;
		$validado=checkdate($mes, $dia, $ano)?"correcta":"incorrecta";
		echo "\n<br>la fecha $dia/$mes/$ano es $validado";

		$ano=2024;
		$validado=checkdate($mes, $dia, $ano)?"correcta":"incorrecta";
		echo "\n<br>la fecha $dia/$mes/$ano es $validado";

		echo "\n<br>Instante Unix: ".time();
		$hora=(int) strftime("%H");
		//var_dump($hora);
		$hora+=2;

		echo strftime("<br>Hoy es %A, %e de %B de %Y siendo las $hora:%M:%S");

	?>
</body>
</html>