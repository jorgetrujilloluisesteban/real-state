<?php
header('Access-Control-Allow-Origin: *');

require_once "../controller/property.controller.php";
require_once "../model/property.model.php";

class AjaxProperty{

	/*======================================================
	MOSTRAR PROPIEDADES CON MIN PRICE MAXPRICE MINBED MAXBED
	=======================================================*/	

	public $minprice;
	public $maxprice;
	public $tabla;

	public function ajaxPropertyShow(){

		$minprice = $this -> minprice;
		$maxprice = $this -> maxprice;
		$tabla = $this -> tabla;

		$respuesta = ControllerProperty::ctrShowProperty3($minprice, $maxprice, $minbed, $maxbed);

		//var_dump($respuesta);

		echo json_encode($respuesta);

		//return $respuesta;

	}
}


if(isset($_POST["minprice"])){

	$valEmail = new AjaxProperty();
	$valEmail -> minprice = $_POST["minprice"];
	$valEmail -> maxprice = $_POST["maxprice"];
	$valEmail -> tabla = "property";
	$valEmail -> ajaxPropertyShow();

}
else
{
	if(isset($_POST["maxprice"])){

		$valEmail = new AjaxProperty();
		$valEmail -> minprice = $_POST["minprice"];
		$valEmail -> maxprice = $_POST["maxprice"];
		$valEmail -> tabla = "property";
		$valEmail -> ajaxPropertyShow();

	}
}