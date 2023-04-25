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
                    <h1>Motherboards</h1>
                    <p>⠀They bring all the thinkers together.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/raymond.png" alt="Raymond shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Z690</h3>
                                    <p>Best Price: Rs. 39,345.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p><a href="More_Deals_z690.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <p><a href="cart_add_motherboard.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                                <p><a href="More_Deals_z690.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
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
                                <img src="img/charles.png" alt="Charles shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>B550</h3>
                                    <p>Best Price: Rs. 13,900.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p><a href="More_Deals_b550.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <p><a href="cart_add_motherboard.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                                <p><a href="More_Deals_b550.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
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
                                <img src="img/HXR.png" alt="HXR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Z790</h3>
                                    <p>Best Price: Rs. 25,990.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p><a href="More_Deal_Asus_Z790.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <p><a href="cart_add_motherboard.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                                <p><a href="More_Deal_Asus_Z790.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
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
                                <img src="img/pink.png" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>B560</h3>
                                    <p>Best Price: Rs. 24,999.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p><a href="More_Deal_Giga_B560.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <p><a href="cart_add_motherboard.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                                <p><a href="More_Deal_Giga_B560.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
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
