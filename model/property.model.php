<?php

require_once "connection.php";

class ModelProperty{

	/*=============================================
	SHOW PROPERTIES
	=============================================*/

	static public function mdlShowProperty($tabla, $minprice, $maxprice, $minbed, $maxbed){

			$stmt = Connection::connect()->prepare("SELECT * FROM $tabla");

			//$stmt -> bindParam(":price", $minprice, PDO::PARAM_INT);

			$stmt -> execute();

			return $stmt -> fetchAll();
			//return $stmt -> fetch();

			$stmt -> close();

			$stmt = null;


	}

	static public function mdlShowProperty3($tabla, $minprice, $maxprice, $minbed, $maxbed){

			$minprice2 = (int) $minprice;
			$maxprice2 = (int) $maxprice;
			$minbed2 = (int) $minbed;
			$maxbed2 = (int) $maxbed;

			if (($minprice2 > 0) AND ($maxprice2==0)){

				$stmt = Connection::connect()->prepare("SELECT * FROM $tabla WHERE price >= :num1");

				$stmt -> bindParam(":num1", $minprice2, PDO::PARAM_INT);

				$stmt -> execute();

				return $stmt -> fetchAll();
			}

			if (($minprice2 > 0) AND ($maxprice2 > 0)){

				$stmt = Connection::connect()->prepare("SELECT * FROM $tabla WHERE price >= :num1 AND price <= :num2");

				$stmt -> bindParam(":num1", $minprice2, PDO::PARAM_INT);
				$stmt -> bindParam(":num2", $maxprice2, PDO::PARAM_INT);

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			if (($minprice2 == 0) AND ($maxprice2 > 0)){

				$stmt = Connection::connect()->prepare("SELECT * FROM $tabla WHERE price <= :num2");

				$stmt -> bindParam(":num2", $maxprice2, PDO::PARAM_INT);

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			if (($minprice2 == 0) AND ($maxprice2 == 0)){

				$stmt = Connection::connect()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}


			//return $stmt -> fetch();

			$stmt -> close();

			$stmt = null;


	}

	/*=============================================
	MOSTRAR PROPIEDAD
	=============================================*/	

	static public function mdlShowProperty2($tabla, $id){

		$stmt = Connection::connect()->prepare("SELECT * FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	MOSTRAR PROPIEDADES
	=============================================*/

	static public function mdlShowPropertyMin($tabla, $price){

		$stmt = Connection::connect()->prepare("SELECT * FROM $tabla WHERE price = :price");

		$stmt -> bindParam(":price", $price, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}
	/*=============================================
	BUSCADOR
	=============================================*/

	static public function mdlBuscarProductos($tabla, $busqueda, $ordenar, $modo, $base, $tope){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE ruta like '%$busqueda%' OR titulo like '%$busqueda%' OR titular like '%$busqueda%' OR descripcion like '%$busqueda%' ORDER BY $ordenar $modo LIMIT $base, $tope");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}
}