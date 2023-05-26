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
</head>

<body class="black-bg">
    <!-- ? Preloader Start -->








    <!-- SCHEDULE -->
    <section class="schedule section" id="schedule">
        <div class="container">
            <div class="row">

                <style>
                    .form {


                        padding: 30px 25px;
                        background: white;

                        width: 500px;

                        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
                        margin: 100px auto;
                    }

                    .reg-input {
                        width: 440px;
                        height: 50px;
                        border: 1px solid #dee0e4;
                        margin-bottom: 20px;
                        padding: 0 15px;
                    }

                    .text {


                        color: red;
                        font-size: 30px;

                    }

                    .text1 {

                        font-size: 26px;
                        color: black;

                    }

                    .link {

                        font-size: 26px;
                        color: blue;

                    }
                </style>
                <?php
                session_start();
                include('connect.php');
                // When form submitted, insert values into the database.
                if (isset($_POST['submit'])) {

                    $username = ($_POST['username']);
                    $password = ($_POST['password']);
                    $query    = "SELECT * FROM `user` WHERE username='$username'
                     AND password='" . md5($password) . "'";
                    $result = mysqli_query($conn, $query);
                    $rowcount = mysqli_num_rows($result);
                    $row = mysqli_fetch_array($result);
                    $_SESSION["name"] = $row['username'];
                    if ($rowcount > 0) {
                        $_SESSION['log'] = true;
                        header('Location:store.php');
                    } else {
                        echo "           
                    <div id='form'>
                    <h3 class='text'>username and password do not match</h3><br/>
                          <p class='text1'>Click here to <a  class='link' href='login.php'>Login Again</a></p>
                          </div>
                
                
               ";
                    }
                } else {
                ?>
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
                    <nav class="navbar navbar-expand-lg fixed-top">
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
                    </nav>




                    <div class="mr-lg-auto pt-5 mt-5 col-lg-4 col-md-6 col-12">

                        <form class="form" method="post">

                            <h1 style="color:red;font-size:34px;">Login </h1>

                            <br>



                            <input type="text" class="reg-input" name="username" placeholder="Username...." required /><br>



                            <input type="password" class="reg-input" name="password" placeholder="Password..." required><br>

                            <br>
                            <p>Donot Have An Account ?<a href="register.php" style="color: red;margin-left: 40%;padding-top: 50%;text-decoration-line: underline;">Register Now</a></p>
                            <br>
                            <button type="submit" class="btn form-control" id="submit-button" name="submit">login</button>

                        </form>
                    </div>
            </div>
        </div>
        </div>

        </div>
        </div>
    <?php } ?>

    </div>
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
                                    <a href="https://www.youtube.com/channel/UCsZydS6Ww6KdeGsYao4lniw"><i class="fab fa-youtube"></i></a>
                                    <a href="https://m.facebook.com/TT7.in/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/tuitionstonight/"><i class="fab fa-instagram"></i></a>
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
                                    </script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> <a href="#" target="_blank">By Myself Effort </a>
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