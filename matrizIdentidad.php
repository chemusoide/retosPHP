<?php

function generarMatrizIdentidad($n) {
    // Verificar que el número sea un entero positivo
    if (!is_int($n) || $n <= 0) {
        return "El número debe ser un entero positivo.";
    }

    // Crear la matriz de tamaño n x n inicializada con ceros
    $matriz = array_fill(0, $n, array_fill(0, $n, 0));

    // Llenar la diagonal principal con unos
    for ($i = 0; $i < $n; $i++) {
        $matriz[$i][$i] = 1;
    }

    // Devolver la matriz resultante
    return $matriz;
}

// Función para imprimir la matriz de una manera legible
    function imprimirMatriz($matriz) {
        if (is_array ($matriz)) {
            echo $matriz;
        }
        foreach ($matriz as $fila) {
            echo implode(" ", $fila) . "\n";
        }
    }

// Prueba la función con varios ejemplos
$n1 = 3;
$matrizIdentidad1 = generarMatrizIdentidad($n1);
echo "Matriz identidad de tamaño $n1 x $n1:\n";
imprimirMatriz($matrizIdentidad1);
echo "\n";

$n2 = 5;
$matrizIdentidad2 = generarMatrizIdentidad($n2);
echo "Matriz identidad de tamaño $n2 x $n2:\n";
imprimirMatriz($matrizIdentidad2);
echo "\n";

$n3 = 1;
$matrizIdentidad3 = generarMatrizIdentidad($n3);
echo "Matriz identidad de tamaño $n3 x $n3:\n";
imprimirMatriz($matrizIdentidad3);
echo "\n";

$n4 = -1;
$matrizIdentidad3 = generarMatrizIdentidad($n4);
echo "Matriz identidad de tamaño $n4 x $n4:\n";
imprimirMatriz($matrizIdentidad4);
echo "\n";

?>