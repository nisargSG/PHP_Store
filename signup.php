<?php
include 'controllers/signup.php';

// Instantiate the Controller
$controllerSignup=new ControllerSignup();

//create session if not needed
$controllerSignup->start_session();

$signupUser=null;   


if (isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    //true or false
    $signupUser=$controllerSignup->create_user($_POST["name"],$_POST["phone"],$_POST["email"],$_POST["password"]);

    if ($signupUser === true) {
        header("Location:login.php");
    }
}


//render the view
$controllerSignup->render();



?>