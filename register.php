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
    </style>
    <?php

    include('connect.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        $fname = ($_POST['fname']);
        $lname = ($_POST['lname']);
        $email    = ($_POST['email']);
        $phone = ($_POST['phone']);
        $postcode = ($_POST['postcode']);
        $username = ($_POST['username']);
        $password = ($_POST['password']);
        $regdate = date("Y-m-d H:i:s");

        $query    = "SELECT * FROM `user` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result1 = mysqli_query($conn, $query);
        $rowcount = mysqli_num_rows($result1);
        $row = mysqli_fetch_array($result1);



        $_SESSION['name'] = $row['username'];
        if ($rowcount > 0) {
            $_SESSION['log'] = true;
            echo "
            <style>
            .text {
      
      
               color:red;
               font-size:30px;
                
                         }
                         .text1 {
      
                            font-size:26px;
                            color:black;
                             
                                      }
                         .link {
      
                            font-size:26px;
                            color:blue;
                             
                                      }
                </style>
            
            <div class='form'>
                  <h3 class='text'>The username already exists/ you can login if this is your account</h3><br/>
                  <p class='text1'>Click here to <a class='link' href='signup.php'>SignUP</a> again.</p>
                  <p class='text1'>Click here to <a class='link'href='login.php'>Login to your account</a></p>
                  </div>";
        } else {
            $query    = "INSERT into `user` (fname,lname, email, phone, Postcode, username,
                 password, userr_regdate)
                     VALUES ('$fname','$lname','$email','$phone','$postcode','$username', 
                     '" . md5($password) . "', '$regdate')";


            if ($result   = mysqli_query($conn, $query)) {
                header('Location:login.php');
            } else {
                echo "
            <style>
            .text {
      
      
               color:red;
               font-size:30px;
                
                         }
                         .text1 {
      
                            font-size:26px;
                            color:black;
                             
                                      }
                         .link {
      
                            font-size:26px;
                            color:blue;
                             
                                      }
                </style>
                <div class='form'>
                <h3 class='text'>Required fields are missing.</h3><br/>
                  <p  class='text1'>Click here to <a class='link'href='register.php'>register</a> again.</p>
                  </div>          
            
           ";
            }
        }
    } else {
    ?>


        <section class="feature" id="feature">
            <div class="container">
                <div class="row">

                    <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                        <h1 class="mb-3 text-white" data-aos="fade-up">New to the Platinum Fitness & Gym?</h1>

                        <h3 class="mb-4 text-white" data-aos="fade-up">Your membership is up to 2 months FREE (KSH 6,000 per month)</h3>


                    </div>


                    <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">

                        <form class="form" method="post">
                            <h1 style="color:red;font-size:34px;">Signup </h1>

                            <br>
                            <input type="text" class="reg-input" name="fname" placeholder="First Name...." required /><br>

                            <input type="text" class="reg-input" name="lname" placeholder="Last Name...." required /><br>



                            <input type="text" class="reg-input" name="email" placeholder="Email Adress...." required><br>


                            <input type="text" class="reg-input" name="phone" placeholder="Phone...." required /><br>


                            <input type="text" class="reg-input" name="postcode" placeholder="PostCode...." required /><br>



                            <input type="text" class="reg-input" name="username" placeholder="Username...." required /><br>



                            <input type="password" class="reg-input" name="password" placeholder="Password..." required><br>
                            <br>
                            <button type="submit" class="btn form-control" id="submit-button" name="submit">Join</button>

                        </form>
                    </div>
                </div>
            </div>
            </div>

            </div>
            </div>
        </section>

    <?php
    }
    ?>

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
                                    </script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> <a href="https://www.TuitionsTonight.com" target="_blank">By Myself Effort</a>
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