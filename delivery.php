<?php
session_start();
if ($_SESSION["log"] == true) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

    <title>Platinum Gym And Fitness</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">

  </head>

  <body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">

        <a class="navbar-brand" href="index.php">Platinum Gym & Fitness</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
              <a href="home.php" class="nav-link smoothScroll">Home</a>
            </li>


            <li class="nav-item">
              <a href="store.php" class="nav-link smoothScroll">Store</a>
            </li>
            <li class="nav-item">
              <a href="account.php" class="nav-link smoothScroll">Account</a>
            </li>
            <li class="nav-item">
              <a href="blog.php" class="nav-link smoothScroll">Blog</a>
            </li>
            <li class="nav-item">
              <a href="checkout.php" class="nav-link active">
                <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link smoothScroll">logout</a>
            </li>

          </ul>
          <ul class="social-icon ml-lg-3">
            <li><a href="https://www.facebook.com/pg/PlatinumFitnessPark/posts/" class="fa fa-facebook"></a></li>
            <li><a href="https://twitter.com/pfpgym" class="fa fa-twitter"></a></li>
            <li><a href="https://www.instagram.com/explore/locations/948757639/platinum-gym-and-fitness/?hl=en" class="fa fa-instagram"></a></li>
          </ul>

        </div>

      </div>
    </nav>

    <body>

      <style>
        body {
          font-family: Arial;
          font-size: 17px;
          padding: 8px;
        }

        * {
          box-sizing: border-box;
        }

        .row {
          display: -ms-flexbox;
          /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap;
          /* IE10 */
          flex-wrap: wrap;
          margin: 0 -16px;
        }

        .col-25 {
          -ms-flex: 25%;
          /* IE10 */
          flex: 25%;
        }

        .col-50 {
          -ms-flex: 50%;
          /* IE10 */
          flex: 50%;
        }

        .col-75 {
          -ms-flex: 75%;
          /* IE10 */
          flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
          padding: 0 16px;
        }



        input[type=text] {
          width: 100%;
          margin-bottom: 20px;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 3px;
        }

        label {
          margin-bottom: 10px;
          display: block;
        }

        .icon-container {
          margin-bottom: 20px;
          padding: 7px 0;
          font-size: 24px;
        }

        .btn {
          background-color: #04AA6D;
          color: white;
          padding: 12px;
          margin: 10px 0;
          border: none;
          width: 100%;
          border-radius: 3px;
          cursor: pointer;
          font-size: 17px;
        }

        .btn:hover {
          background-color: #45a049;
        }

        a {
          color: #2196F3;
        }

        hr {
          border: 1px solid lightgrey;
        }

        span.price {
          float: right;
          color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
          .row {
            flex-direction: column-reverse;
          }

          .col-25 {
            margin-bottom: 20px;
          }
        }
      </style>

      <section style="background-color:grey;" class="contact section" data-aos="fade-up" data-aos-delay="700">
        <div style="background-color:silver;" class="container">

          <!-- Section tittle -->

          <h5 style="text-align:center;color:red;"> <?php
                                                  } else {
                                                    header("location:login.php");
                                                  }
                                                    ?>


          <div class="row">

            <div class="ml-auto col-lg-5 col-md-6 col-12">
              <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

              <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i>3rd Floor, City Mall, Mombasa, Kenya, 80118</p>
              <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31839.533826484338!2d39.671047221477046!3d-4.0323132028069395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18400da513b74519%3A0x4907b31e765cb224!2sF4L%20GYM%20%2F%20Fitness%20for%20Life%20Gym!5e0!3m2!1sen!2ske!4v1622110076416!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
            <div>

              <div class="row">
                <div class="container">
                  <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h3 style="color:blue">Your order is being processed</h3><br />
                    <p class='link' style="color:red">equipment pick up only on Friday,Saturday, Sunday</p>
                    <p class='link' style="color:red">At our gym </p>
                  </div>
                </div>

      </section>
      <footer class="site-footer">
        <div class="container">
          <div class="row">

            <div class="ml-auto col-lg-4 col-md-5">
              <p class="copyright-text">Copyright &copy; 2021 Platinum Gym & Fitness Co.


            </div>

            <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
              <p class="mr-4">
                <i class="fa fa-envelope-o mr-1"></i>
                <a href="https://vymaps.com/KE/Platinum-Fitness-Park-1380393108684100/">platinumgym&fitness@gmail.co.ke</a>
              </p>

              <p><i class="fa fa-phone mr-1"></i> 010-020-0840</p>
            </div>

          </div>
        </div>
      </footer>


      <!-- SCRIPTS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/custom.js"></script>

    </body>

  </html>