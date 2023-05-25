<?php
session_start();
include("connect.php");
$eqpid = $_GET['eqp'];

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
        <style>
            .form {


                padding: 30px 25px;
                background: white;

                width: 100%;

                box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
                margin: 100px auto;
            }
        </style>



        <body>




            <form class="form" action="" name="ShoppingList">
                <div class="container">
                    <!-- Section tittle -->

                    <h5 style="text-align:center;color:red;"> : <?php
                                                            } else {
                                                                header("location:login.php");
                                                            }
                                                                ?>

                </div>

                <fieldset>
                    <style>
                        #price {
                            color: red;
                            font-size: 30px;

                        }

                        #total {
                            color: blue;
                            font-size: 30px;

                        }

                        .price {
                            color: red;
                            font-size: 30px;

                        }

                        #id {
                            color: black;
                            font-size: 26px;

                        }

                        #name {
                            color: black;
                            font-size: 26px;

                        }

                        #data {
                            color: black;
                            font-size: 25px;

                        }
                    </style>

                    <body>
                        <section style="background-color:silver;" class="about section" id="about">

                            <div class="container">
                                <div class="row">



                                    <table class="mt-3 d-block" style="color:black;" data-aos="fade-up" data-aos-delay="700">
                                        <tr style="background-color:grey;">
                                            <th id="id" style="width:auto;text-align:center;">Code
                                            </th>
                                            <th id="id" style="width:auto;text-align:center;">Image
                                            </th>
                                            <th id="name" style="width:auto;text-align:center;">Equipment Name
                                            </th>

                                            <th id="name" style="width:auto;text-align:center;">Price(Kshs)
                                            </th>
                                            <th id="price" style="width:auto;text-align:center;">
                                            </th>
                                        </tr> <?php
                                                $query = "SELECT * FROM `equipment` WHERE `equipmentid`=13";
                                                $result = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $_SESSION['eqid1'] = $row['equipmentid'];
                                                    $_SESSION['pht1'] = $row['photo'];
                                                    $_SESSION['qname1'] = $row['equipmentname'];
                                                    $_SESSION['price1'] = $row['price'];
                                                ?>
                                            <tr>
                                                <td id="id" style="width:auto;text-align:center;background-color:grey;"><?php echo $_SESSION['eqid1']; ?>
                                                </td>
                                                <td id="photo" style="width:auto;text-align:center;background-color:grey;"><img style="width:45%" <?php echo $_SESSION['pht1']; ?>>
                                                </td>

                                                <td id="name" style="width:auto;text-align:center;background-color:grey;"><?php echo $_SESSION['qname1']; ?>
                                                </td>

                                                <td id="name" style="width:auto;text-align:center;background-color:grey;"><?php echo $_SESSION['price1']; ?>
                                                </td>
                                                <td id="name" style="width:auto;text-align:center;background-color:grey;">

                                                </td>
                                            </tr>

                                        <?php } ?>
                                        <?php
                                        $query = "SELECT * FROM `equipment` WHERE `equipmentid`='$eqpid'";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {
                                            $_SESSION['eqid'] = $row['equipmentid'];
                                            $_SESSION['pht'] = $row['photo'];
                                            $_SESSION['qname'] = $row['equipmentname'];
                                            $_SESSION['price2'] = $row['price'];

                                        ?>
                                            <tr>
                                                <td id="id" style="width:auto;text-align:center;background-color:grey;"><?php echo $_SESSION['eqid']; ?>
                                                </td>
                                                <td id="photo" style="width:auto;text-align:center;background-color:grey;"><img style="width:45%" <?php echo $_SESSION['pht']; ?>>
                                                </td>

                                                <td id="name" style="width:auto;text-align:center;background-color:grey;"><?php echo $_SESSION['qname']; ?>
                                                </td>

                                                <td id="name" style="width:auto;text-align:center;background-color:grey;"><?php echo $_SESSION['price2']; ?>
                                                </td>
                                                <td id="name" style="width:auto;text-align:center;background-color:grey;">

                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tr>


                                        </tr> <br />

                                        <tr>
                                            <td id="name" style="width:auto;text-align:center;background-color:grey;">

                                            </td>
                                            <td id="name" style="width:auto;text-align:center;background-color:grey;">

                                            </td>
                                            <td id="name" style="width:auto;text-align:center;background-color:grey;">
                                                Total
                                            </td>

                                            <td id="name" style="width:auto;text-align:center;background-color:grey;"><?php
                                                                                                                        $num1 = $_SESSION['price1'];
                                                                                                                        $num2 = $_SESSION['price2'];
                                                                                                                        function total($num1, $num2)
                                                                                                                        {
                                                                                                                            $total = $num1 + $num2;
                                                                                                                            echo $total;
                                                                                                                        }
                                                                                                                        total($num1, $num2);
                                                                                                                        ?>
                                            </td>
                                            <td id="name" style="width:auto;text-align:center;background-color:grey;">
                                                <a href="check.php" class="btn btn-primary">Order Now</a>
                                            </td>
                                        </tr>

                                        <tr>


                                        </tr>


                                        <hr />


                                    </table>
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