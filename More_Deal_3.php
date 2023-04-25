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
                    <img src="img/sony_dslr2.jpeg" alt="Sony DSLR">
                </a>
            </div>
        </div>
        <div class="product">
            <div class="col-lg-6">
                <h1 style="font-weight: bold">i7 13900k</h1>
                <h3 style="color:green;"><u>Best Price: Rs. 54600.00</u></h3>
                <p>Ratings</p>
                <div class="product">
                    <h1> </h1>
                    <h3 style="font-weight: bold">Product details</h3>
                    <h6>Total Cores: 24</h6>
                    <h6>Performance-cores: 8</h6>
                    <h6>Efficient-cores: 16</h6>
                    <h6>Total Threads :32</h6>
                    <h1> </h1>
                    <?php
                    require 'chart.php'
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <p><a href="https://www.amazon.in/Intel%C2%AE-CoreTM-i9-13900K-Processor-Cache/dp/B0BG67ZG5R" role="button" class="btn btn-primary btn-block">Amazon</a></p>
                <p><a href="https://mdcomputers.in/intel-core-i9-13900k-bx8071513900k.html" role="button" class="btn btn-primary btn-block">MDcomputers</a></p>
                <p><a href="https://www.flipkart.com/intel-i9-13900k-2-2-ghz-lga1700-socket-8-cores-desktop-processor/p/itme9e395e7c809c" role="button" class="btn btn-primary btn-block">Flipkart</a></p>
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