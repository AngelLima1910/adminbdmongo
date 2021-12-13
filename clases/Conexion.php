<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/adminbdmongo/vendor/autoload.php";
    class Conexion {
        public static function conectar(){
            $servidor = "127.0.0.1";
            $puerto = "27017";
            $usuario = "angel";
            $password = "1234";
            $BD = "crudmongo";
            // Crea algo como mongodb://angel:1234@127.0.0.1:27017/crudmongo
            $cadenaConexion = "mongodb://" . $usuario . ":" . $password . "@" . $servidor . ":" . $puerto . "/" . $BD;
            try {
                $cliente = new MongoDB\Client($cadenaConexion) ;
                return $cliente->selectDatabase($BD);
            } catch (\Throwable $th) {
                return $th;
            }
        }
    }
    
?>