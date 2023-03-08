<?php

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
}

?>