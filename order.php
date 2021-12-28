<?php
    $connection= mysqli_connect('localhost','autoomot_fastbox','fastbox','autoomot_fastbox') or die ("Database are not connected");
    session_start();
    if(!$_SESSION['useremail']) {
        header('location: login.php');
    }
    if (isset($_POST['confirmOrder'])) {
        $s_full_name = $_POST['s_full_name'];
        $s_email = $_POST['s_email'];
        $s_phone_number = $_POST['s_phone_number'];
        $s_address = $_POST['s_address'];
        $r_full_name = $_POST['r_full_name'];
        $r_email = $_POST['r_email'];
        $r_phone_number = $_POST['r_phone_number'];
        $r_address = $_POST['r_address'];
        $product_weight = $_POST['product_weight'];
        $product_selling_price = $_POST['product_selling_price'];
        $pickup_point = $_POST['pickup_point'];
        $delivery_point = $_POST['delivery_point'];
        $payment_method = $_POST['payment_method'];
        $total_cost = $_POST['total_cost'];

        $n = 3;
        $oder_id ="box". bin2hex(random_bytes($n));
        $account_holder_email= $_SESSION['useremail'];

        $date = date('D d-m-Y');
    
        $registerquery="INSERT INTO `order_confirmation` (`s_full_name`, `s_email`, `s_phone_number`, `s_address`, `r_full_name`, `r_email`, `r_phone_number`, `r_address`, `product_weight`, `product_selling_price`, `pickup_point`, `delivery_point`, `payment_method`, `total_cost`, `oder_id`, `account_holder_email`, `date`) VALUES ('$s_full_name', '$s_email', '$s_phone_number', '$s_address', '$r_full_name', '$r_email', '$r_phone_number', '$r_address', '$product_weight', '$product_selling_price', '$pickup_point', '$delivery_point', '$payment_method', '$total_cost', '$oder_id', '$account_holder_email', '$date')";
        $submit=mysqli_query($connection, $registerquery);

        if($submit){
            echo '<script> 
              alert("Order Successfully Placed");
            </script>';
          }
  
          else{
            echo '<script> 
              alert("Failed. Try again");
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
    <title>Order | Fast Box</title>
    <!-- header css -->
    <link rel="stylesheet" href="./vendor/css/header.css">
    <!-- footer css -->
    <link rel="stylesheet" href="./vendor/css/footer.css">
    <!-- bootstrap 4 css -->
    <link rel="stylesheet" href="./vendor/css/bootstrap.min.css">
    <!-- order css -->
    <link rel="stylesheet" href="./vendor/css/order.css">
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

                        <a href="./dashboard.php" id="user">
                            <ion-icon name="person"></ion-icon>
                        </a>

                        <a href="./order.php" id="button">Order</a>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- header ends -->

    <!-- order section start -->
    <section id="order">
        <div class="container">
            <form method="post" id="costCal">
                <div class="row">
                    <div class="col-lg-8 details">
                        <h3 class="display-4">Sender's <span class="fastbox">Details</span></h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="s_full_name" id="" placeholder="Sender's Full Name *" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="s_email" id="" placeholder="Sender's Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="tel" name="s_phone_number" id="" placeholder="Sender's Phone Number *" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="s_address" id="" placeholder="Sender's Current Address *" required>
                            </div>
                        </div>

                        <h3 class="display-4">Reciever's <span class="fastbox">Details</span></h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="r_full_name" id="" placeholder="Reciever's Full Name *" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="r_email" id="" placeholder="Reciever's Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="tel" name="r_phone_number" id="" placeholder="Reciever's Phone Number *" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="r_address" id="" placeholder="Reciever's Current Address *" required>
                            </div>
                        </div>

                        <h3 class="display-4">Product's <span class="fastbox">Deails</span></h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <input id="weight" type="number" placeholder="Product Weight (Max 10KG) *" max="10"
                                    min="1" name="product_weight" oninput="calculateCost()" required>
                            </div>
                            <div class="col-lg-6">
                                <input id="price" type="number" placeholder="Product Selling Price *" min="1"
                                    name="product_selling_price" oninput="calculateCost()" required>
                            </div>
                        </div>

                        <h3 class="display-4">Delivery <span class="fastbox">Details</span></h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <select name="pickup_point" id="" required>
                                    <option value="" selected disabled>Choose Pickup Point *</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Dhaka Division</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Faridpur">Faridpur</option>
                                    <option value="Gazipur">Gazipur</option>
                                    <option value="Gopalganj">Gopalganj</option>
                                    <option value="Jamalpur">Jamalpur</option>
                                    <option value="Kishoreganj">Kishoreganj</option>
                                    <option value="Madaripur">Madaripur</option>
                                    <option value="Manikgonj">Manikgonj</option>
                                    <option value="Munshiganj">Munshiganj</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Narayanganj">Narayanganj</option>
                                    <option value="Narshingdi">Narshingdi</option>
                                    <option value="Netrokona">Netrokona</option>
                                    <option value="Rajbari">Rajbari</option>
                                    <option value="Shariatpur">Shariatpur</option>
                                    <option value="Sherpur">Sherpur</option>
                                    <option value="Tangail">Tangail</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Chattogram Division</option>
                                    <option value="Bandarban">Bandarban</option>
                                    <option value="Brahmanbaria">Brahmanbaria</option>
                                    <option value="Chandpur">Chandpur</option>
                                    <option value="Chattogram">Chattogram</option>
                                    <option value="Comilla">Comilla</option>
                                    <option value="Coxsbazar">Coxsbazar</option>
                                    <option value="Feni">Feni</option>
                                    <option value="Khagrachori">Khagrachori</option>
                                    <option value="Lakshmipur">Lakshmipur</option>
                                    <option value="Noakhali">Noakhali</option>
                                    <option value="Rangamati">Rangamati</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Sylhet Division</option>
                                    <option value="Hobiganj">Hobiganj</option>
                                    <option value="Moulvibazar">Moulvibazar</option>
                                    <option value="Sunamganj">Sunamganj</option>
                                    <option value="Sylhet">Sylhet</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Rangpur Division</option>
                                    <option value="Dinjpur">Dinjpur</option>
                                    <option value="Gaibandha">Gaibandha</option>
                                    <option value="Kurigram">Kurigram</option>
                                    <option value="Lalmonihat">Lalmonihat</option>
                                    <option value="Nilphamari">Nilphamari</option>
                                    <option value="Panchagarh">Panchagarh</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Thakurgaon">Thakurgaon</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Barishal Division</option>
                                    <option value="Barguna">Barguna</option>
                                    <option value="Barishal">Barishal</option>
                                    <option value="Bhola">Bhola</option>
                                    <option value="Jhalokathi">Jhalokathi</option>
                                    <option value="Patuakhali">Patuakhali</option>
                                    <option value="Pirojpur">Pirojpur</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Rajshahi Division</option>
                                    <option value="Bogra">Bogra</option>
                                    <option value="Chapinawabganj">Chapinawabganj</option>
                                    <option value="Joypurhut">Joypurhut</option>
                                    <option value="Naogaon">Naogaon</option>
                                    <option value="Natore">Natore</option>
                                    <option value="Pabna">Pabna</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Sirajganj">Sirajganj</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Khulna Division</option>
                                    <option value="Bagherhat">Bagherhat</option>
                                    <option value="Chuadanga">Chuadanga</option>
                                    <option value="Jassore">Jassore</option>
                                    <option value="Jinaidaha">Jinaidaha</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Magura">Magura</option>
                                    <option value="Meherpur">Meherpur</option>
                                    <option value="Narail">Narail</option>
                                    <option value="Satkhira">Satkhira</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <select name="delivery_point" id="" required>
                                    <option value="" selected disabled>Choose Delivery Point *</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Dhaka Division</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Faridpur">Faridpur</option>
                                    <option value="Gazipur">Gazipur</option>
                                    <option value="Gopalganj">Gopalganj</option>
                                    <option value="Jamalpur">Jamalpur</option>
                                    <option value="Kishoreganj">Kishoreganj</option>
                                    <option value="Madaripur">Madaripur</option>
                                    <option value="Manikgonj">Manikgonj</option>
                                    <option value="Munshiganj">Munshiganj</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Narayanganj">Narayanganj</option>
                                    <option value="Narshingdi">Narshingdi</option>
                                    <option value="Netrokona">Netrokona</option>
                                    <option value="Rajbari">Rajbari</option>
                                    <option value="Shariatpur">Shariatpur</option>
                                    <option value="Sherpur">Sherpur</option>
                                    <option value="Tangail">Tangail</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Chattogram Division</option>
                                    <option value="Bandarban">Bandarban</option>
                                    <option value="Brahmanbaria">Brahmanbaria</option>
                                    <option value="Chandpur">Chandpur</option>
                                    <option value="Chattogram">Chattogram</option>
                                    <option value="Comilla">Comilla</option>
                                    <option value="Coxsbazar">Coxsbazar</option>
                                    <option value="Feni">Feni</option>
                                    <option value="Khagrachori">Khagrachori</option>
                                    <option value="Lakshmipur">Lakshmipur</option>
                                    <option value="Noakhali">Noakhali</option>
                                    <option value="Rangamati">Rangamati</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Sylhet Division</option>
                                    <option value="Hobiganj">Hobiganj</option>
                                    <option value="Moulvibazar">Moulvibazar</option>
                                    <option value="Sunamganj">Sunamganj</option>
                                    <option value="Sylhet">Sylhet</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Rangpur Division</option>
                                    <option value="Dinjpur">Dinjpur</option>
                                    <option value="Gaibandha">Gaibandha</option>
                                    <option value="Kurigram">Kurigram</option>
                                    <option value="Lalmonihat">Lalmonihat</option>
                                    <option value="Nilphamari">Nilphamari</option>
                                    <option value="Panchagarh">Panchagarh</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Thakurgaon">Thakurgaon</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Barishal Division</option>
                                    <option value="Barguna">Barguna</option>
                                    <option value="Barishal">Barishal</option>
                                    <option value="Bhola">Bhola</option>
                                    <option value="Jhalokathi">Jhalokathi</option>
                                    <option value="Patuakhali">Patuakhali</option>
                                    <option value="Pirojpur">Pirojpur</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Rajshahi Division</option>
                                    <option value="Bogra">Bogra</option>
                                    <option value="Chapinawabganj">Chapinawabganj</option>
                                    <option value="Joypurhut">Joypurhut</option>
                                    <option value="Naogaon">Naogaon</option>
                                    <option value="Natore">Natore</option>
                                    <option value="Pabna">Pabna</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Sirajganj">Sirajganj</option>

                                    <option value="" disabled></option>
                                    <option value="" disabled>Khulna Division</option>
                                    <option value="Bagherhat">Bagherhat</option>
                                    <option value="Chuadanga">Chuadanga</option>
                                    <option value="Jassore">Jassore</option>
                                    <option value="Jinaidaha">Jinaidaha</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Magura">Magura</option>
                                    <option value="Meherpur">Meherpur</option>
                                    <option value="Narail">Narail</option>
                                    <option value="Satkhira">Satkhira</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <!-- checkout section -->
                    <div class="col-lg-4 checkout">
                        <h3 class="display-4">Check<span class="fastbox">out</span></h3>
                        <input type="radio" name="payment_method" id="" value="bKash">
                        <label for="checkout">bKash</label><br>

                        <input type="radio" name="payment_method" id="" value="Nagad">
                        <label for="checkout">Nagad</label><br>

                        <input type="radio" name="payment_method" id="" value="Chash On Delivery">
                        <label for="checkout">Chash On Delivery</label>
                        <div class="price">
                            <h3 class="display-4">Total:</h3>
                            <h3 class="display-3"><span id="delivery-cost">0</span><span class="fastbox">TK</span></h3>
                            <input id="delivery-cost-input" value="" name="total_cost" type="hidden" hidden>
                        </div>
                        <button type="submit" id="button" name="confirmOrder">Confirm Order</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- order section ends -->

    <!-- fastbox footer start -->
    <section id="footer">
        <div class="container py-5 mt-5">
            <div class="row">
                <div class="col-sm-3">
                    <img src="./vendor/img/FastBox Logo White.svg" alt="" id="logo">
                    <p class="pt-5">Download the FAST<span class="fastbox">BOX</span> app for the fastest solution</p>
                    <div class="app">
                        <a href="#">
                            <ion-icon name="logo-android"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-apple"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h5 class="heading">Important Links</h5>
                    <nav>
                        <a href="./login.php">Login</a>
                        <a href="./register.php">Register</a>
                        <a href="./dashboard.php">Dashboard</a>
                        <a href="./coverage-area.php">Coverage Area</a>
                        <a href="./faq.php">FAQs</a>
                        <a href="./privacy-policy.php">Privacy Policy</a>
                    </nav>
                </div>
                <div class="col-sm-3">
                    <h5 class="heading">Contact</h5>
                    <nav>
                        <p>Agrabadh Commercial Zone,
                            Chattogram - 4100.</p>
                        <a href="tel:+8801400492967">01400-492967</a>
                        <a href="mailto:towfiqueelahe6@gmail.com">towfiqueelahe6@gmail.com</a>
                    </nav>
                </div>
                <div class="col-sm-3">
                    <h5 class="heading">Connect</h5>
                    <div class="social">
                        <a href="https://www.facebook.com/thoufiq.fahim.1">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                        <a href="https://www.instagram.com/towfique_elahe/">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                        <a href="https://www.youtube.com/channel/UCI2Gtpz2TxTwEZjcOA_jydg">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </div>
                    <p>© FAST<span class="fastbox">BOX</span> 2021. All rights reserved</p>
                </div>
            </div>

            <p class="text-center">Powered by FAST<span class="fastbox">BOX</span></p>
        </div>
    </section>
    <!-- fastbox footer ends-->

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

    <!-- order js -->
    <script src="./vendor/js/order.js"></script>
</body>

</html>