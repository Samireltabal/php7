<?php
require_once 'vendor/autoload.php';
require_once "controller/template.controller.php";
require_once "controller/customer.controller.php";
require_once "model/customer.model.php";
require_once "model/connection.php";

$template = new ControllerTemplate();
$template -> template();

?>