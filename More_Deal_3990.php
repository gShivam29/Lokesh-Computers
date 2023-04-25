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
                    <img src="img/cannon_eos.jpeg" alt="Sony DSLR">
                </a>
            </div>
        </div>
        <div class="product">
            <div class="col-lg-6">
                <h1 style="font-weight: bold">Ryzen 3990x</h1>
                <h3 style="color:green;"><u>Best Price: Rs. 3,79,999.00</u></h3>
                <p>Ratings</p>
                <div class="product">
                    <h1> </h1>
                    <h3 style="font-weight: bold">Product details</h3>
                    <h6>Total Cores: 16</h6>
                    <h6>Performance-cores: 8</h6>
                    <h6>Efficient-cores: 8</h6>
                    <h6>Total Threads : 24</h6>
                    <h1> </h1>
                    <?php
                    require 'chart_3990.php'
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <p><a href="https://www.amazon.in/AMD-Ryzen-Threadripper-3990X-100-100000163WOF/dp/B0815SBQ9W" role="button" class="btn btn-primary btn-block" target="_blank">Amazon</a></p>
                <p><a href="https://mdcomputers.in/amd-64-core-ryzen-threadripper-3990x.html" role="button" class="btn btn-primary btn-block" target="_blank">MDcomputers</a></p>
                <p><a href="https://www.flipkart.com/amd-ryzen-threadripper-3990x-2-9-ghz-upto-4-3-strx4-socket-64-cores-128-threads-32-mb-l2-256-l3-desktop-processor/p/itmfa93938d64ecd" role="button" class="btn btn-primary btn-block" target="_blank">Flipkart</a></p>
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