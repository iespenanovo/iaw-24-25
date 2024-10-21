<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validar Formularios con php)</title>
	<link rel="stylesheet" href="css/11-estilo.css">
</head>
<body>
	<?php
		//var_dump($_POST);
		$nombre=$_POST['nombre']??"";//devuelve el campo 'nombre' del formulario, si existe, en caso contrario devuelve cadena vacía ""
		//la variable no es obligatorio que tenga el mismo nombre que el campo, aunque es una buena práctica
		$email=$_POST['email']??"";
		$edad=$_POST['edad']??"";
		$fnac=$_POST['fnac']??"";
		$sexo=$_POST['sexo']??"";
		$terminos=$_POST['terminos']??"";
		$prov=$_POST['prov']??"";
		$dep=$_POST['dep']??array();//si no existe dep, creamos un array vacío
		$coment=$_POST['coment']??"";
		$ref=$_POST['ref']??"";// ref es campo oculto, también podemos leer
		//var_dump($ref);
	?>
	<div class="contenedor">
		<h1>Validar formularios con PHP</h1>
		<form action="" method="POST"> 
			<!-- method="POST", no se visualizan en URL los campos-->
			<fieldset>
				<legend>Grupo 1</legend>

				<div class="campo">
					<label for="nombre">Nombre:</label>
					<input id="nombre" type="text" name="nombre" value="<?php echo $nombre ?>" >
					<!-- parámetro: placeholder="Nombre" -->
					<!-- value="valor por defecto" -->
				</div>
				<div class="campo">
					<label for="email">E-mail:</label>
					<input id="email" type="email" name="email" value="<?php echo $email ?>">
				</div>
				<div class="campo">
					<label for="edad">Edad (años):</label>
					<input id="edad" type="number" name="edad" value="<?php echo $edad ?>">
				</div>
				<div class="campo">
					<label for="fnac">Fecha nacimiento:</label
					>
					<input type="date" name="fnac" id="fnac" value="<?php echo $fnac ?>">
				</div>
				
			</fieldset>
			<fieldset>
				<legend>Grupo 2</legend>
				<div class="campo">
					<label class="bloque">Sexo:</label>
					<input id="mujer" type="radio" name="sexo" value="M" <?php echo $sexo=="M"?"checked":"" ?>>
					<!-- checked para selección por defecto -->
					<label for="mujer">Mujer</label>
					<input id="hombre" type="radio" name="sexo" value="H" <?php echo $sexo=="H"?"checked":"" ?>>
					<label for="hombre">Hombre</label>
				</div>
				<div class="campo">
					<input id="terminos" type="checkbox" name="terminos" value="SI" <?php echo $terminos=="SI"?"checked":"" ?> >
					<!-- checked para selección por defecto -->
					<label for="terminos">Acepto términos y condiciones</label>
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
				<div class="campo">
					<label for="dep">Deportes:</label>
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

			<div class="campo">
				<input type="submit" value="Enviar datos">
			</div>
			
		</form>		
	</div>
</body>
</html>