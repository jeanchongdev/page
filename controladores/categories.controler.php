<?php

Class ControladorCategorias{

    public static function ctrMostrarCategorias($item, $valor){

        $tabla = "categorias";
        $respuesta = ModeloCategorias::mdlMostrarCategorias($tabla, $item, $valor);
        return $respuesta;

    }

    public static function ctrMostrarSubcategorias($item, $valor){
        $tabla = "subcategorias";
        $respuesta = ModeloCategorias::mdlMostrarSubcategorias($tabla, $item, $valor);
        return $respuesta;
    }


}