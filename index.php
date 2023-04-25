<?php
session_start();
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
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Lokesh Computers</h1>
                       <p>Your place to find best deals on computer parts</p>
                       <a href="products.php" class="btn btn-primary">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
               <div class="col-xs-4">
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
                <div class="col-xs-4">
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
                <div class="col-xs-4">
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
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Lokesh Computers. All Rights Reserved.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>