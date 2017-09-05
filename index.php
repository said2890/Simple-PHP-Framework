<?php
    session_start();
    /* Display errors and warnings */
    ini_set( 'error_reporting', E_ALL );
    ini_set( 'display_errors', true );
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Custom script to run ajax -->
        <script src="js/ajax.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" />
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class='container'>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs" href="#">Selima Cakes</a>
                </div>
                <div class='collapse navbar-collapse' id="myNavbar">
                    <ul class='nav navbar-nav'>
                        <li><a href='#'>Home</a></li>
                        <li><a href='#'>Products</a></li>
                        <li><a href='#'>Shopping Cart</a></li>
                        <li><a href='#'>Register/Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container main">
            <a href="components/authentication/LoginView.php">Ajax link</a>
            <?php include __DIR__.'/components/shopping-cart/ShoppingCartView.php'; ?>
        </div>

    </body>
</html>
