    <?php
require 'db/conn.php';
require 'db/helper.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pizzeria</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/logo.jpg"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>    
        <div class="container">
            <div class="col-md-12 header">
                <div class="col-md-3">
                    <span class="logo">Pizzeria</span>
                    <a href="<?php echo $base_url; ?>"><img class="logo-img" src="assets/images/logo.jpg"/></a>
                </div>
                <div class="col-md-9">                    
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">                            
                            <ul class="nav navbar-nav">                              
                                <li><a class="menu-item" href="<?php echo $base_url; ?>order.php"> Order Pizza</a>
                                </li>
                                <li><a class="menu-item" href="<?php echo $base_url; ?>build-pizza.php">Build Your Pizza</a></li>
                                <li>
                                    <?php if (isset($_SESSION['aUser']->name)) { ?>

                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                                <b>Hi! <?php echo strtoupper($_SESSION['aUser']->name); ?></b>
                                                <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo $base_url; ?>logout.php">Logout</a></li>                                             
                                            </ul>
                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <a class="menu-item" href="<?php echo $base_url; ?>login.php"> Login</a>
                                        <?php
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>





