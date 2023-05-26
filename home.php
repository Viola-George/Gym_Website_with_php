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


    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.1s">Hi This is Tuitions Tonight</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.4s">Gym Trainer</h1>
                                    <a href="courses.php" class="border-btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">My Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Traning categories Start -->
        <section class="traning-categories black-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/cat1.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3>Personal traning</h3>
                                        <p>You’ll look at graphs and charts in Task One, how to approach the task and <br> the language needed for a successful answer.</p>
                                        <a href="courses.php" class="border-btn">View Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/cat2.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3>Group traning</h3>
                                        <p>You’ll look at graphs and charts in Task One, how to approach the task and <br> the language needed for a successful answer.</p>
                                        <a href="courses.php" class="btn">View Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Traning categories End-->
        <!--? Team -->
        <section class="team-area fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <h2>What I Offer</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team1.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="contact.php">Body Building</a></h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team2.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="contact.php">Muscle Gain</a></h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team3.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="contact.php">Weight Loss</a></h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? Gallery Area Start -->
        <div class="gallery-area section-padding30 ">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h3>Coach Jon </h3>
                                    <a href="coach.php"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h3>Coach Rock </h3>
                                    <a href="coach.php"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h3>Coach Ashly </h3>
                                    <a href="coach.php"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h3>Coach Massy </h3>
                                    <a href="coach.php"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h3>Coach Vivian </h3>
                                    <a href="coach.php"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h3>Coach Mark </h3>
                                    <a href="coach.php"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!-- Courses area start -->
        <section class="pricing-area section-padding40 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                            <h2>Pricing</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
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
                                    <a href="contact.php" class="border-btn border-btn2">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
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
                                    <a href="contact.php" class="border-btn border-btn2">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
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
                                    <a href="contact.php" class="border-btn border-btn2">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses area End -->
        <!--? About Area-2 Start -->
        <section class="about-area2 fix pb-padding pt-50 pb-80">
            <div class="support-wrapper align-items-center">
                <div class="right-content2">
                    <!-- img -->
                    <div class="right-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <img src="assets/img/gallery/about.png" alt="">
                    </div>
                </div>
                <div class="left-content2">
                    <!-- section tittle -->
                    <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="front-text">
                            <h2 class="">About Me</h2>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task and the language needed
                                for a successful answer. You’ll examine Task Two questions and learn how to plan, write and
                                check academic essays.</p>
                            <p class="mb-40">Task One, how to approach the task and the language needed for a successful answer. You’ll
                                examine Task Two questions and learn how to plan, write and check academic essays.</p>
                            <a href="courses.php" class="border-btn">My Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area pt-10 pb-50">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                            <h2>From Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog1.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <span>Gym & Fitness</span>
                                    <h3><a href="blog_details.html">Your Antibiotic One Day To 10 Day Options</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog2.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <span>Gym & Fitness</span>
                                    <h3><a href="blog_details.html">Your Antibiotic One Day To 10 Day Options</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
        <!--? video_start -->
        <div class="video-area section-bg2 d-flex align-items-center" data-background="assets/img/gallery/video-bg.png">
            <div class="container">
                <div class="video-wrap position-relative">
                    <div class="video-icon">
                        <a class="popup-video btn-icon" href="https://youtu.be/bJpn4GWfSTQ"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- video_end -->
        <!-- ? services-area -->
        <!-- <section class="bg-white m-5 services-area">
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
                                <img src="assets/img/icon/whatsapp.png" alt="">
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
        <!-- SCHEDULE -->


        <!-- CONTACT -->
        <section class="pt-5 m-5 contact section" id="contact">
            <?php
            include('connect.php');
            // When form submitted, insert values into the database.


            if (isset($_POST['submit'])) {
                $name = $_SESSION['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $query = "INSERT INTO contactus(name, email, message) VALUE('$name','$email','$message')";
                $exe = mysqli_query($conn, $query);
                if ($exe) {
                    echo "message recieved we'll contact you as soon as possible.";
                    header("location:home.php");
                } else {
                    echo mysqli_error($conn);
                }
            }
            ?>
            <div style="background-color:white; margin: auto;justify-items: center;" class="p-5 m-1  section-bg2 d-flex align-items-center contact section container">
                <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                        <form action="#" method="post" class="form-group " data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="m-2 form-control" name="name" placeholder="Name">

                            <input type="email" class="m-2 form-control" name="email" placeholder="Email">

                            <textarea class="m-2 form-control" rows="5" name="message" placeholder="Message"></textarea>
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                            <button type="submit" class="btn form-control" id="submit-button" name="submit">Send Message</button>
                        </form>
                    </div>

                    <div class="mx-auto  col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i>3rd Floor, City Mall, Mombasa, Kenya, 80118</p>
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31839.533826484338!2d39.671047221477046!3d-4.0323132028069395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18400da513b74519%3A0x4907b31e765cb224!2sF4L%20GYM%20%2F%20Fitness%20for%20Life%20Gym!5e0!3m2!1sen!2ske!4v1622110076416!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>


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