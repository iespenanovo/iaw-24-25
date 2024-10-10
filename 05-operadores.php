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
		$cadenaHtml="<p>";
		$cadenaHtml.="contenido del párrafo usando operador .= ";// equivale a $cadenaHtml=$cadenaHtml."contenido del párrafo usando operador .= ";
		$cadenaHtml.="</p>";
		echo $cadenaHtml;
	?>
	<h3>Operadores de comparación ==, !=, <, >, <= y >=</h3>

	<?php 
		$a=100;
		$b=rand(99,101);//genera un número entre 99 y 101
		if ($a==$b) {
			echo "\n<br>verdad: $a == $b";
		} else {
			echo "\n<br>falso: $a == $b";
		}
		$b=200;
		if ($a==$b) {
			echo "\n<br>verdad: $a == $b";
		} else {
			echo "\n<br>falso: $a == $b";
		}

		if ($a!=$b) {
			echo "\n<br>verdad: $a != $b";
		} else {
			echo "\n<br>falso: $a != $b";
		}
		$b=100;
		if ($a!=$b) {
			echo "\n<br>verdad: $a != $b";
		} else {
			echo "\n<br>falso: $a != $b";
		}
		if ($a>=$b) {
			echo "\n<br>verdad: $a >= $b";
		} else {
			echo "\n<br>falso: $a >= $b";
		}
		if ($a>$b) {
			echo "\n<br>verdad: $a > $b";
		} else {
			echo "\n<br>falso: $a > $b";
		}
	?>	
	<h3>Operador condicional '?:' o ternario</h3>
	<?php 
		$color = "rojo";
		echo "\n<br>color: $color";
		$color = $color=="rojo" ? "azul" : "rojo";
		/* //equivale a:
		if ($color=="rojo") {
			$color="azul";
		} else {
			$color="rojo";
		} 
		*/
		echo "\n<br>color: $color";
		$color = $color=="rojo" ? "azul" : "rojo";
		echo "\n<br>color: $color";
	?>
	<h3>Operadores de incremento y decremento ++ --</h3>	
	<?php
		$a=1;
		echo "\n<br>\$a : $a";
		$a++;
		echo "\n<br>\$a++ : $a";
		$b=$a++;
		echo "\n<br>\$a++ : $a";
		echo "\n<br>\$b=\$a++ : $b";
		$b=++$a;
		echo "\n<br>++\$a : $a";
		echo "\n<br>\$b=++\$a : $b";
		$c=$a++ + 100;
		echo "\n<br>\$c=\$a++ + 100 : $c";
		echo "\n<br>\$a++ : $a";

		$c=++$a + 100;
		echo "\n<br>\$c=++\$a + 100 : $c";
		echo "\n<br>++\$a : $a";

	?>
	<h3>Operadores lógicos and (&&), or (||), xor, ! (NO lógico)</h3>
	<?php 
		$a=100;
		$b=200;
		$c=100;
		if ($a>$b and $a>=$c) {
			echo "\n<br>verdad: $a>$b and $a>=$c";
		} else {
			echo "\n<br>falso: $a>$b and $a>=$c";
		}
		if ($a>$b or $a>=$c) {
			echo "\n<br>verdad: $a>$b or $a>=$c";
		} else {
			echo "\n<br>falso: $a>$b or $a>=$c";
		}
		if (!($a>$b) and ($a>=$c)) {
			echo "\n<br>verdad: !($a>$b) and ($a>=$c)";
		} else {
			echo "\n<br>falso: !($a>$b) and ($a>=$c)";
		}
		if (!(!($a>$b) and ($a>=$c))) {
			echo "\n<br>verdad: !(!($a>$b) and ($a>=$c))";
		} else {
			echo "\n<br>falso: !(!($a>$b) and ($a>=$c))";
		}
		if ( ($b>$a or $b>$c) and $c<100 ) {
			echo "\n<br>verdad: ($b>$a or $b>$c) and $c<100 ";
		} else {
			echo "\n<br>falso: ($b>$a or $b>$c) and $c<100 ";
		}
	?>
	<h3>Operador de concatenación de cadena '.'</h3>
	<?php 
		$a=100;
		$b=200;
		$c="resultado";
		echo "\n<br>$c"." de \$a+\$b : ".$a+$b;
	?>
</body>
</html>