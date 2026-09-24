<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <code style= "font-family: monospace;">
        <?php
    // 1. Generar un número al azar entre 1 y 9
    $numero = rand(1, 9);
    echo "Número generado: $numero<br><br>";
        $row =1;
        while ($row <= $numero) {
            // imprimir espacios en blanco a la izquierda
            for ($space = 1; $space <= $numero - $row; $space++) {
                echo "  ";
            }
            // imprimir el asterisco correspondiente al nivel actual
            echo "*";
            $row++;
        }
        ?>
    </code>
</body>
</html>