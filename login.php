<?php
    $connection= mysqli_connect('localhost','autoomot_fastbox','fastbox','autoomot_fastbox') or die ("Database are not connected");
    session_start();

    error_reporting(0);

    if(!($_SESSION['useremail']=="")) {
        header('location: dashboard.php');
    }

    if (isset($_POST['login'])) {
        $UserEmail = $_POST['mail'];
        $Password = $_POST['pass'];

        if($UserEmail=="" && $Password==""){
            echo '<script> 
                alert("Email and Password fields are required");
            </script>';
        }

        elseif($UserEmail==""){
            echo '<script> 
            alert("Email field are required");
        </script>';
        }

        elseif($Password==""){
            echo '<script> 
            alert("Password field are required");
        </script>';
        }

        else{
            $signin="SELECT * FROM `users` WHERE `email` = '$UserEmail' AND `password` = '$Password'";
            $signinquery = mysqli_query($connection, $signin);
    
            if (mysqli_fetch_array($signinquery)) {
                $_SESSION['useremail'] = $UserEmail;
                header('location: dashboard.php');
            }
    
            else{
                echo '<script> 
                        alert("User Does not Exists in Admin Table");
                    </script>';
            }
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
    <title>Login | Fast Box</title>
    <!-- header css -->
    <link rel="stylesheet" href="./vendor/css/header.css">
    <!-- footer css -->
    <link rel="stylesheet" href="./vendor/css/footer.css">
    <!-- bootstrap 4 css -->
    <link rel="stylesheet" href="./vendor/css/bootstrap.min.css">
    <!-- login css -->
    <link rel="stylesheet" href="./vendor/css/login.css">

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

                        <a href="./register.php" id="button">Register</a>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- header ends -->

    <!-- login hero start -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="./vendor/img/login-register/login-hero.svg" alt="">
                </div>
                <div class="col-sm-6 form">
                    <h1 class="display-3">Login to FAST<span class="fastbox">BOX</span></h1>
                    <p>Don’t have an account? <a href="./register.php">Register</a></p>
                    <form method="post">
                        <div class="input">
                            <ion-icon name="mail"></ion-icon>
                            <input type="email" name="mail" id="" placeholder="E-mail *" required>
                        </div>
                        <div class="input">
                            <ion-icon name="lock-closed"></ion-icon>
                            <input type="password" name="pass" id="" placeholder="Password *" required>
                        </div>
                        <button type="submit" id="button" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- login hero ends -->

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