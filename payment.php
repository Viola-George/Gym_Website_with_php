<?php
session_start();
include("connect.php");

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Healthy Life </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        /* WRAPPERS */
        #wrapper {
            width: 100%;
            overflow-x: hidden;
        }

        .wrapper {
            padding: 0 20px;
        }

        .wrapper-content {
            padding: 20px 10px 40px;
        }

        #page-wrapper {
            padding: 0 15px;
            min-height: 568px;
            position: relative !important;
        }

        @media (min-width: 768px) {
            #page-wrapper {
                position: inherit;
                margin: 0 0 0 240px;
                min-height: 2002px;
            }
        }

        /* Payments */
        .payment-card {
            background: #ffffff;
            padding: 20px;
            margin-bottom: 25px;
            border: 1px solid #e7eaec;
        }

        .payment-icon-big {
            font-size: 60px;
            color: #d1dade;
        }

        .payments-method.panel-group .panel+.panel {
            margin-top: -1px;
        }

        .payments-method .panel-heading {
            padding: 15px;
        }

        .payments-method .panel {
            border-radius: 0;
        }

        .payments-method .panel-heading h5 {
            margin-bottom: 5px;
        }

        .payments-method .panel-heading i {
            font-size: 26px;
        }

        .payment-icon-big {
            font-size: 60px !important;
            color: #d1dade;
        }

        .form-control,
        .single-line {
            background-color: #FFFFFF;
            background-image: none;
            border: 1px solid #e5e6e7;
            border-radius: 1px;
            color: inherit;
            display: block;
            padding: 6px 12px;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
            width: 100%;
            font-size: 14px;
        }

        .text-navy {
            color: #1ab394;
        }

        .text-success {
            color: #1c84c6;
        }

        .text-warning {
            color: #f8ac59;
        }

        .ibox {
            clear: both;
            margin-bottom: 25px;
            margin-top: 0;
            padding: 0;
        }

        .ibox.collapsed .ibox-content {
            display: none;
        }

        .ibox.collapsed .fa.fa-chevron-up:before {
            content: "\f078";
        }

        .ibox.collapsed .fa.fa-chevron-down:before {
            content: "\f077";
        }

        .ibox:after,
        .ibox:before {
            display: table;
        }

        .ibox-title {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #ffffff;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 3px 0 0;
            color: inherit;
            margin-bottom: 0;
            padding: 14px 15px 7px;
            min-height: 48px;
        }

        .ibox-content {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
        }

        .ibox-footer {
            color: inherit;
            border-top: 1px solid #e7eaec;
            font-size: 90%;
            background: #ffffff;
            padding: 10px 15px;
        }

        .text-danger {
            color: #ed5565;
        }

        .paymentClass {
            position: fixed;
            left: 50%;
            top: 45%;
        }
    </style>

</head>

<body class="black-bg">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="img/TT.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">

                        <div class="logo">
                            <a href="index.html"><img src="img/TT.png" alt=""></a>
                            <strong><a style="font-size: 230%;" class="display-1 navbar-brand" href="home.php">
                                    Healthy<span style="color: red;font-size: 130%;">Life</span> </a></strong>

                        </div>

                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="home.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>

                                    <li><a href="execirse.php">Execirse</a></li>

                                    <li><a href="courses.php">Courses</a></li>
                                    <li><a href=" price.php">Pricing</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <!-- <li><a href="Account.php">Account</a></li> -->
                                    <li><a href="logout.php">logout</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->

                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Header End -->
    </header>
    <br><br><br><br><br><br><br><br><br>
    <main>
        <section>

            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="payment-card">
                                <i class="fa fa-cc-visa payment-icon-big text-success"></i>
                                <h2>
                                    **** **** **** 1060
                                </h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <small>
                                            <strong>Expiry date:</strong> 10/16
                                        </small>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <small>
                                            <strong>Name:</strong> David
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="payment-card">
                                <i class="fa fa-cc-mastercard payment-icon-big text-warning"></i>
                                <h2>
                                    **** **** **** 7002
                                </h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <small>
                                            <strong>Expiry date:</strong> 10/16
                                        </small>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <small>
                                            <strong>Name:</strong> Anna Smith
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="payment-card">
                                <i class="fa fa-cc-discover payment-icon-big text-danger"></i>
                                <h2>
                                    **** **** **** 3466
                                </h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <small>
                                            <strong>Expiry date:</strong> 10/16
                                        </small>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <small>
                                            <strong>Name:</strong> Morgan
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-lg-12">

                            <div class="ibox">
                                <div class="ibox-title">
                                    <h1 style="color: black;"> Payment method </h1>
                                </div>
                                <div class="ibox-content">

                                    <div class="panel-group payments-method" id="accordion">
                                        <!-- <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-right">
                                    <i class="fa fa-cc-paypal text-success"></i>
                                </div>
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">PayPal</a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-10">
                                          <h2 style="color: black  important!;">Summary</h2>
                                            

                                            <p class="m-t">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            <a class="btn btn-danger">
                                                <i class="p-1 fa fa-cc-paypal">
                                                    Purchase via PayPal
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                     </div>
                            </div>
                        </div> -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <div class="pull-right">
                                                    <i class="fa fa-cc-visa payment text-success"></i>
                                                    <!-- <i class="p-1 fa fa-cc-amex text-success"></i> -->
                                                    <i class="p-1 fa fa-cc-mastercard text-warning"></i>
                                                    <i class="p-1 fa fa-cc-discover text-danger"></i>
                                                </div>
                                                <h5 class="panel-title">
                                                    <a data-toggle="collapse" style="color: red;" data-parent="#accordion" href="#collapseTwo"><strong>By Credit Card</strong></a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse in">
                                                <div class="panel-body">

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h2>Summary</h2>

                                                            <p style="color: black;" class="m-t">
                                                                Your Informations have been Securited – as any expert should tell you – isn’t just about keeping your data secret: it’s also about ensuring it is available when you need it, and that it can be believed. In the industry jargon you ensure information’s.

                                                            </p>

                                                        </div>
                                                        <?php
                                                        include('connect.php');
                                                        // When form submitted, insert values into the database.
                                                        if (isset($_POST['submit'])) {
                                                            $nameoncard = $_POST['nameoncard'] ?? NULL;
                                                            $creditcardno = $_POST['creditcardno'];
                                                            $expirymonth = $_POST['expirymonth'];
                                                            $CVV = $_POST['CVV'];
                                                            $query = "INSERT INTO courses(nameoncard,creditcardno, expirymonth, CVV) 
                                                       VALUE('$nameoncard','$creditcardno','$expirymonth','$CVV')";
                                                            $exe = mysqli_query($conn, $query);
                                                            if ($exe) {
                                                                echo "<p style='color: black;
                                                                position: relative;
                                                                top: 115px;
                                                                left: 306px;'>
                                                                " . $nameoncard . " ,Your payment has recieved we'll contact you as soon as possible.</p>";

                                                                // header("location:home.php");
                                                            } else {
                                                                echo mysqli_error($conn);
                                                            }
                                                        }
                                                        ?>
                                                        <br><br><br>
                                                        <div class="col-md-8 paymentClass">

                                                            <form role="form" action="#" method="post" class="form-group " id="payment-form" data-aos="fade-up" data-aos-delay="400" role="form">
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <div class="form-group">
                                                                            <label style="color: black;">NAME OF CARD</label>
                                                                            <input type="text" class="form-control" name="nameoncard" placeholder="NAME ON CARD">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <div class="form-group">
                                                                            <label style="color: black;">EXPIRATION DATE</label>
                                                                            <input type="text" class="form-control" name="expirymonth" placeholder="MM / YY" required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5 col-md-5 pull-right">
                                                                        <div class="form-group">
                                                                            <label style="color: black;">CVV CODE</label>
                                                                            <input type="text" class="form-control" name="CVV" placeholder="CVV" required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <div class="form-group">
                                                                            <label style="color: black;">CARD NUMBER</label>
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control" name="creditcardno" placeholder="Valid Card Number" required="">
                                                                                <span class="input-group-addon"><i style="font-size: 26px;" class="pl-3  fa fa-credit-card"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <button class="mt-5 btn btn-danger" name="submit" type="submit">Make a payment!</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>

</body>

<footer>
    <!--? Footer Start-->
    <div class="footer-area black-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- Footer Menu -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-footer-caption mb-50 text-center">
                            <!-- logo -->
                            <div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <a href="index.html"><img src="img/TT.png" alt=""></a>
                            </div>
                            <!-- Menu -->
                            <!-- Header Start -->
                            <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                <div class="main-header main-header2">
                                    <div class="menu-wrapper menu-wrapper2">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2 text-center">
                                            <nav>
                                                <ul>
                                                    <li><a href="home.php">Home</a></li>
                                                    <li><a href="about.php">About</a></li>
                                                    <li><a href="execirse.php">Execirse</a></li>
                                                    <li><a href="courses.php">Courses</a></li>
                                                    <li><a href=" price.php">Pricing</a></li>
                                                    <!-- <li><a href="Account.php">Account</a></li> -->
                                                    <li><a href="contact.php">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Header End -->
                            <!-- social -->
                            <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s">
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> <a href="#" target="_blank">MIS Team Under Supervision <span style="color:red;">Dr/mohamed Abbassy</span></a>‏
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

<!-- Scroll Up -->
<div id="back-top">

    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->

<!-- Plugins -->


<!-- Global Init -->
<script src="./assets/js/main.js"></script>

</body>

</html>