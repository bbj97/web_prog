<?php

include_once("database_products.php");

if(!isset($_COOKIE['Admin'])){
    header("Location: admin.php");
}

$products = $products_table->read();


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
    <title>Proizvodi</title>

    <script>
        function PrintElem(elem)
            {
                var divContents = document.getElementById("col-sm-9").innerHTML;
                var mywindow = window.open('', 'PRINT', 'height=400,width=600');
                mywindow.document.write(divContents);

                mywindow.document.close(); // necessary for IE >= 10
                mywindow.focus(); // necessary for IE >= 10*/+
                mywindow.print();
                mywindow.close();

                return true;
            }

            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;
            }

            function printanje(){
                w=window.open();
                w.document.write($('.col-sm-9').html());
                w.print();
                w.close();
            }
    </script>
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
            padding-top: 23px;
            padding-bottom: 16px;
            line-height: 20px;
            letter-spacing: 0.05em;
        }

        .dashmenu img {
            margin-bottom: 50px;
        }

        .button-dodajpr {
            position: absolute;
            right: 0;
            margin-top: 10%;
            background:  rgba(187, 111, 136);
            border-radius: 40px;
            border: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            letter-spacing: 0.5px;
            font-size: 15px;
            font-weight: bold;
            color: white;
            box-shadow: 0px 8px 40px rgba(0, 0, 0, 0.178);
            width: 170px;
        }

        .myprod {
            position: absolute;
            margin-top: 25%;
            margin-left: -100px;
        }

        .all-products {
            font-family: Roboto;
            font-style: bold;
            align-items: center;
            border-radius: 10px;
            table-layout: fixed;
        }

        th {
            font-size: 25px;
            font-family: Roboto;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        th span {
            border-bottom: 3px solid #f9dd94;
        }

        td {
            font-size: 20px;
            font-family: Roboto;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            font-weight: bold;
        }

        tr {
            border: 1px solid grey;
        }

        #update-btn {
            background: rgba(187, 111, 136);
            border-radius: 4px;
            border: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            letter-spacing: 0.5px;
            font-size: 15px;
            font-weight: bold;
            color: white;
            box-shadow: 0px 8px 40px rgba(0, 0, 0, 0.178);
            width: 170px;
            margin-right: 10px;
            height: 50px;
        }
        .buu{background: rgba(187, 111, 136);
            border-radius: 4px;
            border: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            letter-spacing: 0.5px;
            font-size: 15px;
            font-weight: bold;
            color: white;
            box-shadow: 0px 8px 40px rgba(0, 0, 0, 0.178);
            width: 270px;
            margin-right: 10px;
            height: 50px;}

            .buudel {
            background: rgba(187, 111, 136);
            border-radius: 4px;
            border: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            letter-spacing: 0.5px;
            font-size: 15px;
            font-weight: bold;
            color: white;
            box-shadow: 0px 8px 40px rgba(0, 0, 0, 0.178);
            width: 170px;
            margin-right: 10px;
            margin-left: 10px;
            height: 35px;
            }

            #printaj {
                background: rgba(187, 111, 136);
            border-radius: 4px;
            border: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            letter-spacing: 0.5px;
            font-size: 15px;
            font-weight: bold;
            color: white;
            box-shadow: 0px 8px 40px rgba(0, 0, 0, 0.178);
            width: 170px;
            margin-right: 10px;
            margin-left: 10px;
            height: 50px;
            margin-top:35%;
            margin-bottom:5%;
            }
    </style>
    </head>

    <body>

        <div class="container">
            <div class="col-sm-3">
                <div class="dashmenu">
                    <img src="images/logo.png" alt="Čvarci logo" width="200px">
                    <a href="dashboard.php"><b>Početna</b></a>
                    <a href="products.php">Planer</a>
                    <a href="logout.php">Odjava</a>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="products-art">
                    <input class="button-dodajpr" type="button" value="Dodaj u planer"
                        onClick="document.location.href = 'add_product.php'" style="text-color: white;"/>

                </div>

                <div class="row myprod" id="printableArea" style="margin-bottom: 25%">
                    <div style=" max-height: 150px; text-align: center;">
                        <div style=" display: inline-block">
                        <img src="images/prettyy.png" style="margin-bottom: 0%"  height="450px">
                        <div style=" display: inline-block;">
                        <span style="font-size: 50px; color:  rgba(187, 111, 136);">My planner</span>
                        </div>
                        <div style=" display: inline-block;">
                        </div>
                    </div>

                    <table class="all-products">
                        <thead>
                            <tr>
                                <th scope="col" width="200px"> <span>Slika</span></th>
                                <th scope="col" width="200px"> <span>Naziv</span></th>
                                <th scope="col" width="200px"> <span>Količina</span></th>
                                <th scope="col" width="200px"> <span>Cijena</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $products->fetch()) : ?>
                            <tr>
                                <form action="update_product.php" method="post">
                                    <td style="display:none;"><input type="hidden" name="id_prod"
                                            value=<?= htmlspecialchars($row['id_prod']) ?>><?= htmlspecialchars($row['id_prod']) ?>
                                    </td>
                                    <td style="display:none;"><input type="hidden" name="url_prod"
                                            value=<?= htmlspecialchars($row['url_prod']) ?>><?= htmlspecialchars($row['url_prod']) ?>
                                    </td>
                                    <td><img src="<?= htmlspecialchars($row['url_prod']) ?>" width="100" height="100">
                                    </td>
                                    <td><input type="hidden" name="name_prod"
                                            value=<?= htmlspecialchars($row['name_prod']) ?>>
                                        <?= htmlspecialchars($row['name_prod']) ?></td>
                                    <td><input type="hidden" name="quantity_prod"
                                            value=<?= htmlspecialchars($row['quantity_prod']) ?>><?= htmlspecialchars($row['quantity_prod']) ?>
                                    </td>
                                    <td><input type="hidden" name="price_prod"
                                            value=<?= htmlspecialchars($row['price_prod']) ?>><?= htmlspecialchars($row['price_prod']) ?>
                                    </td>
                                    <td><button class="btn btn-primary" id="update-btn" type="submit"
                                            name="edit">Ažuriraj</button></td>
                                </form>

                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            var max_fields = 10;
                            var wrapper = $(".container1");
                            var add_button = $(".add_form_field");

                            var x = 1;
                            $(add_button).click(function (e) {
                                e.preventDefault();
                                if (x < max_fields) {
                                    x++;
                                    $(wrapper).append(
                                        '<div><input type="text" name="mytext[]" style="border:1px solid black;"/><a href="#" class="delete buudel">Delete</a></div>'
                                        ); //add input box
                                } else {
                                    alert('You Reached the limits')
                                }
                            });

                            $(wrapper).on("click", ".delete", function (e) {
                                e.preventDefault();
                                $(this).parent('div').remove();
                                x--;
                            })
                        });
                    </script>
                    <script>
                            function printDiv() {
                                var divContents = document.getElementById("GFG").innerHTML;
                                var a = window.open('', '', 'height=500, width=500');
                                a.document.write('<html>');
                                a.document.write('<body > <h1>Div contents are <br>');
                                a.document.write(divContents);
                                a.document.write('</body></html>');
                                a.document.close();
                                a.print();
                            }
                    </script>
                    <div id="popisGostiju" style="min-height:500px; border: 1px solid black;">
                        <h2>Popis gostiju</h2>
                        <div class="container1">
                                <div style="text-align: center;">
                                    <button class="add_form_field buu" style="background:rgba(187, 111, 136); border: none;">Dodaj novog gosta &nbsp;
                                        <span style="font-size:16px; font-weight:bold;">+ </span>
                                    </button>
                                </div>
                        </div>
                        
                    <div style="text-align:right;">
                    <input type="button" value="Printaj planer" id="printaj"
                    onclick="print('col-sm-9')">
                    </div>
                    </div>


                </div>
            </div>

        </div>
    </div> 
</body>

</html>