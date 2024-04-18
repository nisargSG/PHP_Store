<?php
include 'controllers/products.php';

// Instantiate the UserController
$controllerHome = new ControllerProducts();
//create session if not needed
$controllerHome ->start_session();
//render index
$controllerHome ->render();

?>