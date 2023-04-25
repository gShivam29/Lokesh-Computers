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
           <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/pink.png" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>B560</h3>
                                    <p>Best Price: Rs. 17,400</p>
                                    
                                    <p><a href="https://www.amazon.in/GIGABYTE-B560-AORUS-PRO-Motherboard/dp/B08YKFJXZH" role="button" class="btn btn-primary btn-block">Amazon</a></p>
                                    <p><a href="https://mdcomputers.in/gigabyte-b560-aorus-pro-ax.html" role="button" class="btn btn-primary btn-block">MDcomputers</a></p>
                                </div>
                            </center>
                        </div>
                    </div>
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
