<?php 
session_start(); 
include('connection.php');
?>



<!-- <head>
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <?php
                    // Your message code
                    if(isset($_SESSION['message']))
                    {
                        echo '<h4 class="alert alert-warning">'.$_SESSION['message'].'</h4>';
                        unset($_SESSION['message']);
                    } // Your message code
                ?>

                <h4>Welcome to Home Page</h4>

                <?php 
                // Checking is User Logged In
                
                    ?>
                        <h4>User ID: <?php echo $_SESSION['user_id']; ?></h4>
                        <h4>User Email: <?php echo $_SESSION['user_email']; ?></h4>
                        <h4>User Role: <?php echo $_SESSION['user_type']; ?></h4>
                  

                <?php 
                    if(!isset($_SESSION['authentication']))
                    {
                        ?>
                        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
                        <?php
                    }
                ?>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->

<!DOCTYPE html>

<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>cla</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class=" header ">
            <div class="container-fluid ">
                <div class="row ">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section ">
                        <div class="full ">
                            <div class="center-desk ">
                                <div class="logo ">
                                    <a href="index.php "><img src="images/logo.png " alt="# " /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 ">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarsExample04 " aria-controls="navbarsExample04 " aria-expanded="false " aria-label="Toggle navigation ">
                        <span class="navbar-toggler-icon "></span>
                        </button>
                            <div class="collapse navbar-collapse " id="navbarsExample04 ">
                                <ul class="navbar-nav mr-auto ">
                                    <li class="nav-item active ">
                                        <a class="nav-link " href="index.php ">Home</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="about.html ">About</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="service centers.html ">Service Centers</a>
                                    </li>
                                    <!--
                                    <li class="nav-item ">
                                        <a class="nav-link " href="laptop.html ">Laptop</a>
                                    </li> -->
                                    <li class="nav-item ">
                                        <a class="nav-link " href="product.html ">Products</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="contact.php ">Contact Us</a>
                                    </li>
                                    <!--
                                    <li class="nav-item d_none ">
                                        <a class="nav-link " href="# "><i class="fa fa-search " aria-hidden="true "></i></a>
                                    </li>  -->
                                    <li class="nav-item d_none ">
                                        <a class="nav-link " href="index.php">Log Out</a>
                                    </li>


                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main ">
        <div id="banner1 " class="carousel slide " data-ride="carousel ">


            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item active ">
                    <div class="container ">
                        <div class="carousel-caption ">
                            <div class="row ">
                                <div class="col-md-6 ">
                                    <div class="text-bg ">
                                        <h1 class="text-light display-4 ">TRIALS FRONTIER</h1>
                                        <h2 class="text-light display-3 ">BIKE ACCESSORIES AND SERVICES</h2>
                                        <p></p>
                                        <a href="product.html">Buy Now</a> <a href="contact.html ">Contact</a>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="text_img ">
                                        <figure><img src="images/" alt="# " /></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
    </section>
    <!-- end banner -->
    <!-- three_box -->
    <div class="three_box ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-6 ">
                    <div class="box_text ">
                        <i><img src="images/moto1.jpg " alt="# "/></i>
                        <h3>BOOKING SERVICE CENTERS</h3>
                        <p>For most people, their bike is one of the most prized possessions. It is your best friend on that long ride, or your companion on your way to work and back. We know how difficult it is to find time, out of your busy schedules,
                            to wait in long queues, and pay exorbitant charges to simply get your bike serviced. We, at Trials forinter, persevere to make your life easier by booking the service centers via online that your bike needs right at your doorsteps,
                            at affordable prices, and in just a few easy steps. </p>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="box_text ">
                        <i><img src="images/moto4.jpg " alt="# "/></i>
                        <h3>BIKE ACCESSORIES</h3>
                        <p>Buy online high quality and hi-tech biker gear, motorbike safety gear, motorcycle accessories of well known global brands at best price. Our products follow all global quality and safety standards. Goal is bringing the best possible
                            shopping experience to any enthusiast who online looking for motorcycle jackets, apparel, helmets, motorcycle gear, accessories & almost everything else that goes on your person or your motorcycle. We also attempt to specialize
                            where it makes sense for certain specific riding styles such as Sport Touring, Adventure & Sport Touring & Track Day / Racing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- three_box -->
    <!-- products -->
    <div class="products ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="titlepage ">
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="our_products ">
                        <div class="row ">
                            <div class="col-md-4 margin_bottom1 ">
                                <div class="product_box ">
                                    <figure><img src="images/jackettt.jpg " alt="# " /></figure>
                                    <h3>JACKET</h3>
                                </div>
                            </div>
                            <div class="col-md-4 margin_bottom1 ">
                                <div class="product_box ">
                                    <figure><img src="images/gloves.jpg" alt="# " /></figure>
                                    <h3>GLOVES</h3>
                                </div>
                            </div>
                            <div class="col-md-4 margin_bottom1 ">
                                <div class="product_box ">
                                    <figure><img src="images/helmet1.jpg " alt="# " /></figure>
                                    <h3>HELMET</h3>
                                </div>
                            </div>
                            <div class="col-md-4 margin_bottom1 ">
                                <div class="product_box ">
                                    <figure><img src="images/handle2.jpg " alt="# " /></figure>
                                    <h3>HANDLE BARS</h3>
                                </div>
                            </div>
                            <div class="col-md-4 margin_bottom1 ">
                                <div class="product_box ">
                                    <figure><img src="images/horn4.jpg " alt="# " /></figure>
                                    <h3>HORNS</h3>
                                </div>
                            </div>
                            <div class="col-md-4 margin_bottom1 ">
                                <div class="product_box ">
                                    <figure><img src="images/fog.jpg " alt="# " /></figure>
                                    <h3>FOG LAMBS</h3>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="product_box ">
                                    <figure><img src="images/light2.jpg" alt="# " /></figure>
                                    <h3>HEAD LIGHTS</h3>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="product_box ">
                                    <figure><img src="images/oil5.jpg " alt="# " /></figure>
                                    <h3>OIL</h3>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <a class="read_more " href="# ">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->

    <!-- customer -->
    <!--  <div class="customer ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="titlepage ">
                        <h2>Customer Review</h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 ">
                    <div id="myCarousel " class="carousel slide customer_Carousel " data-ride="carousel ">
                        <ol class="carousel-indicators ">
                            <li data-target="#myCarousel " data-slide-to="0 " class="active "></li>
                            <li data-target="#myCarousel " data-slide-to="1 "></li>
                            <li data-target="#myCarousel " data-slide-to="2 "></li>
                        </ol>
                        <div class="carousel-inner ">
                            <div class="carousel-item active ">
                                <div class="container ">
                                    <div class="carousel-caption ">
                                        <div class="row ">
                                            <div class="col-md-9 offset-md-3 ">
                                                <div class="test_box ">
                                                    <i><img src="images/cos.png " alt="# "/></i>
                                                    <h4>Sandy Miller</h4>
                                                    <p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="container ">
                                    <div class="carousel-caption ">
                                        <div class="row ">
                                            <div class="col-md-9 offset-md-3 ">
                                                <div class="test_box ">
                                                    <i><img src="images/cos.png " alt="# "/></i>
                                                    <h4>Sandy Miller</h4>
                                                    <p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="container ">
                                    <div class="carousel-caption ">
                                        <div class="row ">
                                            <div class="col-md-9 offset-md-3 ">
                                                <div class="test_box ">
                                                    <i><img src="images/cos.png " alt="# "/></i>
                                                    <h4>Sandy Miller</h4>
                                                    <p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev " href="#myCarousel " role="button " data-slide="prev ">
                            <span class="carousel-control-prev-icon " aria-hidden="true "></span>
                            <span class="sr-only ">Previous</span>
                        </a>
                        <a class="carousel-control-next " href="#myCarousel " role="button " data-slide="next ">
                            <span class="carousel-control-next-icon " aria-hidden="true "></span>
                            <span class="sr-only ">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end customer -->

    <!--  contact -->
    <!--  <div class="contact ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="titlepage ">
                        <h2>Contact Now</h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-10 offset-md-1 ">
                    <form id="request " class="main_form ">
                        <div class="row ">
                            <div class="col-md-12 ">
                                <input class="contactus " placeholder="Name " type="type " name="Name ">
                            </div>
                            <div class="col-md-12 ">
                                <input class="contactus " placeholder="Email " type="type " name="Email ">
                            </div>
                            <div class="col-md-12 ">
                                <input class="contactus " placeholder="Phone Number " type="type " name="Phone Number ">
                            </div>
                            <div class="col-md-12 ">
                                <textarea class="textarea " placeholder="Message " type="type " Message="Name ">Message </textarea>
                            </div>
                            <div class="col-md-12 ">
                                <button class="send_btn ">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end contact -->
    <!--  footer -->
    <footer>
        <div class="footer ">
            <div class="container ">
                <div class="row ">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                        <img class="logo1 " src="images/logo1.png " alt="# " />
                        <ul class="social_icon ">
                            <li><a href="https://about.facebook.com/ "><i class="fa fa-facebook " aria-hidden="true "></i></a></li>
                            <li><a href=" "><i class="fa fa-twitter " aria-hidden="true "></i></a></li>
                            <li><a href=" "><i class="fa fa-linkedin-square " aria-hidden="true "></i></a></li>
                            <li><a href=" "><i class="fa fa-instagram " aria-hidden="true "></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                        <h3>About Us</h3>
                        <ul class="about_us ">
                            <li>TRIALS FORIENTER<br>AN ONLINE SHOPPING SITE<br>AND SERVICE CENTERS BOOKING, <br>PLATFORM</li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                        <h3>Contact Us</h3>
                        <ul class="conta ">
                            <li>dolor sit amet,<br> consectetur <br>magna aliqua.<br> quisdotempor <br>incididunt ut e </li>
                        </ul>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                        <form class="bottom_form ">
                            <h3>Newsletter</h3>
                            <input class="enter " placeholder="Enter your email " type="text " name="Enter your email ">
                            <button class="sub_btn ">subscribe</button>
                        </form>
                    </div>


                </div>
            </div>
            <div class="copyright ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12 ">
                            <p>© 2022 All Rights Reserved. Design by
                                <!--<a href="https://html.design/ ">-->Abinmon Bousally</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/jquery-3.0.0.min.js "></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js "></script>
    <script src="js/custom.js "></script>
</body>

</html>