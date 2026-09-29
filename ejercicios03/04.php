/*

Crear una carpeta que se llame img y copiar en ella 5 ficheros de imágenes 
que muestre el logo de un deporte. 
Crear una array asociativo que almacene como clave el nombre del deporte 
y como valor la dirección de la imagen.

*/

<?php
    $deportes = [
        "Fútbol" => "img/futbol.png",
        "Baloncesto" => "img/baloncesto.png",
        "Tenis" => "img/tenis.png",
        "Natación" => "img/natacion.png",
        "Ciclismo" => "img/ciclismo.png"
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
    <table border="1" bordercolor="black" borderpadding="10" cellspacing="0">
        <tr>
            <th>Deporte</th>
            <th>Logo</th>
        </tr>
        <?php foreach ($deportes as $deporte => $imagen): ?>
            <tr>
                <td><?php echo $deporte; ?></td>
                <td><img src="<?php echo $imagen; ?>" alt="<?php echo $deporte; ?>" width="100"></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>