/*
Realizar un programa en PHP que muestre un posible resultado de la bonoloto: 
Se presentarán 6 números obtenidos aleatoriamente en el rango de 1 a 49 (ambos inclusive) 
Los 5 primeros forman la jugada ganadora 
y deberán presentar ordenados de menor a mayor en una tabla html; 
el sexto es el número complementario.  
Por supuesto los números no pueden repetirse.
*/

<?php
    $numeros = [];

    while (count($numeros) < 6) {
        $numero = rand(1, 49);
        if (!in_array($numero, $numeros)) {
            $numeros[] = $numero;
        }
    }

    sort($numeros);
    $complementario = array_pop($numeros);

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
            <?php foreach ($numeros as $pos): ?>
                <td><?php echo $pos; ?> </td>
            <?php endforeach; ?>
            <td>Complementario: <?php echo $complementario; ?></td>
        </tr>
    </table>
</body>
</html>