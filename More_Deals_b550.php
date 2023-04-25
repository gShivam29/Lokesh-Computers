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
                <img src="img/charles.png" alt="Charles shirt">
                </a>
            </div>
        </div>
        <div class="product">
            <div class="col-lg-6">
                <h1 style="font-weight: bold">B550</h1>
                <h3 style="color:green;"><u>Best Price: Rs. 13,900.00</u></h3>
                <p>Ratings</p>
                <div class="product">
                    <h1> </h1>
                    <h3 style="font-weight: bold">Product details</h3>
                    <h6>B550 Chipset</h6>
                    <h6>Ram Slots: 4</h6>
                    <h6>Max RAM Capacity: 128 GB </h6>
                    <h6>PCIe Slots: 1</h6>
                    <h1> </h1>
                    <?php
                    require 'chart_b550.php'
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <p><a href="https://www.amazon.in/MSI-B550-PRO-ProSeries-Motherboard/dp/B089CZSQB4" role="button" class="btn btn-primary btn-block" target="_blank">Amazon</a></p>
                <p><a href="https://mdcomputers.in/msi-atx-motherboard-b550-a-pro.html" role="button" class="btn btn-primary btn-block" target="_blank">MDcomputers</a></p>
                <p><a href="https://www.flipkart.com/msi-b550-a-pro-atx-am4-gaming-motherboard/p/itmb54299e43f8a9" role="button" class="btn btn-primary btn-block" target="_blank">Flipkart</a></p>
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