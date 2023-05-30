<?php
session_start();
include("connect.php");
if ($_SESSION["log"] == true) {

?>
    <!doctype html>
    <html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Healthy Life </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url" content="" />
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
        <!-- MENU BAR -->
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
                                        <li><a href="blog.php">Pricing</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="Account.php">Account</a></li>
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

        <!--blog start -->
        <section id="blog" style="width:auto;margin:10px" class="new-product-area " data-aos="fade-up" data-aos-delay="700">
            <div class="container">
                <!-- Section tittle -->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="row">


                </div>
                <div class="container">
                    <!-- Section tittle -->

                    <h5 style="text-align:center;color:red;"> : <?php
                                                            } else {
                                                                header("location:login.php");
                                                            }
                                                                ?>

                </div>
                <main>
                    <!--? Hero Start -->
                    <div class="slider-area2">
                        <div class="slider-height2 d-flex align-items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="hero-cap hero-cap2 pt-70">
                                            <h2>Pricing</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hero End -->

                    <!-- Courses area start -->
                    <section class="pricing-area section-padding30 fix">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="section-tittle text-center mb-55">
                                        <h2>Pricing</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="properties mb-30">
                                        <div class="properties__card">
                                            <div class="about-icon">
                                                <img src="assets/img/icon/price.svg" alt="">
                                            </div>
                                            <div class="properties__caption">
                                                <span class="month">6 month</span>
                                                <p class="mb-25">$30/m <span>(Single class)</span></p>
                                                <div class="single-features">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Free riding </p>
                                                    </div>
                                                </div>
                                                <div class="single-features">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Unlimited equipments</p>
                                                    </div>
                                                </div>
                                                <div class="single-features">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Personal trainer</p>
                                                    </div>
                                                </div>
                                                <div class="single-features">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Weight losing classes</p>
                                                    </div>
                                                </div>
                                                <div class="single-features mb-20">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Month to mouth</p>
                                                    </div>
                                                </div>
                                                <a href="payment.php" class="border-btn border-btn2">Pay Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="properties mb-30">
                                        <div class="properties__card">
                                            <div class="about-icon">
                                                <img src="assets/img/icon/price.svg" alt="">
                                            </div>
                                            <div class="properties__caption">
                                                <span class="month">6 month</span>
                                                <p class="mb-25">$30/m <span>(Single class)</span></p>
                                                <div class="single-features">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Free riding </p>
                                                    </div>
                                                </div>
                                                <div class="single-features">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Unlimited equipments</p>
                                                    </div>
                                                </div>
                                                <div class="single-features">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Personal trainer</p>
                                                    </div>
                                                </div>
                                                <div class="single-features">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Weight losing classes</p>
                                                    </div>
                                                </div>
                                                <div class="single-features mb-20">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Month to mouth</p>
                                                    </div>
                                                </div>
                                                <a href="payment.php" class="border-btn border-btn2">Pay Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="properties mb-30">
                                        <div class="properties__card">
                                            <div class="about-icon">
                                                <img src="assets/img/icon/price.svg" alt="">
                                            </div>
                                            <div class="properties__caption">
                                                <span class="month">6 month</span>
                                                <p class="mb-25">$30/m <span>(Single class)</span></p>
                                                <div class="single-features">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Free riding </p>
                                                    </div>
                                                </div>
                                                <div class="single-features">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Unlimited equipments</p>
                                                    </div>
                                                </div>
                                                <div class="single-features">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Personal trainer</p>
                                                    </div>
                                                </div>
                                                <div class="single-features">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Weight losing classes</p>
                                                    </div>
                                                </div>
                                                <div class="single-features mb-20">
                                                    <div class="features-icon">
                                                        <img src="assets/img/icon/check.svg" alt="">
                                                    </div>
                                                    <div class="features-caption">
                                                        <p>Month to mouth</p>
                                                    </div>
                                                </div>
                                                <a href="payment.php" class="border-btn border-btn2">Pay Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Courses area End -->
                    <section>
                        <div class="monthly">
                            <h2 style="color: white;" class="p-1 mb-5">Monthly membership</h2><br>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class=" col-lg-4 col-md-6 col-sm-12">
                                    <div class="card" id="monthlycards">
                                        <div class="card-body">
                                            <h5 class="card-title">Thousand off!</h5>
                                            <p class="card-text">
                                            <p>&#x20b9;8000 (no joining fee).</p>
                                            If you pay six months payment at a time, you will get thousand off, you don't have to pay joining fee also.
                                            </p>
                                            <a href="contact.php" class="btn btn-warning">Join now</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- monthly payment membership here -->
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card" id="monthlycards">
                                        <div class="card-body">
                                            <h5 class="card-title">Monthly payment</h5>
                                            <p class="card-text">
                                            <p>from &#x20b9;1500 + joining fee.</p>
                                            If you pay monthly wise you will not get any offers from us and you have to pay registration fee!
                                            </p>
                                            <a href="contact.php" class="btn btn-warning">Join now</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- seven days free trial membership -->
                                <div class=" col-lg-4 col-md-6 col-sm-12">
                                    <div class="card" id="monthlycards">
                                        <div class="card-body">
                                            <h5 class="card-title">Thousand off!</h5>
                                            <p class="card-text">
                                            <p>&#x20b9;8000 (no joining fee).</p>
                                            If you pay six months payment at a time, you will get thousand off, you don't have to pay joining fee also.
                                            </p>
                                            <a href="contact.php" class="btn btn-warning">Join now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- <section class="bg-white mt-5 services-area">
                        <div class="container">
                            <div class="row justify-content-between">

                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                                    <div class="single-services mb-40">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/icon1.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <h3 style="color: black;">Location</h3>
                                            <p style="color: black;">You’ll look at graphs and charts in Task One, how to approach </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                    <div class="single-services mb-40">
                                        <div class="features-icon">


                                            <img src="assets/img/icon/whatsapp.png" alt=""></a>
                                        </div>
                                        <div class="features-caption">
                                            <h3 style="color: black;">Phone</h3>
                                            <p style="color: black;">You can contact me phone or whatsapp</p>
                                            <p style="color: black;">at (78) 267 256 2578</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                    <div class="single-services mb-40">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/mail.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <h3 style="color: black;">Email</h3>
                                            <p style="color: black;">tuitionstonight@gmail.com</p>
                                            <p style="color: black;">tutifyy@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                </main>
            </div>
        </section>




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
                                                            <li><a href="blog.php">Pricing</a></li>
                                                            <li><a href="Account.php">Account</a></li>
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
                                        </script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> <a href="#" target="_blank">By Myself Effort</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
        <script src="./assets/js/main.js"></script>

    </body>

    </html>