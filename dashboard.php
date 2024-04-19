<?php
session_start();

print_r($_SESSION);


if(isset($_SESSION['user'])){
    echo("welcome");
}
else{
    header('Location:index.php');
}


?>