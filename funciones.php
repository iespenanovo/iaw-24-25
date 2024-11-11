<?php
function validarNIF($nif) {
    // Eliminar espacios en blanco
    $nif = strtoupper(trim($nif));

    // Comprobar longitud y formato
    if (strlen($nif) != 9 or !preg_match('/^[0-9]{8}[A-Z]$/', $nif)) {
        return false;
    }

    // Extraer número y letra
    $numero = substr($nif, 0, 8);
    $letra = substr($nif, -1);

    // Letras de control
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";

    // Calcular letra esperada
    $letraEsperada = $letras[$numero % 23];

    // Comparar letras
    return $letra === $letraEsperada;
}


?>