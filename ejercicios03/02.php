/*

Crear un array que almacene 5 cadenas con el nombre de periódicos y sus enlaces para acceder. 
El array será asociativo con el nombre del periódico como clave y su URL como valor.

*/

<?php
    $periodicos = [
        "El País" => "https://www.elpais.com",
        "La Vanguardia" => "https://www.lavanguardia.com",
        "El Mundo" => "https://www.elmundo.es",
        "ABC" => "https://www.abc.es",
        "20 Minutos" => "https://www.20minutos.es"
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Periódicos</h1>
    <ul>
        <?php foreach ($periodicos as $nombre => $url): ?>
            <li>
                <a href="<?php echo $url; ?>" target="_blank"><?php echo $nombre; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>