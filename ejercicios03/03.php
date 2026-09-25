/*

Elegir a azar uno de los cinco medios y  mostrar el enlace seleccionado.

*/

<?php
    $periodicos = [
        "El País" => "https://www.elpais.com",
        "La Vanguardia" => "https://www.lavanguardia.com",
        "El Mundo" => "https://www.elmundo.es",
        "ABC" => "https://www.abc.es",
        "20 Minutos" => "https://www.20minutos.es"
    ];

    // Elegir un periódico al azar
    $periodico_seleccionado = array_rand($periodicos);
    $url_seleccionada = $periodicos[$periodico_seleccionado];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<h1>Periódico seleccionado al azar</h1>"; ?>
    <?php echo "<p>El medio recomendado es: <a href='$url_seleccionada' target='_blank'>$periodico_seleccionado</a></p>"; ?>
    
</body>
</html>