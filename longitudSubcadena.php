<?php
/*
Escribe una función en PHP que tome una cadena como entrada y 
devuelva la longitud de la subcadena más larga
que no contiene caracteres repetidos.
*/

function longitudSubcadenaSinRepetidos ($cadena){
    // Verifica que la entrada sea una cadena.
    if (!is_string($cadena)){
        return "La entrada NO es una cadena";
    }
	// Usa un algoritmo de deslizamiento de ventana (sliding window)
    // para encontrar la subcadena más larga sin caracteres repetidos.
	$n = strlen($cadena);
    $maxLength = 0;
    $start = 0;
    $charIndexMap = [];

    for ($end = 0; $end < $n; $end++) {
        $char = $cadena[$end];
        
        if (isset($charIndexMap[$char]) && $charIndexMap[$char] >= $start) {
            $start = $charIndexMap[$char] + 1;
        }

        $charIndexMap[$char] = $end;
        $maxLength = max($maxLength, $end - $start + 1);
    }
    // Devuelve la longitud de esta subcadena.
    return $maxLength;
}

// Prueba la función
$cadena1 = "abcabcbb";
$cadena2 = "bbbbb";
$cadena3 = "pwwkew";

echo "La longitud de la subcadena más larga sin caracteres repetidos en '$cadena1' es: " . longitudSubcadenaSinRepetidos($cadena1) . "\n"; // Debería mostrar: 3
echo "La longitud de la subcadena más larga sin caracteres repetidos en '$cadena2' es: " . longitudSubcadenaSinRepetidos($cadena2) . "\n"; // Debería mostrar: 1
echo "La longitud de la subcadena más larga sin caracteres repetidos en '$cadena3' es: " . longitudSubcadenaSinRepetidos($cadena3) . "\n"; // Debería mostrar: 3
?>