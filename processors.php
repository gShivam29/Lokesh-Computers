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
                    <h1>Processors</h1>
                    <p>⠀They Think.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/cannon_eos.jpeg" alt="Cannon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Threadripper 3990x</h3>
                                    <p>Best Price: Rs. 3,79,999.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p><a href="More_Deal_3990.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <p><a href="cart_add_processor.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                                <p><a href="More_Deal_3990.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
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
                                <img src="img/sony_dslr.jpeg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>i9 12999x</h3>
                                    <p>Best Price: Rs. 41,290.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p><a href="More_Deal_12900.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <p><a href="cart_add_processor.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                                <p><a href="More_Deal_12900.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
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
                                <img src="img/sony_dslr2.jpeg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>i7 13900k</h3>
                                    <p>Best Price: Rs. 54600.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p><a href="More_Deal_3.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <p><a href="cart_add_processor.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                                <p><a href="More_Deal_3.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
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
                                <img src="img/olympus.jpeg" alt="Olympus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ryzen 9 5900x</h3>
                                    <p>Best Price: Rs.  32,190.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <p><a href="More_Deal_5900.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <p><a href="cart_add_processor.php?id=4" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                                <p><a href="More_Deal_5900.php" role="button" class="btn btn-primary btn-block">More deals</a></p>
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
