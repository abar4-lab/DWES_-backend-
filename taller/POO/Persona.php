<?php

    class Persona {
        private int $edad;
        public string $nombre;

        static int $numPersonas;


        static function mensajeEdad (int $años):string {
            if ($años < 18){
                return "Precio infantil ";
            } else if ( $años < 30){
                return "Precio Joven ";
            } else {
                return " Precio Adulto";
            }
        }

        function cumplirAños ():void {
            $this->edad++;
        }

        function __construct($edad,$nombre)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
            self::$numPersonas++;
        }

        function __destruct()
        {
            echo " Palmó".$this->nombre;
            self::$numPersonas--;
        }

        function __toString()
        {
            return $this->nombre."(".$this->edad.")";
        }

        function __get(string $atributo)
        {
            if ($atributo == "nombre"){
                return "Anónimo";
            }
        }

        function __set(string $atributo,mixed $value)
        {
            if ($atributo == "edad" && $value < 100){
                $this->edad = $value;
            }
        }

    }


    $pepe = new Persona(25,"Pepe Luis");
    $pepe->cumplirAños();
    //print_r($pepe);
    echo $pepe."\n";
    echo " nombre es ". $pepe->nombre."\n";
    echo " Edad es ". $pepe->edad."\n";
    $pepe->nombre = 320;

    echo Persona::mensajeEdad(8)."\n";
    echo $numPersonas;
    


?>