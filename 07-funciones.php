<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Funciones en PHP definidas por el usuario</title>
</head>
<body>
	<h1>Funciones en PHP definidas por el usuario</h1>
	<?php 
		function sumar($p1,$p2)
		{
			//suma $p1 y $p2
			$resultado=$p1+$p2;
			return $resultado;
		}
		$suma=sumar(5,9);
		echo "\n<br>5 + 9 = $suma";
		$a=10;
		$b=5;
		echo "\n<br>$a + $b = ".sumar($a,$b);

		function sumar2($p1,$p2,$p3=0,$p4=0) //parámetros por defecto 
		{
			$resultado=$p1+$p2+$p3+$p4;
			return $resultado;
		}

		$suma=sumar2($a,$b,4);;
		echo "\n<br>$a + $b + 4 = $suma";
		$c=1;
		$d=3;
		echo "\n<br>$a + $b +$c + $d = ".sumar($a,$b,$c,$d);

		function sumar3() //número indefinido de parámetros
		{
			$numeros=func_get_args();//devuelve un array con todos los parámetros
			echo "\b<br>";
			var_dump($numeros);

		}

		sumar3();
		sumar3(1);
		sumar3(1,2);
		sumar3(1,2,3);
		sumar3(1,2,3,4,5,6,7,8,9,10);


	?>
</body>
</html>