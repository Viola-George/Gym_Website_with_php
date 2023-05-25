<?php
session_start();
include("connect.php");
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
              <a href="checkout.php" class="nav-link active"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>


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

        .form {


          padding: 30px 25px;
          background: white;

          width: 500px;

          box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
          margin: 100px auto;
        }
      </style>


      <body>

        <section style="background-color:grey;" class="feature" id="about">
          <div class="container">
            <div class="row">
              <div style="text-align:center;color:red;background-color:silver;" class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                <h5 style="text-align:center;color:red;"> <?php
                                                        } else {
                                                          header("location:login.php");
                                                        }
                                                          ?>


                <form action="delivery.php" method="post">


                  <h1> Checkout Form</h1>
                  <label for="cname">Name on Card</label>
                  <input type="text" class="col-7" id="cname" name="nameoncard" placeholder="Name on Card...." required /><br>

                  <input type="text" class="col-7" id="ccnum" name="cardno" placeholder="Card Number">
                  <label for="expmonth">Exp Month and year</label>
                  <input type="month" class="col-7" id="ccnum" name="exm" placeholder="Card Number">
                  <label for="cvv">CVV</label>
                  <input type="text" class="col-2" id="cvv" name="cv" placeholder="352">
                  <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                  </label><br>
                  <button type="submit" class="col-7" id="submit-button" name="submit">CHECKOUT</button>
                  <br>
              </div>


              </form>
            </div>


          </div>

          </div>
          </div>
        </section>






      </body>
      <!-- FOOTER -->
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
      <!-- Modal -->



      <!-- SCRIPTS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/custom.js"></script>

    </body>

  </html>