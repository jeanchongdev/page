<?php

class ControladorPlantilla{

	/*=============================================
	LLAMAMOS LA PLANTILLA
	=============================================*/

	public static function plantilla(){

		include "vistas/template.php";

	}

	/*=============================================
	TRAEMOS LOS ESTILOS DINAMICOS DE LA PLANTILLA
	=============================================*/
	static public function ctrEstiloPlantilla(){

		$tabla = "template";

		$respueta = ModeloTemplate::mdlEstiloTemplate($tabla);

		return $respueta;


	}

}