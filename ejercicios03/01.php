/* 

Rellenar un array con 20 números aleatorios entre 1 y 10 
y mostrar el contenido del array  mediante una tabla de una fila en HMTL. 
Mostrar a continuación el valor máximo, el mínimo y el  valor que mas veces se repite. 
(Nota definir funciones para cada caso)

*/

<?php
        // Rellenar el array con 20 números aleatorios entre 1 y 10
        $numeros = [];
        for ($i = 0; $i < 20; $i++) {
            $numeros[] = rand(1, 10);
        }
        
        // Función para obtener el valor máximo
        function obtenerMaximo($array) {
            return max($array);
        }

        // Función para obtener el valor mínimo
        function obtenerMinimo($array) {
            return min($array);
        }

        // Función para obtener el valor que más veces se repite
        function obtenerModa($array) {
            $frecuencias = array_count_values($array);
            arsort($frecuencias);
            return key($frecuencias);
        }

        $maximo = obtenerMaximo($numeros);
        $minimo = obtenerMinimo($numeros);
        $moda = obtenerModa($numeros);

    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ01</title>
</head>
<body>
    
    <h1>Array de números aleatorios</h1>
    <table border="1">
        <tr>
            <?php foreach ($numeros as $pos): ?>
                <td><?php echo $pos; ?> </td>
            <?php endforeach; ?>
        </tr>
    </table>

    <p>Valor máximo: <?php echo $maximo; ?></p>
    <p>Valor mínimo: <?php echo $minimo; ?></p>
    <p>Valor que más veces se repite: <?php echo $moda; ?></p>

</body>
</html>
