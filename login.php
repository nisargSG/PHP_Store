<?php

include 'controllers/login.php';

// Instantiate the UserController
$controllerLogin = new ControllerLogin();
//create session if not needed
$controllerLogin->start_session();
//render login

$loggedInUser=null;    

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $loggedInUser = $controllerLogin->checkAuth($_POST["email"], $_POST["password"]);
    if($loggedInUser){
        //set into session
        $_SESSION['user'] = serialize($loggedInUser);
    }else{
        $loggedInUser=false;
    }
}

$controllerLogin->render();
