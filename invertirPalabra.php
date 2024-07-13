<?php
/*
Escribe una función en PHP que tome una cadena de texto como entrada y
devuelva la misma cadena con las palabras en orden inverso.
Por ejemplo, si la entrada es “Hola mundo desde PHP”, 
la salida debería ser “PHP desde mundo Hola”.
*/

/**
 * Invierte el orden de las palabras en una frase.
 *
 * @param string $frase La frase a invertir.
 * @return string La frase con el orden de las palabras invertido.
 */
function invertirPalabras($frase) {
    // Inicializa las variables
    $palabras = []; // Array para almacenar las palabras separadas de la frase
    $palabrasInvertidas = []; // Array para almacenar las palabras en orden invertido
    $fraseInvertida = ''; // Cadena para almacenar la frase invertida

    // Divide la frase en palabras utilizando el espacio como delimitador
    $palabras = explode(' ', $frase);
    
    // Invierte el orden de las palabras en el array
    $palabrasInvertidas = array_reverse($palabras);
    
    // Une las palabras invertidas en una cadena utilizando el espacio como separador
    $fraseInvertida = implode(' ', $palabrasInvertidas);
    
    // Devuelve la frase invertida
    return $fraseInvertida;
}

// Prueba la función con un ejemplo
$frase = "Hola mundo desde PHP";
echo invertirPalabras($frase); // Debería mostrar: "PHP desde mundo Hola"

?>