<?php

require_once 'models/product.php';

class ControllerProducts {

    //make session if does not exist
    public function start_session(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Method to display the user list
    public function render() {

        $trendingProducts = Product::getTrendingProducts();
        $allProducts= Product::getAllProducts();;

        require_once 'views/products.php';
    }
}


?>