<?php

require_once "connection.php";

class ModelTemplate{

	static public function mdlStyleTemplate($tabla){

		$stmt = Connection::connect()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}


}