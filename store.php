<?php
session_start();
include("connect.php");
if ($_SESSION["log"] == true) {
  header("location:home.php");
}
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
  <style>
    /* Dropdown Button */

    .dropbtn {
      background-color: inherit;
      color: white;
      padding: inherit;
      font-size: inherit;
      border: none;
      cursor: pointer;
    }

    /* Dropdown button on hover & focus */
    .dropbtn:hover,
    .dropbtn:focus {
      color: red;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
      display: none;
      font-size: 20px;
      position: absolute;
      background-color: silver;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }


    /* Links inside the dropdown */
    .dropdown-content a {
      color: black;

      text-decoration: none;
      display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
      color: red
    }

    /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
    .show {
      display: block;
    }
  </style>
</head>

<body style="background-color:grey;" data-spy="scroll" data-target="#navbarNav" data-offset="50">

  < !-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container"><a class="navbar-brand" href="index.php">Platinum Gym & Fitness</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item"><a href="home.php" class="nav-link smoothScroll">Home</a></li>

            <li class="nav-item">
              <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Category</button>
                <div id="myDropdown" class="dropdown-content">
                  <a href="#cardio">Cardio</a>
                  <a href="#treadmills">Treadmills</a>
                  <a href="#strengthtraining">Strength Training</a>
                  <a href="#accessories">Accessories</a>
                </div>
              </div>

            </li>
            <li class="nav-item"><a href="blog.php" class="nav-link smoothScroll">Blog</a></li>
            <li class="nav-item"><a href="account.php" class="nav-link smoothScroll">Account</a></li>
            <li class="nav-item"><a href="checkout.php" class="nav-link smoothScroll "><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a></li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link smoothScroll">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <style>
      .price {
        color: blue;
        font-size: 22px;
      }

      .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: red;

        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
      }

      .card button:hover {
        opacity: 0.7;
      }
    </style>
    </head>

    <body data-spy="scroll" data-offset="50">
      <br>
      <br>

      <h1> welcome to our store

      </h1>
      <section id="cardio" style="width:200x;margin:10px" class="new-product-area " data-aos="fade-up" data-aos-delay="700">
        <div class="container">

          <h2 style="color:red">Cardio</h2>
        </div>
        <div class="row">
          <br>
          <br>

          <?php
          $query = "SELECT * FROM `equipment` WHERE `equipmenttype`='Cardio'";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($result)) {
          ?>

            <div class="col-sm-4">
              <div class="card" data-aos="fade-up" data-aos-delay="700" style="width:300px;margin:10px">
                <img style=" width: auto;"> <?php echo $row['photo']; ?>/>
                <div class="card-body">
                  <h5 class="card-title">
                    <?php echo $row['equipmentname']; ?></h5>
                  <h4><?php echo $row['equipmenttype']; ?></h4>
                  <p class="card-text">Kshs<?php echo $row['price']; ?> </p>
                  <a href="equipmentdetails.php?eqp=<?php echo $row['equipmentid']; ?>" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
            </div>

          <?php
          }
          ?>
        </div>
        </div>
        </div>
      </section>
      <br>

      <section id="treadmills" style="width:200x;margin:10px" class="new-product-area " data-aos="fade-up" data-aos-delay="700">
        <div class="container">
          <!-- Section tittle -->

          <div class="row">
            <h2 style="color:red">Treadmills</h2>
          </div>
          <div class="row">
            <br>
            <br>

            <?php
            $query1 = "SELECT * FROM `equipment` WHERE `equipmenttype`='Treadmill'";
            $result1 = mysqli_query($conn, $query1);
            while ($row1 = mysqli_fetch_array($result1)) {
            ?>

              <div class="col-sm-4">
                <div class="card" data-aos="fade-up" data-aos-delay="700" style="width:300px;margin:10px">
                  <img style=" width: auto;"> <?php echo $row1['photo']; ?>/>
                  <div class="card-body">
                    <h5 class="card-title">
                      <?php echo $row1['equipmentname']; ?></h5>
                    <h4><?php echo $row1['equipmenttype']; ?></h4>
                    <p class="card-text">Kshs<?php echo $row1['price']; ?> </p>
                    <a href="equipmentdetails.php?eqp=<?php echo $row1['equipmentid']; ?>" class="btn btn-primary">Buy Now</a>
                  </div>
                </div>
              </div>

            <?php
            }
            ?>
          </div>
        </div>
        </div>
      </section>
      <section id="strengthtraining" style="width:200x;margin:10px" class="new-product-area " data-aos="fade-up" data-aos-delay="700">
        <div class="container">
          <!-- Section tittle -->

          <div class="row">
            <h2 style="color:red">Strength Training</h2>
          </div>
          <div class="row">
            <br>
            <br>

            <?php
            $query2 = "SELECT * FROM `equipment` WHERE `equipmenttype`='Strength Training'";
            $result2 = mysqli_query($conn, $query2);
            while ($row2 = mysqli_fetch_array($result2)) {
            ?>

              <div class="col-sm-4">
                <div class="card" data-aos="fade-up" data-aos-delay="700" style="width:300px;margin:10px">
                  <img style=" width: auto;"> <?php echo $row2['photo']; ?>/>
                  <div class="card-body">
                    <h5 class="card-title">
                      <?php echo $row2['equipmentname']; ?></h5>
                    <h4><?php echo $row2['equipmenttype']; ?></h4>
                    <p class="card-text">Kshs<?php echo $row2['price']; ?> </p>
                    <a href="equipmentdetails.php?eqp=<?php echo $row2['equipmentid']; ?>" class="btn btn-primary">Buy Now</a>
                  </div>
                </div>
              </div>


            <?php
            }
            ?>




          </div>
        </div>
        </div>
      </section>

      <section id="accessories" style="width:200x;margin:10px" class="new-product-area " data-aos="fade-up" data-aos-delay="700">
        <div class="container">
          <!-- Section tittle -->

          <div class="row">
            <h2 style="color:red">Accesories</h2>
          </div>
          <div class="row">
            <br>
            <br>
            <?php
            $query3 = "SELECT * FROM `equipment` WHERE `equipmenttype`='Accessories'";
            $result3 = mysqli_query($conn, $query3);
            while ($row3 = mysqli_fetch_array($result3)) {
            ?>

              <div class="col-sm-4">
                <div class="card" data-aos="fade-up" data-aos-delay="700" style="width:300px;margin:10px">
                  <img style=" width: auto;"> <?php echo $row3['photo']; ?>/>
                  <div class="card-body">
                    <h5 class="card-title">
                      <?php echo $row3['equipmentname']; ?></h5>
                    <h4><?php echo $row3['equipmenttype']; ?></h4>
                    <p class="card-text">Kshs<?php echo $row3['price']; ?> </p>
                    <a href="equipmentdetails.php?eqp=<?php echo $row3['equipmentid']; ?>" class="btn btn-primary">Buy Now</a>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
        </div>
      </section>



    </body>

    <!-- FOOTER -->
    <footer style="background-color:white;" class="site-footer">
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

    <script>
      /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
    </script>
    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>