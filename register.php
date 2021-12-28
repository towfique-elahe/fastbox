<?php
    $connection= mysqli_connect('localhost','autoomot_fastbox','fastbox','autoomot_fastbox') or die ("Database are not connected");
    session_start();

    if (isset($_POST['register'])) {
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
        $AddonDate = date('D d-m-Y');
    
        $registerquery="INSERT INTO `users` (`full_name`, `email`, `phone`, `password`, `date`) VALUES ('$fullName', '$email', '$phone', '$pass', '$AddonDate')";
        $submit=mysqli_query($connection, $registerquery);

        if($submit){
            echo '<script> 
              alert("Registration Successful");
            </script>';
          }
  
          else{
            echo '<script> 
              alert("Registration Failed. Try again");
            </script>';
          }
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
    <title>Register | Fast Box</title>
    <!-- header css -->
    <link rel="stylesheet" href="./vendor/css/header.css">
    <!-- footer css -->
    <link rel="stylesheet" href="./vendor/css/footer.css">
    <!-- bootstrap 4 css -->
    <link rel="stylesheet" href="./vendor/css/bootstrap.min.css">
    <!-- register css -->
    <link rel="stylesheet" href="./vendor/css/register.css">

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

                        <a href="./login.php" id="button">Login</a>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- header ends -->

    <!-- register hero start -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="./vendor/img/login-register/register hero.svg" alt="">
                </div>
                <div class="col-sm-6 form">
                    <h1 class="display-4">Register to FAST<span class="fastbox">BOX</span></h1>
                    <p>Have an account? <a href="./login.php">Login</a></p>
                    <form action="" method="post">
                        <div class="input">
                            <ion-icon name="person"></ion-icon>
                            <input type="text" name="fullName" id="" placeholder="Full Name *" required>
                        </div>
                        <div class="input">
                            <ion-icon name="mail"></ion-icon>
                            <input type="email" name="email" id="" placeholder="E-mail *" required>
                        </div>
                        <div class="input">
                            <ion-icon name="call"></ion-icon>
                            <input type="tel" name="phone" id="" placeholder="Phone Number">
                        </div>
                        <div class="input">
                            <ion-icon name="lock-closed"></ion-icon>
                            <input type="password" name="pass" id="" placeholder="Password *" required>
                        </div>
                        <button type="submit" id="button" name="register">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- register hero ends -->

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