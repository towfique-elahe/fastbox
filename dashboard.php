<?php
    $connection= mysqli_connect('localhost','autoomot_fastbox','fastbox','autoomot_fastbox') or die ("Database are not connected");
    session_start();
    if(!$_SESSION['useremail']) {
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="./vendor/img/FastBox Logo.svg">
    <title>Dashboard | Fast Box</title>
    <!-- header css -->
    <link rel="stylesheet" href="./vendor/css/header.css">
    <!-- footer css -->
    <link rel="stylesheet" href="./vendor/css/footer.css">
    <!-- bootstrap 4 css -->
    <link rel="stylesheet" href="./vendor/css/bootstrap.min.css">
    <!-- dashboard css -->
    <link rel="stylesheet" href="./vendor/css/dashboard.css">
</head>

<body>

    <!-- header start -->
    <div class="container">
        <header>
            <div class="container fixed-header">
                <!-- top bar -->
                <nav id="top-bar">
                    <div class="left">
                        <a href="tel:+8801400492967">
                            <ion-icon name="call"></ion-icon>
                        </a>
                        <a href="mailto:towfiqueelahe6@gmail.com">
                            <ion-icon name="mail"></ion-icon>
                        </a>
                    </div>

                    <div class="right">
                        <a href="https://www.facebook.com/thoufiq.fahim.1">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                        <a href="https://www.instagram.com/towfique_elahe/">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </div>
                </nav>

                <!-- main header -->
                <div id="header">
                    <a href="https://fastbox.elahe.org/"><img id="logo" src="./vendor/img/FastBox Logo.svg"
                            alt="FastBox"></a>

                    <div id="nav">
                        <nav id="main-menu">
                            <ul>
                                <li><a href="https://fastbox.elahe.org/">Home</a></li>
                                <li><a href="./cost-calculator.php">Calculator</a></li>
                                <li><a href="./track-order.php">Track</a></li>
                                <li><a href="./about-fastbox.php">About</a></li>
                                <li><a href="./contact-fastbox.php">Contact</a></li>
                            </ul>
                        </nav>

                        <a href="./order.php" id="button">Order</a>
                        <a href="./logout.php" id="button">Log Out</a>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- header ends -->

    <!-- hero section start -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <?php
                        $UserEmail= $_SESSION['useremail'];
                        $fatchUserInfo="SELECT * FROM `users` WHERE `email` = '$UserEmail'";
                        $fatchUserInfoquery_run = mysqli_query($connection, $fatchUserInfo);
                        foreach($fatchUserInfoquery_run as $user){
                        
                    ?>
                    <h3 class="display-4"><?php echo $user['full_name']?>👋</h3>
                    <h1 class="display-1">Welcome to FAST<span class="fastbox">BOX</span></h1>

                    <p id="order_null">You don't have any active order</p>

                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>box202125</td>
                                <td>Chattogram</td>
                                <td>Dhaka</td>
                                <td>90</td>
                            </tr>
                        </tbody>
                    </table>
                    <?php };?>
                </div>
                <div class="col-lg-6 right">
                    <img src="./vendor/img/Welcome.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- hero section ends -->

    <!-- bootstrap 4 jquery & js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="./vendor/js/bootstrap.min.js"></script>

    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- tidio integration -->
    <script src="//code.tidio.co/r76h1ijn5hakuw4vv7wpbxwy3lzrebqp.js" async></script>
</body>

</html>