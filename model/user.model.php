<?php

require_once "connection.php";

class ModelUser{

	/*=============================================
	CUSTOMER REGISTER
	=============================================*/

	static public function mdlRegisterUser($tabla, $datos){

		$stmt = Connection::connect()->prepare("INSERT INTO customer(email, password, name) VALUES (:email, :password, :nombre)");

		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	SHOW USER
	=============================================*/

	static public function mdlShowUser($tabla, $valor){

		$stmt = Connection::connect()->prepare("SELECT * FROM customer WHERE email = :email");

		$stmt->bindParam(":email", $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt-> close();

		$stmt = null;

	}

	/*=============================================
	FIND USER
	=============================================*/

	static public function mdlFindUsername($tabla, $datos){

		$stmt = Connection::connect()->prepare("SELECT * FROM customer WHERE email = :email");

		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt-> close();

		$stmt = null;

	}
}