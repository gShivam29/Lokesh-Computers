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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <div class="col-lg-6">
            <div class="thumbnail">
                <a href="cart.php">
                <img src="img/titan301.jpeg" alt="Titan 301">
                </a>
            </div>
        </div>
        <div class="product">
            <div class="col-lg-6">
                <h1 style="font-weight: bold">Gtx 1050ti</h1>
                <h3 style="color:green;"><u>Best Price: Rs. 14,990.00</u></h3>
                <p>Ratings</p>
                <div class="product">
                    <h1> </h1>
                    <h3 style="font-weight: bold">Product details</h3>
                    <h6>1455 MHzClock Speed</h6>
                    <h6>Chipset: NVIDIA</h6>
                    <h6>BUS Standard: PCI E X16</h6>
                    <h6>Graphics Engine: GTX 1050 Ti</h6>
                    <h6>Memory Interface 128 bit</h6>
                    <h1> </h1>
                    <?php
                    require 'Chart_1050.php'
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <p><a href="https://www.flipkart.com/gigabyte-nvidia-gtx-1050-ti-4-gb-gddr5-graphics-card/p/itm7681f0e32aaff" role="button" class="btn btn-primary btn-block" target="_blank">Flipkart</a></p> 
                                                                                                                                                                                                            <!-- 14,990 -->
                <p><a href="https://www.amazon.in/Gigabyte-Geforce-1050-GDDR5-Graphics/dp/B01M4KGTNI?th=1" role="button" class="btn btn-primary btn-block" target="_blank">Amazon</a></p>
                                                                                                                                                                                                            <!-- 23,900 -->
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