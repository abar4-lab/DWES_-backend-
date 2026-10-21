<?php
function usuarioOk($usuario, $contraseña) :bool {

   if (strlen($usuario) < 8 ){
      return false;
   }
   if ($contraseña !== strrev($usuario)){
      return false;
   }
   return true;
   }
   

   function contarPalabras($texto) :int {
   return str_word_count($texto);
}

function letraMasRepetida($texto){
   // convertir todo en minúsculas para no diferenciar caracteres
   $texto=strtolower($texto);

   // array contador
   $contador = [];
   for ($i = 0; $i < strlen($texto); $i++){
      $letra = $texto[$i];

      // omitimos caracteres que no sean letras
      if ($letra >= 'a' && $letra <= 'z'){
         if (isset($contador[$letra])){
            $contador[$letra]++;
            //si ya existe sumamos 1
         } else {
            $contador[$letra]=1;
            //si es nueva establecems en 1
         }
      }
   }

   // Buscamos cuál es el número mas alto
   $maximo = 0;
   $letraganadora = "None";

   foreach ($contador as $letra => $cantidad){
      if ($cantidad > $maximo){
         $maximo = $cantidad;
         $letraganadora = $letra;
      }
   }

   return $letraganadora;
}

function palabraMasRepetida($texto) {
    $texto = strtolower($texto);
    
    // Convertimos el texto en un array de palabras usando str_word_count básico
    $palabras = str_word_count($texto, 1);
    
    // Creamos un mapa/array para ir contando las palabras
    $contador = [];
    
    // Recorremos el array de palabras
    foreach ($palabras as $palabra) {
        if (isset($contador[$palabra])) {
            $contador[$palabra]++; // Si ya existía, sumamos 1
        } else {
            $contador[$palabra] = 1; // Si es nueva, empezamos en 1
        }
    }
    
    // Buscamos la palabra con el número más alto de repeticiones
    $maximo = 0;
    $palabraGanadora = "None";
    
    foreach ($contador as $palabra => $cantidad) {
        if ($cantidad > $maximo) {
            $maximo = $cantidad;
            $palabraGanadora = $palabra;
        }
    }
    
    return $palabraGanadora;
}

