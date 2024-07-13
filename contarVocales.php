<?php
/* 
Escribe una función en PHP que tome una cadena como entrada y devuelva un array asociativo
que contenga el conteo de cada vocal (a, e, i, o, u)  en la cadena.
La función debe ser insensible a mayúsculas y minúsculas.
*/

function contarVocales($cadena) {
    // Convierte la cadena a minúsculas
    $cadena = strtolower($cadena);
    
    // Inicializa el array asociativo para contar vocales
    $conteoVocales = [
        'a' => 0,
        'e' => 0,
        'i' => 0,
        'o' => 0,
        'u' => 0,
    ];
    
    // Recorre la cadena y cuenta las vocales
    for ($i = 0; $i < strlen($cadena); $i++) {
        $letra = $cadena[$i];
        if (array_key_exists($letra, $conteoVocales)) {
            $conteoVocales[$letra]++;
        }
    }
    
    // Devuelve el array asociativo con los conteos de vocales
    return $conteoVocales;
}

// Prueba la función con varios ejemplos
$cadenas = [
    "Hola Mundo",
    "PHP es divertido",
    "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
    "aaa eee iii ooo uuu",
];

foreach ($cadenas as $cadena) {
    $result = contarVocales($cadena);
    echo "En la cadena \"$cadena\":\n";
    print_r($result);
    echo "\n";
}
?>