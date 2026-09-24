<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1. Generar un número al azar entre 1 y 9
    $numero = rand(1, 9);
    echo "Número generado: $numero<br><br>";

    // 2. Bucle externo: controla las filas de la escalera
    for ($i = 1; $i <= $numero; $i++) {
        // Alternar colores según si el nivel es par o impar
        $color = ($i % 2 == 0) ? "blue" : "red";
    
        // Abrir la etiqueta HTML para darle color a la línea actual
        echo "<span style='color: $color;'>";
    
    // 3. Bucle interno: imprime el número $i exactamente $i veces
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    
    // Cerrar la etiqueta y saltar de línea
    echo "</span><br>\n";
}
?>

    
</body>
</html>