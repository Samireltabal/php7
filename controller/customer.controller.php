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


}