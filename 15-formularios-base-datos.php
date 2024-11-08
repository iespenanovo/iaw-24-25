<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validar Formularios con php)</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/11-estilo.css">
</head>
<body>
	<?php

		//var_dump($_POST);
		$nombre=$_POST['nombre']??"";
		$nif=$_POST['nif']??"";
		$clave=$_POST['clave']??"";
		$sexo=$_POST['sexo']??"";
		$dep=$_POST['dep']??array();//si no existe dep, creamos un array vacío
		$prov=$_POST['prov']??"";
		$so=$_POST['so']??array();//si no existe so, creamos un array vacío
		$coment=$_POST['coment']??"";

		$errores="";
	?>
	<div class="contenedor">
		<h1>Validar formularios con PHP</h1>
		<form action="" method="POST"> 
			<!-- method="POST", no se visualizan en URL los campos-->
			<fieldset>
				<legend>Grupo 1</legend>

				<?php 
					$clases="";
					if ($_POST and $nombre=="") {//$_POST devuelve false si el formulario no fue enviado, y true en caso contrario
						$clases="error";
						$errores.="\n<p>El campo nombre es obligatorio</p>";
					}
				?>
				<div class="campo">
					<label for="nombre" class="<?php echo $clases ?>">*Nombre:</label>
					<input id="nombre" type="text" name="nombre" value="<?php echo $nombre ?>" >
					<!-- parámetro: placeholder="Nombre" -->
					<!-- value="valor por defecto" -->
				</div>
				<?php 
					$clases="";
					if ($_POST and $nif=="") {
						$clases="error";
						$errores.="\n<p>El campo nif es obligatorio</p>";
					}
				?>				
				<div class="campo">
					<label for="nif" class="<?php echo $clases ?>">*NIF:</label>
					<input id="nif" type="text" name="nif" value="<?php echo $nif ?>">
				</div>

				<?php 
					$clases="";
					if ($_POST and $clave=="") {
						$clases="error";
						$errores.="\n<p>El campo clave es obligatorio</p>";
					}
				?>
				<div class="campo">
					<label for="clave" class="<?php echo $clases ?>">*Contraseña:</label
					>
					<input type="date" name="clave" id="clave" value="<?php echo $clave ?>">
				</div>
				
			</fieldset>
			<fieldset>
				<legend>Grupo 2</legend>
				<?php 
					$clases="";
					if ($_POST and $sexo=="") {
						$clases="error";
						$errores.="\n<p>El campo sexo es obligatorio</p>";
					}
				?>	
				<div class="campo">
					<label class="bloque <?php echo $clases ?>">*Sexo:</label>
					<input id="mujer" type="radio" name="sexo" value="M" <?php echo $sexo=="M"?"checked":"" ?>>
					<!-- checked para selección por defecto -->
					<label for="mujer">Mujer</label>
					<input id="hombre" type="radio" name="sexo" value="H" <?php echo $sexo=="H"?"checked":"" ?>>
					<label for="hombre">Hombre</label>
				</div>
				<?php 
					$clases="";
					if ($_POST and $terminos=="") {
						$clases="error";
						$errores.="\n<p>Es necesario aceptar las condiciones</p>";
					}
				?>				
				<div class="campo">
					<input id="terminos" type="checkbox" name="terminos" value="SI" <?php echo $terminos=="SI"?"checked":"" ?> >
					<!-- checked para selección por defecto -->
					<label for="terminos" class="<?php echo $clases ?>">*Acepto términos y condiciones</label>
				</div>
			</fieldset>
			<fieldset>
				<legend>Grupo 3</legend>
				<div class="campo">
					<label for="prov">Provincia:</label
					>
					<select name="prov" id="prov">
						<option value=""></option>
						<option value="CO" <?php echo $prov=="CO"?"selected":"" ?> >A Coruña</option>
						<option value="LU" <?php echo $prov=="LU"?"selected":"" ?> >Lugo</option>
						<option value="OU" <?php echo $prov=="OU"?"selected":"" ?> >Ourense</option>
						<option value="PO" <?php echo $prov=="PO"?"selected":"" ?> >Ponteveddra</option>
						<!-- selected, parámetro para seleccionar una opción por defecto -->
					</select>
				</div>
				<?php 
					$clases="";
					if ($_POST and count($dep)<2) { //'count()' devuelve el número de elementos del array '$dep'
						$clases="error";
						$errores.="\n<p>Es obligatorio marcar un mínimo de 2 deportes </p>";
					}
				?>					
				<div class="campo">
					<label for="dep" class="<?php echo $clases ?>">*Deportes:</label>
					<select name="dep[]" id="dep" multiple size="6">
						<!-- size permite indicar el número de opciones que se visualizan sin necesidad de 'scroll', por defecto se visualizan solo 4/5 opciones -->

						<option value="F" <?php echo in_array("F", $dep)?"selected":"" ?> >Fútbol</option>
						<option value="B" <?php echo in_array("B", $dep)?"selected":"" ?> >Baloncesto</option>
						<option value="T" <?php echo in_array("T", $dep)?"selected":"" ?> >Ténis</option>
						<option value="P" <?php echo in_array("P", $dep)?"selected":"" ?> >Polo</option>
						<option value="C" <?php echo in_array("C", $dep)?"selected":"" ?> >Ciclismo</option>
						<option value="G" <?php echo in_array("G", $dep)?"selected":"" ?> >Golf</option>
					</select>
				</div>
			</fieldset>
			<fieldset>
				<legend>Grupo 4</legend>
				<div class="campo">
					<label class="bloque" for="coment">Comentario:</label>
					<textarea name="coment" id="coment"><?php echo $coment ?></textarea>
				</div>
			</fieldset>
			<input type="hidden" value="ref123" name="ref">

			<?php 
			if($_POST){ //si el formulario fue enviado
				if($errores!="") {
					echo "\n<div class='alert alert-danger' role='alert'>$errores</div>";
					echo "\n<div class='campo'>\n\t<input type='submit' value='Enviar datos'>\n</div>";
				} else { echo "<div class='alert alert-success' role='alert'>
									Formulario aceptado <a href='' class='btn btn-success'>Nuevo registro</a>
							   </div>";
						 enviarDatosFichero($nombre,$email,$edad,$fnac,$sexo,$terminos,$prov,$dep,$coment);

				}
			} else {
				echo "\n<div class='campo'>\n\t<input type='submit' value='Enviar datos'>\n</div>";
			}
			?>
			
		</form>		
	</div>
</body>
</html>