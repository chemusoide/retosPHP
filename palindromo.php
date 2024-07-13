<?php
/*función en PHP que tome una cadena como entrada y devuelva true si la cadena es un palíndromo
(se lee igual de adelante hacia atrás que de atrás hacia adelante) y false en caso contrario.
La función debe ignorar los espacios, signos de puntuación y ser insensible a mayúsculas y minúsculas.*/

function esPalindromo($cadena) {
    // Normalizar la cadena: eliminar espacios, signos de puntuación y convertir a minúsculas
    $cadena = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $cadena));
    
    // Comprobar si la cadena normalizada es igual a su versión invertida
    return $cadena === strrev($cadena);
}

// Prueba la función con varios ejemplos
$cadena1 = "A man, a plan, a canal, Panama";
$cadena2 = "Hello, World!";
$cadena3 = "No 'x' in Nixon";
$cadena4 = "Was it a car or a cat I saw?";

echo esPalindromo($cadena1) ? "true\n" : "false\n"; // Debería mostrar: true
echo esPalindromo($cadena2) ? "true\n" : "false\n"; // Debería mostrar: false
echo esPalindromo($cadena3) ? "true\n" : "false\n"; // Debería mostrar: true
echo esPalindromo($cadena4) ? "true\n" : "false\n"; // Debería mostrar: true

?>