<?php
require_once("BiciElectrica.php");

/**
 * Lee el fichero CSV y devuelve un array de objetos BiciElectrica.
 */
function cargarbicis(): array
{
    $fich = @fopen("Bicis.csv", "r");
    if ($fich == false) {
        die("Error al abrir el fichero");
    }
    $tabla = [];

    while ($valor = fgetcsv($fich)) {
        if (count($valor) < 5) continue; // Evitar líneas vacías o erróneas
        list($id, $cx, $cy, $bat, $op) = $valor;
        $bici = new BiciElectrica($id, $cx, $cy, $bat, $op);
        $tabla[] = $bici;
    }
    fclose($fich);

    return $tabla;
}

/**
 * Devuelve una cadena con la tabla HTML de bicicletas operativas.
 */
function mostrartablabicis($tabla): string
{
    $cadena = "<table><tr><th>Id</th><th>Coord X</th><th>Coord Y</th><th>Bateria</th></tr>";
    
    foreach ($tabla as $bici) {
        // Solo mostramos las bicicletas que estén operativas (operativa == true)
        if ($bici->operativa == true) {
            $cadena .= "<tr>";
            $cadena .= "<td>" . $bici->id . "</td>";
            $cadena .= "<td>" . $bici->coordx . "</td>";
            $cadena .= "<td>" . $bici->coordy . "</td>";
            $cadena .= "<td>" . $bici->bateria . "%</td>";
            $cadena .= "</tr>";
        }
    }
    
    $cadena .= "</table>";

    return $cadena;
}

/**
 * Devuelve la bicicleta operativa con menor distancia a las coordenadas del usuario.
 * @param $x - Coordenada X del usuario
 * @param $y - Coordenada Y del usuario
 * @param $tabla - Array de objetos Bicicleta
 * @return BiciElectrica|null - Objeto de la bicicleta más cercana o null si no hay disponibles
 */
function bicimascercana($x, $y, $tabla)
{
    $bicicerca = null;
    $menordistancia = PHP_FLOAT_MAX;

    foreach ($tabla as $bici) {
        // Solo evaluamos bicicletas que estén operativas
        if ($bici->operativa == true) {
            $dist = $bici->distancia($x, $y);
            if ($dist < $menordistancia) {
                $menordistancia = $dist;
                $bicicerca = $bici;
            }
        }
    }
    
    return $bicicerca;
}