<?php

require_once "conexion.php";

Class ModeloTemplate{

    static public function mdlEstiloTemplate($tabla): mixed{

        $stmt = Conexion::conectar()->prepare(query: "SELECT * FROM $tabla");

        $stmt -> execute();
        
        return $stmt -> fetch();

    }

}