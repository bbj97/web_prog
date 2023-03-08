<?php

    if(!isset($_COOKIE['Admin'])){
        header("Location: admin.php");
    }

    include_once("database_products.php");

    include_once("product_data_update.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="najbolji čvarci u gradu">
    <meta name="og:title" property="og:title" content="čvarkomati">
    <link rel="canonical" href="https://cvarakmoj.com/">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Ažuriranje proizvoda</title>
</head>
<body>

    <style>
        .dashmenu {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 15px;
            text-align: center;
            border-right: 1px solid rgb(73, 69, 69);
        }
        
        .dashmenu a {
            display: block;  
            text-decoration: none;
            font-size: 12px;
            color: black;
            border-bottom: 1px solid rgb(73, 69, 69);
            padding-top:23px;
            padding-bottom:16px;
            line-height: 20px;
            letter-spacing: 0.05em;
        }
        
        .dashmenu img{
            margin-bottom: 50px;
        }
            
        .dashinfo {
            position: absolute;
            margin-left: 30%;
            margin-top: 5%;
        }
        
        .dashinfo h1 {
            font-size: 60px;
            font-weight: 250;
            font-family: Roboto;
        }
        
        .dashinfo p {
            font-size: 40px;
            font-family: Roboto;
        }

        .addform {
            margin-top: 10%;
        }

        form {
            width: 100%;
        }

        div.form {
            display: block;
            text-align: center;
            margin-top:25px;
            margin-bottom: 50px;   
        }

        form {
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
            background-size: cover;
            padding: 25px;
            font-family: Roboto;
            font-weight:bold;
            font-size:20px;
        }

        #submitadmin {
            background-color:rgb(247, 207, 75);
            color:black;
            font-size:20px;
            border:none;
        }

        #update {
            background-color:rgb(187, 111, 136);
            color:white;
            font-size:20px;
            border:none;
        }

        #delete {
            background-color:rgb(187, 111, 136);
            color:white;
            font-size:20px;
            border:none;
            margin-left: 20px;
        }

        
    </style>
</head>
<body>

    <div class="container">
        <div class="col-sm-3">
            <div class="dashmenu">
                    <img src="images/logo.png" alt="logo">
                    <a href="dashboard.php"><b>Početna</b></a>
                    <a href="products.php">Planer</a>
                    <a href="logout.php">Odjava</a>
            </div> 
        </div>

        <div class="col-sm-9">   
            <div class="addform">
            <form class = "form-add-prod" action = "update_product_input.php" method = "post">
                <div class="form-group" hidden>
                    <input class="form-control" type = "text" name = "id_prod" id = "id_prod" value = <?php echo $id_prod?>>
                </div>
                <div class="form-group">
                    <label for = "text"> Ime proizvoda: </label>
                    <input class="form-control" type = "text" name = "name_prod" id = "name_prod" value = <?php echo $name_prod?>>
                </div>
                <div class="form-group">
                    <label for = "text"> URL slike proizvoda: </label>
                    <input class="form-control" type = "text" name = "url_prod" id = "url_prod" value = <?php echo $url_prod?>>
                </div>
                <div class="form-group">
                    <label for = "number"> Količina: </label>
                    <input class="form-control" type = "number" name = "quantity_prod" id = "quantity_prod" value = <?php echo $quantity_prod?>>
                </div>
                <div class="form-group">
                    <label for = "number"> Cijena proizvoda: </label>
                    <input class="form-control" type = "number" name = "price_prod" id = "price_prod" value = <?php echo $price_prod?>>
                </div>
    
                <button type="submit" class="btn btn-primary" id="update" name="update">Spremi promjene</button>
                <button type="submit" class="btn btn-primary" id="delete" name="delete">Izbriši proizvod</button>
            </form>
            </div>
        </div>             
</div>
</body>
</html>

        
       