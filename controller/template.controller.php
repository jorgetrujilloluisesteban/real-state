<?php

class ControllerTemplate{

	/*=============================================
	CALL TEMPLATE
	=============================================*/

	public function template(){

		include "views/template.php";

	}

	/*=============================================
	TAKE DINAMIC STYLES OF TEMPLETE
	=============================================*/

	public function ctrStyleTemplate(){

		$tabla = "property";

		$res = ModelTemplate::mdlStyleTemplate($tabla);

		return $res;
	}


}