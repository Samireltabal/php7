<?php

class ControllerCustomer{

	/*=============================================
	SHOW CUSTOMER
	=============================================*/

	static public function ctrShowCustomer(){

		$table = "customer";

		$respuesta = ModelCustomer::mdlCustomer($table);

		return $respuesta;

	}
	/*=============================================
	DELETE CUSTOMER
	=============================================*/

	static public function ctrDeleteCustomer($datos){

		$table = "customer";

		$respuesta = ModelCustomer::mdlDeleteCustomer($table, $datos);

		return $respuesta;

	}

}