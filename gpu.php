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
                    <h1>GPUs</h1>
                    <p>⠀They think harder</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/titan301.jpeg" alt="Titan 301">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>GTX 1050Ti</h3>
                                    <p>Best Price: Rs. 14990.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p><a href="More_Deals_1050.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <p><a href="cart_add_gpu.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                                <p><a href="More_Deals_1050.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/titan201.jpeg" alt="Titan 201">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Radeon RX6400</h3>
                                    <p>Best Price: Rs. 11,699.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p><a href="More_Deals_6400.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <p><a href="cart_add_gpu.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                                <p><a href="More_Deals_6400.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/hmt.jpeg" alt="htm milan">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>RX 6700</h3>
                                    <p>Best Price: Rs. 30,299.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p><a href="More_Deals_6700.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <p><a href="cart_add_gpu.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                                <p><a href="More_Deals_6700.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/favreleuba.jpeg" alt="Favre Leuba">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>RTX 4090</h3>
                                    <p>Best Price: Rs. 1,91,800.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p><a href="More_Deals_4090.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <p><a href="cart_add_gpu.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                                <p><a href="More_Deals_4090.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                                <?php
                                            }
                                        }
                                        ?>
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
