<?php

    class conectar{

        public static function conexion(){
            $conexion=new mysqli("localhost","root","","agenda");
            $conexion->set_charset("utf8");
            return $conexion;
        }

    }

?>