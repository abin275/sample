<?php
include('connection.php');

?>



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

<body class="main-layout inner_posituong">
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                <li class="nav-item active ">
                                        <a class="nav-link " href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="about.html ">About</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="service centers.html ">Service Centers</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="careers.php ">Careers</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link " href="product.php">Products</a>
                                    </li>
                                    <li class="nav-item d_none">
                                        <a class="nav-link" href="cart.php">Cart</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="contact.php">Feedback</a>
                                    </li>

                                    <!-- <li class="nav-item d_none ">
                                        <a class="nav-link " href="user_registration.php">Register</a>
                                    </li> -->
                                    <li class="nav-item d_none ">
                                        
                                    
                                    <div class="d-none d-lg-block">
                        <?php if( isset($_SESSION['email'])&& !empty($_SESSION['email']) )
                        { ?>
                            <a href="sidebar-01\user.php " style="font-size:15px;display:flex;float:right;color:white;" class="bi-person custom-icon me-3"> Welcome -<?php echo htmlentities($_SESSION['email']);?></a>
                        <?php }
                        else{ ?>
                            <a href=" " class="bi-person custom-icon me-3"></a> 
                                
                         <?php } ?>
                            <a href="product-detail.html" class="bi-bag custom-icon"></a>
                    </div></li>
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
                                    </a>
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
                                <a class="read_more " name="product" href="more.php">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <img class="logo1" src="images/logo1.png" alt="#" />
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>