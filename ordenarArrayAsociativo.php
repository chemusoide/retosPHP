<?php
/*Escribe una función en PHP que tome un array asociativo como entrada y
lo ordene en orden ascendente por sus valores.
La función debe mantener las claves asociadas a sus valores correspondientes.*/

function ordenarArray ($array){

    // Verifica que el parámetro sea un array
    if (!is_array($array)) {
        return "El valor de entrada NO es un Array";
    }

    // Verifica que el input es un array asociativo.
    // Un array es asociativo si al comparar sus claves con un array secuencial, no coinciden.
    $secuencial = array_keys($array) === range(0, count($array) - 1);
    if ($secuencial) {
        return "El valor de entrada NO es un array asociativo, es un array secuencial";
    }
    
    // Usar una función de ordenamiento para ordenar el array por sus valores manteniendo la asociación con sus claves.
    asort($array);
    
    // Devuelve el array ordenado.
    return $array;

}

// Función para imprimir el array de una manera legible
function imprimirArray($array) {
    if (is_array($array)) {
        print_r($array);
    } else {
        echo $array . "\n";
    }
}

// Pruebas
$noArray = "Prueba"; // NO array
$array1 = [1, 2, 3, 4]; // Array secuencial
$array2 = ["a" => 1, "b" => 2, "c" => 3]; // Array asociativo
$array3 = [0 => 1, 2 => 2, 3 => 3]; // Array secuencial no continuo
$array4 = ["a" => 2, "b" => 1, "c" => 3]; // Array asociativo No ordenado

echo "Prueba uno NO array:\n";
imprimirArray(ordenarArray($noArray));
echo "\n";

echo "Prueba con array secuencial:\n";
imprimirArray(ordenarArray($array1));
echo "\n";

echo "Prueba con array asociativo:\n";
imprimirArray(ordenarArray($array2));
echo "\n";

echo "Prueba con array secuencial no continuo:\n";
imprimirArray(ordenarArray($array3));
echo "\n";

echo "Prueba con Array asociativo No ordenado:\n";
imprimirArray(ordenarArray($array4));
echo "\n";

?>