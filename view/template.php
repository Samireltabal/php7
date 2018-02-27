<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!--=====================================
	PLUGINS DE CSS
	======================================-->

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
  <!---http://localhost/shop/frontend/-->
  <link rel="stylesheet" href="http://localhost/php7/view/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/php7/view/css/plugins/sweetalert.css">

	<!--=====================================
	PLUGINS DE JAVASCRIPT
	======================================-->

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="http://localhost/php7/view/js/plugins/sweetalert.min.js"></script>

	<!--=====================================
	Main Content
	======================================-->


<div class="container">
  <h1>Customer</h2>
  <h2>Made by Php 7 and Mvc using boostrap 4 and jquery</h2>

  <button type="button" class="btn btn-success addcustomer">Create new Customer</button>

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
            ?>

          </tbody>
        </table>

</div>

<div id="main">

</div

	<!--=====================================
	JAVASCRIPT PERSONALIZADO
	======================================-->

	<!--<script src="template.js"></script>-->
  <script src="http://localhost/php7/view/js/add-delete-update.js"></script>