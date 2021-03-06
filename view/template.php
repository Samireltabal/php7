<!DOCTYPE html>
<html lang="es">
<head>
  <title>Crud Php7 Mvc ajax</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--=====================================
	PLUGINS DE CSS
	======================================-->

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
  <!---http://localhost/shop/frontend/-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/php7/view/css/plugins/sweetalert.css">
  <link rel="stylesheet" href="http://localhost/php7/view/css/ventana-modal.css">
  <link rel="stylesheet" href="http://localhost/php7/view/css/plantilla.css">

	<!--=====================================
	PLUGINS DE JAVASCRIPT
	======================================-->

  <script src="http://localhost/php7/view/js/plugins/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--=====================================
  JAVASCRIPT PERSONALIZADO
  ======================================-->

  <!--<script src="template.js"></script>-->
  <script src="http://localhost/php7/view/js/add-delete-update.js"></script>

	<!--=====================================
  MAIN CONTENT
	======================================-->
</head>
<body>

<div class="container">
  <h1>Customer</h1>
  <h2>Made by Php 7 and Mvc using boostrap 4 and jquery</h2>

  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalRegistro">Create new Customer</button>
  <!--<a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a>-->



  <br><br>
	       <?php

    				$customer = ControllerCustomer::ctrShowCustomer();
    	

            echo '<table class="table">
              <thead>
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>';

                foreach ($customer as $key => $value) {

                echo '<tr>
                        <td>'.$value["id"].'</td>
                        <td>'.$value["nombre"].'</td>
                        <td>'.$value["email"].'</td>
                        <td><button type="button" class="btn btn-warning updatecustomer" idCustomer="'.$value["id"].'">Update</button></td>
                        <td><button type="button" class="btn btn-danger deletecustomer" idCustomer="'.$value["id"].'">Delete</button></td>
                      </tr>';
                }
                

            echo '</tbody>
            </table>';
        ?>

        <!--=====================================
        MODAL WINDOW FOR REGISTRATION
        ======================================-->

        <div class="modal fade modalFormulario" id="modalRegistro" role="dialog">

            <div class="modal-content modal-dialog">

                <div class="modal-body modalTitulo">

                  <h3 class="backColor">REGISTER</h3>

                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                  

              <!--=====================================
              DIRECT REGISTRATION
              ======================================-->

              <form method="post" onsubmit="return registroUsuario()">

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon">
                      
                      <i class="glyphicon glyphicon-user"></i>
                    
                    </span>

                    <input type="text" class="form-control" id="regUsuario" name="regUsuario" placeholder="Name" required>

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon">
                      
                      <i class="glyphicon glyphicon-envelope"></i>
                    
                    </span>

                    <input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="Email" required>

                  </div>

                </div>


                <?php
                  unset($_POST['regUsuario']);
                  unset($_POST['regEmail']);

                  $registro = new ControllerCustomer();
                  $registro -> ctrRegisterCustomer();

                ?>
                
                <input type="submit" class="btn btn-default backColor btn-block" value="SEND">  

              </form>

                </div>
              
            </div>

        </div>

</div>
</body>
</html>

