<?php
include_once('database_products.php');

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $name_prod = test_input($_POST["name_prod"]);
    $url_prod = test_input($_POST["url_prod"]);
    $quantity_prod = test_input($_POST["quantity_prod"]);
    $price_prod= test_input($_POST["price_prod"]);

    if(($name_prod)!= "" && ($url_prod)!="" && ($quantity_prod)>0 && ($price_prod)>0){
        $products_table->insert($name_prod, $url_prod, $quantity_prod, $price_prod);
        header("Location: products.php");
    }else{
        header("Location: add_product.php");
    }
}

?>