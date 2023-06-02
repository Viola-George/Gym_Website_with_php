<?php
session_start();
include("connect.php");
if ($_SESSION["log"] == false) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

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
    <!-- SCHEDULE -->
    <section style="padding-top: 10%;" class=" schedule section" id="account">
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
                        border: 1px solid;
                        margin-bottom: 20px;
                        padding: 0 15px;
                        background-color: white;
                    }
                </style>

                <?php

                include('connect.php');
                if (isset($_POST['save'])) {
                    $username = $_SESSION['name'];
                    $email = ($_POST['email']);
                    $password = ($_POST['pass']);

                    $query1    = "SELECT * FROM `user` WHERE username='$username', email='$email'  AND password='" . md5($password) . "'";
                    $rst1 = mysqli_query($conn, $query1);
                    $cntrw = mysqli_num_rows($rst1);
                    $row = mysqli_fetch_array($rst1);

                    $_SESSION['name'] = $row['username'];
                    if ($cntrw > 0) {
                        $_SESSION['login'] = true;
                    } else {
                        $qry = "UPDATE `user` SET email='$email', password='" . md5($password) . "' WHERE username='$username'";
                        $rst   = mysqli_query($conn, $qry);
                        if ($rst == true) {
                            echo "<div class='form'>
              <h3>Your details have been Updated :)</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a></p>
                    </div>";
                        } elseif ($rst == false) {
                            echo "<div class='form'>
              <h3>Your details have not been Updated!!! :(</h3><br/>
                    <p class='link'>Click here to <a href='register.php'>register</a> again.</p>
                    </div>";
                        }
                    }
                } else {


                ?>


                    <div class="container rounded   mt-5 mb-5">

                        <div class="row">
                            <div class="col-md-3 border-right">

                            </div>

                            <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">




                                <form method="post">

                                    <h1 style="color: white;" class="login-title"> User Information</h1>
                                    <br> <br>
                                    <br>

                                    <input style="color: black;background-color: white;" class="reg-input" name="uname" placeholder="<?php echo $_SESSION["name"]; ?>" disabled /><br>


                                    <!-- <input style="color: black ;background-color: white;" class="reg-input" name="email" placeholder="Email...." required /><br> -->




                                    <input style="color: black;" type="password" class="reg-input" name="pass" placeholder="***********" required /><br>
                                    <br>
                                    <!-- <input type="submit" name="save" value="Update" class="btn login-button"> -->

                                    <br>

                                </form>
                            </div>
                        </div>
                    <?php
                }

                    ?>




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
    <script src="./assets/js/main.js"></script>

</body>

</html>