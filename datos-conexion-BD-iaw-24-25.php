<?php 

$BD_servidor="localhost";
$BD_usuario="root";
$BD_clave="";//password del usuario $DB_usuario
$BD_baseDatos="iaw-24-25";
$BD_puerto=3306;


function consultaSQL($idCon,$SQL) {
	$resultado=@mysqli_query($idCon,$SQL) or die("
		<p class='error'>Error en sentencia SQL : <strong>$SQL</strong></p>
		<p class='error'>Error nº: <strong>".mysqli_errno($idCon)."</strong></p>
		<p class='error'>Descripción: <strong>".mysqli_error($idCon)."</strong></p>");

	return $resultado;
}


$c=@mysqli_connect($BD_servidor,$BD_usuario,$BD_clave,$BD_baseDatos,$BD_puerto) or die("<p>Error conectando con el servidor de bases de datos $BD_servidor</p>");

$SQL="SET NAMES 'utf8'";
consultaSQL($c,$SQL);

?>