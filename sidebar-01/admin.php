<?php
include "../session.php";
include "../connection.php";
?>
<html lang="en">

<head>
    <title>trials </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(adminavatar.jpg);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="admin.php" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">USERS</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                        </ul>
                        </li>
                        <li>
                         <a href="admin.php">admin</a>
                         </li>
                            <li>
                                <a href="registeruser.php">Registered Users</a>
                            </li>
                        
                            <li>
                                <a href="productdetails.php">Product Details</a>
                            </li>
                            <li>
                                <a href="bookingdetails.php">Booking Details</a>
                            </li>
                            <li>
                                <a href="doorstepbookingdetails.php">Doorstep Booking Details</a>
                            </li>
                            <li>
                                <a href="viewjobers.php">Job applayers Details</a>
                            </li>
                            <li>
                                <a href="contactdetails.php">Complaint Details</a>
                            </li>
                            <li>
                           <a href="outlet_insert.php">Add outlets</a>
                          </li>
                             <li>
                           <a href="pro.php">Add Product</a>
                          </li>
                          <li>
                           <a href="jobentering.php">Enter jobs</a>
                          </li>
                          <li>
                           <a href="bill.php">Generate bill</a>
                          </li>
                          <li>
                         <a href="\sample\bb\cat.php">insert categories</a>
                         </li>
                         <li>
                         <a href="\sample\bb\se.php">insert second catagories</a>
                         </li>
                          <li>
                         <a href="\sample\bb\co.php">insert color</a>
                         </li>
                         <li>
                         <a href="\sample\bb\sp.php">insert specifications</a>
                         </li>
                         <li>
                         <a href="\sample\bb\qu.php">insert quantity</a>
                         </li>
                         <li>
                         <a href="../prev.php">Report generation</a>
                         </li>
                         <li>
                         <a href="../salesReport.php">Sales report</a>
                         </li>

                         <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">p</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">test</a>
                    </li>
                    <li>
                        <a href="#">test</a>
                    </li>
                </ul>

                <div class="footer">
                    <p></p>
                </div>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                            <a class="nav-link" href="../logout.php">LOGOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h2 class="mb-4">Welcome Admin</h2>
            <div class="container-xxl position-relative bg-white d-flex p-0">
                <!-- Content Start -->
                <div class="content">


                    <!--Gradient card box-->
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-md-4 col-xl-3">
                                <div class="card bg-c-blue order-card" style="background: linear-gradient(45deg, #eff180, #f38597); width: 300px; height:150px;">
                                    <div class="card-block">
                                    <h6 class="m-b-20">CUSTOMERS</h6>
                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span> <?php   
                                    $login_query=mysqli_query($conn,"SELECT * FROM tbluser_registration");
                                    $count=mysqli_num_rows($login_query);
                                    echo $count;
                                    ?></span></h2>
                                <p class="m-b-0">Completed Orders
                                    
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>


                            <div class="col-md-4 col-xl-3 ms-5">
                                <div class="card bg-c-yellow order-card " style="background: linear-gradient(45deg, #5ce9cc, #9085ed); width: 300px; height:150px;margin-left:80px">
                                    <div class="card-block">
                                        <h6 class="m-b-20">PRODUCTS</h6>
                                        <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span> <?php   
                                    $login_query=mysqli_query($conn,"SELECT * FROM tbl_accessories");
                                    $count=mysqli_num_rows($login_query);
                                    echo $count;
                                    ?></span></h2>
                                        <p class="m-b-0">Completed Orders<span class="f-right">
                                     
                                    </span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xl-3 ms-5">
                                <div class="card bg-c-pink order-card " style="background: linear-gradient(45deg, #5730d7, #21f2f5); width: 300px; height:150px; margin-left:120px">
                                    <div class="card-block">
                                        <h6 class="m-b-20">BOOKING SERVICES</h6>
                                        <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span> <?php   
                                    $login_query=mysqli_query($conn,"SELECT * FROM booking");
                                    $count=mysqli_num_rows($login_query);
                                    echo $count;
                                    ?></span></h2>
                                        <p class="m-b-0">Completed Orders<span class="f-right"> 
                                   
                                    </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gradient Card Box End -->
                    <!-- <div class="container-fluid pt-4 px-4">
                        
                    </div>
                    
                    <div class="container-fluid pt-4 px-4">
                        
                    </div> -->

                </div>

                <!--<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>-->

            </div>

        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>
    <div id="torrent-scanner-popup" style="display: none;"></div>
</body>

</html>