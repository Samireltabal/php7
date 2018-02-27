<?php

require_once "connection.php";

class ModelCustomer{

	static public function mdlCustomer($table){

		$stmt = Connect::connection()->prepare("SELECT * FROM $table");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}

	static public function mdlDeleteCustomer($table, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :datos");

		$stmt -> bindParam(":datos", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt-> close();

		$stmt = null;

	}

}