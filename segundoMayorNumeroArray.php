<?php
/*
Escribe una función en PHP que tome un array de números como entrada
y devuelva el segundo mayor número en ese array.
Si el array tiene menos de dos elementos, la función debería devolver null.
*/

function segundoMayor($array) {
    // Verifica si el array tiene al menos dos elementos
    if (count($array) < 2) {
        return null;
    }
    
    // Elimina duplicados y ordena el array en orden descendente
    $array = array_unique($array);
    rsort($array);
    
    // Verifica nuevamente si hay al menos dos elementos únicos
    if (count($array) < 2) {
        return null;
    }
    
    // Devuelve el segundo mayor número
    return $array[1];
}

// Prueba la función con varios ejemplos
$arrays = [
    [3, 5, 1, 9, 2],
    [7, 7, 7, 7],
    [10],
    [3, 3, 4, 5, 6, 7, 8, 8, 9],
    [15, 20, 20, 20, 10],
];

foreach ($arrays as $array) {
    $resultado = segundoMayor($array);
    if ($resultado !== null) {
        echo "El segundo mayor número en " . implode(", ", $array) . " es: $resultado\n";
    } else {
        echo "No se pudo encontrar un segundo mayor número en " . implode(", ", $array) . "\n";
    }
}
?>