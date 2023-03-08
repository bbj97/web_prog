<?php

include_once('database_products.php');

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_prod = test_input($_POST["id_prod"]);
    $name_prod = test_input($_POST["name_prod"]);
    $url_prod = test_input($_POST["url_prod"]);
    $quantity_prod = test_input($_POST["quantity_prod"]);
    $price_prod = test_input($_POST["price_prod"]);

    if(isset($_POST['update'])){
        if(($name_prod)!= "" && ($url_prod)!="" && ($quantity_prod)>0 && ($price_prod)>0){
        $products_table-> deleteProduct($id_prod);
        $products_table-> insert($name_prod, $url_prod, $quantity_prod, $price_prod);
        }
        header('Location: products.php');
    }
    elseif(isset($_POST['delete'])){
        $products_table-> deleteProduct($id_prod);
        header('Location: products.php');
    }
}

?>