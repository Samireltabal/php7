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

}