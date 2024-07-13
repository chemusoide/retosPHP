<?php

function numeroMasFrecuente($array) {
    // Verifica si el array está vacío
    if (empty($array)) {
        return null;
    }
    
    // Inicializa el array asociativo para contar frecuencias
    $frecuencias = [];
    
    // Recorre el array y cuenta las frecuencias de cada número
    foreach ($array as $numero) {
        if (array_key_exists($numero, $frecuencias)) {
            $frecuencias[$numero]++;
        } else {
            $frecuencias[$numero] = 1;
        }
    }
    
    // Encuentra el número con la mayor frecuencia
    $numeroMasFrecuente = null;
    $maxFrecuencia = 0;
    foreach ($frecuencias as $numero => $frecuencia) {
        if ($frecuencia > $maxFrecuencia) {
            $maxFrecuencia = $frecuencia;
            $numeroMasFrecuente = $numero;
        }
    }
    
    // Devuelve el número más frecuente
    return $numeroMasFrecuente;
}

// Prueba la función con varios ejemplos
$arrays = [
    [1, 3, 1, 3, 2, 1],
    [5, 5, 5, 5, 1, 2, 3, 4, 1, 2],
    [7, 7, 7, 8, 8, 8],
    [],
    [1]
];

foreach ($arrays as $array) {
    $resultado = numeroMasFrecuente($array);
    if ($resultado !== null) {
        echo "El número más frecuente en " . implode(", ", $array) . " es: $resultado\n";
    } else {
        echo "El array está vacío o no tiene números frecuentes.\n";
    }
}

?>