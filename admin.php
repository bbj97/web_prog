<?php

if (isSet($_COOKIE["Admin"]))
{
   header('Location: dashboard.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Wedding planner</title>

    <style>
 
    #login-form {
        display: inline-block;
        margin-left: auto;
        margin-right: auto;
        background-size: cover;
        padding: 25px;
        font-family: Roboto;
        font-weight: bold;
        font-size: 20px;
    }
    #login-button {
        background-color: #ce4d8d;
        color: white;
        font-size: 20px;
        border: none;
    }

    .col-form-label{
      padding-top:6%;
      margin-right: 5%;
    }
</style>

</head>
<body>
    <header>
        <div class="logo" style="text-align:center;">
            <a href="index.php"><img class="logo" src="images/logo.png" alt="wedding logo" id="logo-photo"></a>
        </div>
    </header>

<br>

<div class="container" style="text-align:center;">
   <div class="row" id="login">
      <div class="h">
         <form id="login-form" action = "validation.php" method="post">
         <?php
            if (isset($_GET["error"]))
            {
               if($_GET["error"] == "wrongcredentials")
               {
                  echo "<p style='text-align:center;'>Pogrešan e-mail ili lozinka</p>";
               }
            }
            ?>
            <div class="row mb-3">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" name="userEmail" required>
               </div>
            </div>
            <div class="row mb-3">
               <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
               <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="userPassword" required>
               </div>
            </div>
            <input id="login-button" type="submit" name ="submit" value="Prijavi se">
         </form>
      </div>
   </div>
</div>