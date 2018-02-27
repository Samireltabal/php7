<?php

require_once "../controller/customer.controller.php";
require_once "../model/customer.model.php";

var_dump("entro en customer.php");

class AjaxCustomer{

	public $idclient;

	public function ajaxDeleteclient(){

		$datos = $this->idclient;

		$respuesta = ControllerCustomer::ctrDeleteCustomer($datos);

		echo json_encode($respuesta);

	}

}

/*=============================================
DELETE CUSTOMER
=============================================*/	

if ( isset($_POST['id'] ) {
	var_dump("entro");
	$varclient = new AjaxCustomer();
	$varclient -> idclient = $_POST["id"];
	$varclient -> ajaxDeleteclient();

}else
{
	var_dump("no entro");
}