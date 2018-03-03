<?php

require_once "connection.php";

class ModelCustomer{

	/*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function mdlCustomer($table){

		$stmt = Connect::connection()->prepare("SELECT * FROM $table");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}
	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function mdlRegistroUsuario($tabla, $datos){

		$stmt = Connect::connection()->prepare("INSERT INTO $tabla(nombre, email) VALUES (:nombre, :email)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

}