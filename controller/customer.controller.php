<?php
/*require_once "../model/customer.model.php";*/
/*require_once "../model/connection.php";*/

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
	REGISTRO DE USUARIO
	=============================================*/

	public function ctrRegisterCustomer(){

		if(isset($_POST["regUsuario"])){

			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["regUsuario"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["regEmail"])){

				$datos = array("nombre"=>$_POST["regUsuario"],
							   "email"=> $_POST["regEmail"],
							   "modo"=> "directo",
							   "verificacion"=> 1);

				$tabla = "customer";

				$respuesta = ModelCustomer::mdlRegistroUsuario($tabla, $datos);

				if($respuesta == "ok"){

				unset($_POST['regUsuario']);
				unset($_POST['regEmail']);

				echo '<script> 

						swal({
							  title: "¡Registered user!",
							  text: "",
							  type:"success",
							  confirmButtonText: "Close",
							  closeOnConfirm: false
							},

							function(isConfirm){

								if(isConfirm){
									history.back();
								}
						});

				</script>';
				}

			}else{

				echo '<script> 

						swal({
							  title: "¡ERROR!",
							  text: "¡Error al registrar el usuario, no se permiten caracteres especiales!",
							  type:"error",
							  confirmButtonText: "Cerrar",
							  closeOnConfirm: false
							},

							function(isConfirm){

								if(isConfirm){
									history.back();
								}
						});

				</script>';

			}

		}

	}

}