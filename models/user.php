<?php

require_once('utils/db.php');

//insert the values
function save($i1,$i2,$i3,$i4){
    $result = executeQuery("INSERT INTO users (name,phone,email,password) VALUES('$i1','$i2','$i3','$i4')");

}





?>