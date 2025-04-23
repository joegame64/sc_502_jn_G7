<?php
// Función para limpiar el nombre del archivo (elimina tildes, caracteres especiales y espacios)
function limpiarNombreArchivo($cadena) {
    // Convertir los caracteres acentuados y especiales a su equivalente sin acento o símbolo
    $cadena = iconv('UTF-8', 'ASCII//TRANSLIT', $cadena);
    
    // Eliminar espacios
    $cadena = str_replace(' ', '', $cadena);

    // Eliminar caracteres no alfanuméricos (excepto letras y números)
    $cadena = preg_replace('/[^a-zA-Z0-9]/', '', $cadena);

    // Convertir toda la cadena a minúsculas
    $cadena = strtolower($cadena);

    return $cadena; // Devolver la cadena procesada
}
?>
