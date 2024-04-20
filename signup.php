<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        if(isset($_POST["i1"]) && isset($_POST["i2"]) && isset($_POST["i3"]) && isset($_POST["i4"])){

            require_once('./models/user.php');

            save($_POST["i1"],$_POST["i2"],$_POST["i3"],$_POST["i4"]);

        }
       
     
    }

    ?>

    <form method="POST" action="<?php echo($_SERVER["PHP_SELF"]) ?>">
        <h1>Enter your details</h1>
        <input type="text" name="i1" placeholder="name"/>
        <input type="text" name="i2" placeholder="phone"/>
        <input type="text" name="i3" placeholder="email"/>
        <input type="text" name="i4" placeholder="password"/>

        <input type="submit"/>

    </form>

    
</body>
</html>