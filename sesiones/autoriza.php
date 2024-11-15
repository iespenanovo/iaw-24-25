<?php
//
session_start();


//leemos los parámetros del login
$usuario=$_POST['usuario']??"";
$clave=$_POST['clave']??"";

//definimos las credenciales correctas (lo usual es consultar a la BD)
/*
echo "<hr>hash para contraseña 'Abc123..', md5 y crypt ";
$claveBD=hash('md5', 'Abc123..');
echo "<hr>$claveBD<hr>";
$claveBD=@crypt('Abc123..');
echo "$claveBD<hr>";
exit;
*/

$usuarioBD="ana";
$claveBD='$1$guVNiH7s$mEOwOxo2l7s1SQs2UAip7.'; //valor de un hash crypt válido para 'Abc123..'

$credenciales=true;

if ($usuario==$usuarioBD) {
	//el usuario existe
       if (password_verify($clave, $claveBD)) {//credenciales correctas con hash crypt
       //if($claveBD==hash('md5', $clave)) { //credenciales correctas con hash md5
            $_SESSION['usuario']="$usuario";//estamos creando sesión , incluyendo un valor, en este caso, el nombre usuario.
            $_SESSION['tiempo']=time(); //podemos incluir los valor que queramos ...., con uno es suficiente.
        } else {
            $credenciales=false;
        }
    } else {

        $credenciales=false;
    }

    if($credenciales) {
        //echo "<p>Credenciales correctas</p>";
        header("Location:panel-usuario.php");
        exit();

    } else {
        //echo "<p class='error'>Credenciales incorrectas. <a href='login.php'>Volver a intentar</a></p>";
        header("Location:login.php?op=error");
        exit();

    }

?>
