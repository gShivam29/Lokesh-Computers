<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Lokesh Computers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Hardware</h1>
                <p>No need to hunt around for the best prices on hardware, we have all the deals in one place.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="processors.php">
                            <img src="img/camera.jpg" alt="Cannon">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Processors</h3>
                                <p>They think</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="gpu.php">
                            <img src="img/gpu.jpg" alt="Cannon">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>GPUs</h3>
                                <p>They think harder</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="motherboard.php">
                            <img src="img/motherboard.jpg" alt="Cannon">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Motherboards</h3>
                                <p>They bring all the thinkers together</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/ram.jpg" alt="Cannon">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>RAM</h3>
                                <p>They help think</p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/storage.jpg" alt="Cannon">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Storage</h3>
                                <p>They keep all the thinking</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/cooler.jpg" alt="Cannon">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Cooling system</h3>
                                <p>They cool the thinkers</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/cabinet.jpg" alt="Cannon">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Cabinet</h3>
                                <p>They are the thinkers home</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/power.jpg" alt="Cannon">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Power Supply</h3>
                                <p>They power all the thinkers</p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <footer class="footer">
            <div class="container">
                <center>
                    <p>Copyright &copy Lokesh Comps. All Rights Reserved.</p>
                </center>
            </div>
        </footer>
    </div>
</body>

</html>