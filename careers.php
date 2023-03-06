<?php
include('connection.php');
include('sidebar-01/show.php');
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
    <link rel="stylesheet" href="./jobliststyle.css">
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
                                        <a class="nav-link " href="sidebar-01\user.php">Account</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>

        <!-- Hero Area Start-->
       
        <!-- Hero Area End -->
        <!-- Job List Area Start -->
        
       <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Job Openings</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="job-listing-area pt-120 pb-120">
            <div class="container">

                
                <div class="row">
                    <!-- Left content -->
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="row">
                            <!-- <div class="col-12"> -->
                                    <!-- <div class="small-section-tittle2 mb-45">
                                    <div class="ion"> <svg 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="12px">
                                    <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                        d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                    </svg> -->
                                    <!-- </div> -->
                                    <!-- <h4>Filter Jobs</h4> -->
                                <!-- </div> -->
                            </div>
                        </div>
                     
                        <!-- <div class="job-category-listing mb-50">
                            
                            <div class="single-listing">
                               <div class="small-section-tittle2">
                                     <h4>Job Category</h4>
                               </div>
                          
                                <div class="select-job-items2">
                                    <select name="select">
                                        <option value="">All Category</option>
                                        <option value="">Category 1</option>
                                        <option value="">Category 2</option>
                                        <option value="">Category 3</option>
                                        <option value="">Category 4</option>
                                    </select>
                                </div>
                             
                                <div class="select-Categories pt-80 pb-50">
                                    <div class="small-section-tittle2">
                                        <h4>Job Type</h4>
                                    </div>
                                    <label class="container">Full Time
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Part Time
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Remote
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Freelance
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                              
                            </div> -->
                   
                            <!-- <div class="single-listing">
                               <div class="small-section-tittle2">
                                     <h4>Job Location</h4>
                               </div>
                           
                                <div class="select-job-items2">
                                    <select name="select">
                                        <option value="">Anywhere</option>
                                        <option value="">Category 1</option>
                                        <option value="">Category 2</option>
                                        <option value="">Category 3</option>
                                        <option value="">Category 4</option>
                                    </select>
                                </div>
                              
                                <div class="select-Categories pt-80 pb-50">
                                    <div class="small-section-tittle2">
                                        <h4>Experience</h4>
                                    </div>
                                    <label class="container">1-2 Years
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">2-3 Years
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">3-6 Years
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">6-more..
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                               
                            </div>
                        
                            <div class="single-listing">
                           
                                <div class="select-Categories pb-50">
                                    <div class="small-section-tittle2">
                                        <h4>Posted Within</h4>
                                    </div>
                                    <label class="container">Any
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Today
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Last 2 days
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Last 3 days
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Last 5 days
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Last 10 days
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                             
                            </div> -->
                            <!-- <div class="single-listing">
                        
                                <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                                    <div class="small-section-tittle2">
                                        <h4>Filter Jobs</h4>
                                    </div>
                                    <div class="widgets_inner">
                                        <div class="range_item">
                                           
                                            <input type="text" class="js-range-slider" value="" />
                                            <div class="d-flex align-items-center">
                                                <div class="price_text">
                                                    <p>Price :</p>
                                                </div>
                                                <div class="price_value d-flex justify-content-center">
                                                    <input type="text" class="js-input-from" id="amount" readonly />
                                                    <span>to</span>
                                                    <input type="text" class="js-input-to" id="amount" readonly />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            
                            </div> -->
                        </div>
                        <!-- Job Category Listing End -->
                    </div>
                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            <span><?php   
                                            $jobpost_query=mysqli_query($conn,"SELECT * FROM tbl_postjobs");
                                            $count=mysqli_num_rows($jobpost_query);
                                            echo $count;
                                            ?> Jobs found</span>
                                           
                                            <!-- <div class="select-job-items">
                                                <span>Sort by</span>
                                                <select name="select">
                                                    <option value="">None</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                </select>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Count of Job list End -->
                                <!-- single-job-content -->
                                <!-- <?php
                                    include_once "connection.php";
                                    $sql="SELECT * from tbl_postjobs";
                                    $result = $conn-> query($sql);

                                    if ($result-> num_rows > 0){
                                    while($row = $result-> fetch_assoc()){ 
                                ?> 
                            <div class="card col-md-4 shadow p-2 mb-3 bg-body rounded">
                                <div class="card-body product_box ">
                                <img src="../uploads/<?php echo $row['image']; ?>">
                                    <p>Name: <?php echo $row['name']?></p>
                                    <p>Address: <?php echo $row['address']?></p>
                                    <p>Location: <?php echo $row['city_location']?></p>
                                    <p>Phone: <?php echo $row['phone']?></p>
                                    

                                </div>
                               <a href="service centers.html" style="text-decoration:none;"> <button type="submit" value="booknow" name="booknow" class="btn custom-btn cart-btn" data-bs-toggle="modal" data-bs-target="">Book Now</button></a>
                            </div>
                            <?php
                            }
                        }
                        ?> -->
                                
                                <?php
                                    include_once "connection.php";
                                    $sql="SELECT * from tbl_postjobs";
                                    $result = $conn-> query($sql);

                                    if ($result-> num_rows > 0){
                                    while($row = $result-> fetch_assoc()){ 
                                ?> 


                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                        <img src="../uploads/<?php echo $row['image']; ?>">
                                        </div>
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                            <h4><p>Name:  <?php echo $row['name']?></p></h4>
                                                <!-- <h4><?php echo $row['name']?></h4> -->
                                            </a>
                                            <ul>
                                                <li>Address : <?php echo $row['address']?></li>
                                                
                                                <li>Location : <i class="fas fa-map-marker-alt"></i><?php echo $row['location']?></li>
                                                <li>Salary : <?php echo $row['salary']?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="bb\jobapply.php">Apply</a>
                                        <!-- <span>7 hours ago</span> -->
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                
                                <!-- single-job-content -->
                               
                                <?php
                                    }
                                }
                                ?>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->
        <!--Pagination Start  -->
        <div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pagination End  -->
        
    </main>
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