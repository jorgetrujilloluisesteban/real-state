<?php

class ControllerProperty{

	/*=============================================
	SHOW PROPERTIES
	=============================================*/

	static public function ctrShowProperty($minprice, $maxprice, $minbed, $maxbed){

		$tabla = "property";
		$minprice1 = $minprice;
		$maxprice1 = $maxprice;
		$minbed1 = $minbed;
		$maxbed1 = $maxbed;

		$respuesta = ModelProperty::mdlShowProperty($tabla, $minprice1, $maxprice1, $minbed1, $maxbed1);

		return $respuesta;

	}

	static public function ctrShowProperty3($minprice, $maxprice, $minbed, $maxbed){

		$tabla = "property";
		$minprice1 = $minprice;
		$maxprice1 = $maxprice;
		$minbed1 = $minbed;
		$maxbed1 = $maxbed;

		$respuesta = ModelProperty::mdlShowProperty3($tabla, $minprice1, $maxprice1, $minbed1, $maxbed1);

		return $respuesta;

	}

	/*=============================================
	SHOW PROPERTY
	=============================================*/

	static public function ctrShowProperty2($id){

		$tabla = "property";
		$idproperty = $id;

		$respuesta = ModelProperty::mdlShowProperty2($tabla,$idproperty);

		return $respuesta;

	}

	/*=============================================
	SHOW PROPERTY MIN PRICE
	=============================================*/

	static public function ctrMostrarPropiedadMin($tabla, $precio){

		$respuesta = ModelProperty::mdlShowPropertyMin($tabla,$price);

		return $respuesta;
	}

}