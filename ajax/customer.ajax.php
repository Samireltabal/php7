<?php

require_once "../model/connection.php";

if(isset($_POST['id'])){

		$stmt = Connect::connection()->prepare("DELETE FROM customer WHERE id = :datos");

		$stmt -> bindParam(":datos", $_POST["id"], PDO::PARAM_INT);

		if($stmt -> execute()){

			return json_encode("ok");

		}else{

			return json_encode("error");

		}

		$stmt-> close();

		$stmt = null;
}

/*require_once "../controller/customer.controller.php";
require_once "../model/customer.model.php";

class AjaxCustomer{

	public $idclient;

	public function ajaxDeleteclient(){

		$datos = $this->idclient;

		$respuesta = ControllerCustomer::ctrDeleteCustomer($datos);

		echo json_encode($respuesta);

	}
}

if(isset($_POST['id'])){
	$varclient = new AjaxCustomer();
	$varclient->idclient = 1;
	$varclient->ajaxDeleteclient();
}*/


