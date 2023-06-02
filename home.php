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
        #icon {
            height: 30px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .darkmode-toggle {
            width: 3rem;
            height: 3rem;
            position: fixed;
            border-radius: 50%;
            border: none;
            right: 60px;
            top: 84%;
            left: unset;
            cursor: pointer;
            transition: all 0.5s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 11;
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
                                    <!-- <li><img id="icon" src="images/moon.png"></li> -->
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
                                    <h1 data-animation="fadeInLeft" data-delay="0.4s">Healthy Life</h1>
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
                                    <span class="month">9 month</span>
                                    <p class="mb-25">$90/m <span>(Family class)</span></p>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Free Execirse </p>
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
                                    <p class="mb-25">$60/m <span>(Couple class)</span></p>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Free Execirse </p>
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
                                            <img style="width: 15px;" src="images/xxx.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Weight losing classes</p>
                                        </div>
                                    </div>
                                    <div class="single-features mb-20">
                                        <div class="features-icon">
                                            <img style="width: 15px;" src="images/xxx.png" alt="">
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
                                    <span class="month">3 month</span>
                                    <p class="mb-25">$30/m <span>(Single class)</span></p>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img src="assets/img/icon/check.svg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Free Execirse </p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 15px;" src="images/xxx.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Unlimited equipments</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 15px;" src="images/xxx.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Personal trainer</p>
                                        </div>
                                    </div>
                                    <div class="single-features">
                                        <div class="features-icon">
                                            <img style="width: 15px;" src="images/xxx.png" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <p>Weight losing classes</p>
                                        </div>
                                    </div>
                                    <div class="single-features mb-20">
                                        <div class="features-icon">
                                            <img style="width: 15px;" src="images/xxx.png" alt="">
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
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <h2>Diet Systems</h2>
                        </div>
                    </div>
                </div>
                <br><br><strong>
                    <h1 style="color: #FF0000;position: relative;right: 50px; " class="p-3">For overweight</h1>
                </strong> <br><br>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div style="background-color: transparent;" class="card">
                                <div class="card-body">
                                    <h3 style="color: white;" class="card-title">Intermittent Fasting</h3>
                                    <p style="color: #7a7a7a;" class="card-text">Intermittent fasting is an eating pattern that cycles between periods of fasting and eating. It has been shown to have various health benefits and can aid in weight loss.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">

                            <div style="background-color: transparent;" class="card">
                                <div class="card-body">
                                    <h3 style="color: white;" class="card-title">The low-calorie diet is a weight-loss approach that involves reducing calorie intake</h3>
                                    <p style="color: #7a7a7a;" class="card-text">The individual is required to consume limited amounts of calories by reducing portion sizes or cutting back on high-fat and high-sugar foods.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">

                            <div style="background-color: transparent;" class="card">
                                <div class="card-body">
                                    <h3 style="color: white;" class="card-title">The vegetarian diet </h3>
                                    <p style="color: #7a7a7a;" class="card-text">The vegetarian diet or strict vegetarian diet excludes meat and animal products and relies on vegetables, fruits, grains, nuts, and seeds as sources of food.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">

                            <div style="background-color: transparent;" class="card">
                                <div class="card-body">
                                    <h3 style="color: white;" class="card-title">The high-protein diet </h3>
                                    <p style="color: #7a7a7a;" class="card-text">The high-protein diet focuses on increasing protein intake, which is beneficial for muscle building and prolonged satiety..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">

                            <div style="background-color: transparent;" class="card">
                                <div class="card-body">
                                    <h3 style="color: white;" class="card-title">The whole foods diet </h3>
                                    <p style="color: #7a7a7a;" class="card-text">The high-protein diet focuses on increasing protein intake, which is beneficial for muscle building and prolonged satietyThe whole foods diet relies on consuming natural, unprocessed foods such as fruits, vegetables, whole grains, and healthy proteins. It aims to promote overall health and good nutrition.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">

                            <div style="background-color: transparent;" class="card">
                                <div class="card-body">
                                    <h3 style="color: white;" class="card-title">Ketogenic Diet</h3>
                                    <p style="color: #7a7a7a;" class="card-text">The ketogenic diet is a low-carb, high-fat diet that has been shown to help with weight loss and improve certain health conditions. It involves reducing carbohydrate intake and replacing it with fat.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br><strong>
                        <h1 style="color: #FF0000;position: relative;right: 50px; " class="p-5">For Underweight</h1>
                    </strong> <br><br>
                    <br><br>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <div style="background-color: transparent;" class="card">
                                    <div class="card-body">
                                        <h3 style="color: white;" class="card-title">Increase calorie intake</h3>
                                        <p style="color: #7a7a7a;" class="card-text">You need to consume more calories than you burn each day. Increase your portion sizes and have snacks throughout the day.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">

                                <div style="background-color: transparent;" class="card">
                                    <div class="card-body">
                                        <h3 style="color: white;" class="card-title">Eat balanced meals</h3>
                                        <p style="color: #7a7a7a;" class="card-text">Your meals should include a variety of nutrients, such as proteins, carbohydrates, and healthy fats. Protein sources include meats, fish, eggs, dairy, and nuts. Carbohydrate sources include rice, bread, potatoes, and whole grains. Healthy fats can be obtained from olive oil, avocado, and nuts..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">

                                <div style="background-color: transparent;" class="card">
                                    <div class="card-body">
                                        <h3 style="color: white;" class="card-title">Have larger meals </h3>
                                        <p style="color: #7a7a7a;" class="card-text">Try to increase the size of your main meals. You may need to eat larger portions than usual to increase calorie intake..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">

                                <div style="background-color: transparent;" class="card">
                                    <div class="card-body">
                                        <h3 style="color: white;" class="card-title">Have snacks </h3>
                                        <p style="color: #7a7a7a;" class="card-text">Have healthy snacks between main meals. Snacks can include natural juices, fruits, yogurt, and nuts.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">

                                <div style="background-color: transparent;" class="card">
                                    <div class="card-body">
                                        <h3 style="color: white;" class="card-title">Consume calorie-rich beverages </h3>
                                        <p style="color: #7a7a7a;" class="card-text">Drink calorie-rich liquids such as natural juices, milk, and dense fruit smoothies. Avoid drinking fluids right before meals to stimulate appetite.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">

                                <div style="background-color: transparent;" class="card">
                                    <div class="card-body">
                                        <h3 style="color: white;" class="card-title">Exercise</h3>
                                        <p style="color: #7a7a7a;" class="card-text">Engaging in strength training exercises such as weightlifting can help in gaining muscle mass and weight.</p>
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

                        <a class="popup-video btn-icon" href="#"><i class="fas fa-play"></i></a>
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
                $name = $_POST['name'] ?? NULL;
                $email = $_POST['email'];
                $message = $_POST['message'];
                $query = "INSERT INTO contactus(name, email, message) VALUE('$name','$email','$message')";
                $exe = mysqli_query($conn, $query);
                if ($exe) {
                    echo "<p style='color: black;
                    position: relative;
                    top: 430px;
                    left: 111px;'>
                    " . $name . " ,Your message recieved. we'll contact you as soon as possible.</p>";
                    //header("location:home.php");
                } else {
                    echo mysqli_error($conn);
                }
            }
            ?>
                        <div class=" align-items-center container" style="background-color:white;justify-items: center;">
                <div class="row">

                    <div class="m-auto p-5 col-lg-12 align-items-center justify-items: center; col-md-12 col-12">
                        <h1 class="mb-4 pb-2" style="color: black;" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h1>

                        <form action="#" method="post" data-aos="fade-up" data-aos-delay="400" role="form" class="form-group m-5 ">
                            <input type="text" name="name" placeholder="Name" class="m-3 pb-3 form-control">

                            <input type="email" name="email" placeholder="Email" class="m-3 form-control">

                            <textarea rows="5" name="message" placeholder="Message" style="height: 187px;" class="m-3 form-control"></textarea>
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                            <button type="submit" class="btn form-control" id="submit-button" name="submit">Send Message</button>
                        </form>
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
    <script src="https://unpkg.com/darkmode-js@1.3.4/lib/darkmode-js.js"></script>
    <!-- <script src="js/darkmode-js.js"></script>
    <script>
      new Darkmode({
        bottom: '32px',
        right: '32px',
        time: '0.5s',
        label: '🌓'
      }).showWidget();
    </script> -->

</body>

</html>