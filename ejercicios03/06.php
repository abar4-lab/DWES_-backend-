/*
Incluir el archivo infopaises.php en un programa php (06.php) 
que me muestre el país que tiene mas población y el nombre de sus ciudades. 
El programa debe buscar en las tablas. 
Hacer otra versión (06v2.php) que ordene el array de países usando funciones de la librería y 
me muestre directamente la última posición, donde debe estar el máximo.
*/

<?php
    $paises = [];
    require_once 'infopaises.php';

    // Encontrar el país con la mayor población
    $paisMaxPoblacion = null;
    $maxPoblacion = 0;

    foreach ($paises as $pais => $info) {
        if ($info['Poblacion'] > $maxPoblacion) {
            $maxPoblacion = $info['Poblacion'];
            $paisMaxPoblacion = $pais;
        }
    }

    // Obtener las ciudades del país con mayor población
    $ciudades = isset($paises[$paisMaxPoblacion]['ciudades']) ? $paises[$paisMaxPoblacion]['ciudades'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>País con más población</h1>
    <p><?php echo $paisMaxPoblacion; ?></p>
    <table>
        <tr>
            <?php foreach ($ciudades[$paisMaxPoblacion] as $ciudad): ?>
                <td> <?php echo $ciudad ?></td>
            <?php endforeach; ?>
        </tr>
    </table>
</body>
</html>