<?php
session_start();
include('connection.php');
include('sidebar-01/show.php');
$msg=NULL;

$uid=htmlentities($_SESSION['email']);

 if(isset($_POST['add_to_cart'])){
    $uid = $_SESSION["email"]; 
    $prod=$_POST["prod"];   
    $price=$_POST["price"];
    echo $prod;
    echo $price;

    $select = "SELECT * FROM tblcart WHERE accessories_id=$prod AND user_id='$uid' AND is_checked_out=0";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0)
    {
        $msg = "<div class='alert alert-danger'>Already added to cart.</div>";
    } 
    else
    {
        $qry = "INSERT INTO tblcart (accessories_id, quantity, user_id, price) VALUES('$prod','1','$uid','$price')";
        $result_query=mysqli_query($conn,$qry);
        if($result_query){
            // $msg = "<div class='alert alert-success'>Added to cart</div>";
            header("Location:cart.php");
        } 
    }
  
   
        
    }
   
  
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
      
      
      
      <!-- payment -->
      <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<!-- body -->
<style>
            form {
            overflow: hidden;
            
            display:inline-block;
            margin:10px;
            }
          
        </style>
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
                                    <li class="nav-item ">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="service centers.html">Service Centers</a>
                                    </li>
                                    <!--
                                    <li class="nav-item">
                                        <a class="nav-link" href="laptop.html">Laptop</a>
                                    </li>-->
                                    <li class="nav-item active">
                                        <a class="nav-link" href="product.php">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Feedback</a>
                                    </li>
                                    <!--
                                    <li class="nav-item d_none">
                                        <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </li>  -->
                                    
                                    <li class="nav-item d_none">
                                        <a class="nav-link" href="cart.php">Cart</a>
                                    </li>
                                    <li class="nav-item d_none">
                                        <a class="nav-link" href="user_login.php">Register</a>
                                    </li>
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
                                    <!--<li class="nav-item ">
                                    <a class="nav-link " href="logout.php">logout</a>
                                    </li>-->
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
    <?php  /* echo $uid; */ ?>
    <div class="products ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="titlepage ">
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div>
            <form action="search.php" method="post">
                                        <input type="text" name="search" placeholder="Search" style="width:200px;height:30px;border-radius:10px;">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
            <div class="row ">
                <div class="col-md-12 ">
                <!-- <form action="" method="POST"> -->
                    <div class="our_products ">
                        <div class="row ">
                            <?php
                                include_once "connection.php";
                                $sql="SELECT * from tbl_accessories";
                                $result = $conn-> query($sql);

                                if ($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){ 
                            ?> 
                            
                            <div class="card col-md-4 shadow p-2 mb-3 bg-body rounded">
                                <div class="card-body product_box ">
                                    <img src="../uploads/<?php echo $row['image']; ?>">
                                
                                    <p>Name: <?php echo $row['name'];?></p>
                                    <p>Description: <?php echo $row['description'];?></p>
                                    <p>Quantity: <?php echo $row['quantity'];?></p>
                                    <p>Specification: <?php echo $row['specification'];?></p>
                                    <p>Price: <?php echo $row['price'];?></p>
                                    <p>Company: <?php echo $row['company'];?></p>
                                    <input type="hidden" id="price" name="price" value="">
                                    <input type="hidden" id="prod" name="prod" value="">
                                  
                                  

                                    <?php
          if ($row['quantity'] == "0") {
          echo "<p><span style='color:red;'>Out of stock!!!</span></p>";
          }
          else{
            echo "<p><span style='color:red;'></span></p>";
          }
          ?>

                                </div>
                              <input type="submit" onclick ="myFn(<?php echo $row['accessories_id'];echo ','; echo  $row['price']; ?>)" value="add to cart" name="add_to_cart" class="btn custom-btn cart-btn" data-bs-toggle="modal" data-bs-target="">
                              
                            </div>

                            <?php
                            }
                        }
                        ?>
                    <!-- </form> -->
                        <?php
                                // include_once "connection.php";
                                // $sql="SELECT * from tbl_accessories where accessories_id='1113'";
                                // $result = $conn-> query($sql);
                                // if ($result-> num_rows > 0){
                                // while($row = $result-> fetch_assoc()){ 
                            ?> 
                            <!-- <div class="col-md-4 margin_bottom1 ">
                                <div class="product_box ">
                                    
                                    <p>Name: <?php echo $row['name']?></p>
                                    <p>Description: <?php echo $row['description']?></p>
                                    <p>Quantity: <?php echo $row['quantity']?></p>
                                    <p>Specification: <?php echo $row['specification']?></p>
                                    <p>Price: <?php echo $row['price']?></p>
                                    <p>Company: <?php echo $row['company']?></p>
                                </div>
                            </div> -->
                            <?php
                        //     }
                        // }
                        ?>   
                        <?php
                                // include_once "connection.php";
                                // $sql="SELECT * from tbl_accessories where accessories_id='1116'";
                                // $result = $conn-> query($sql);

                                // if ($result-> num_rows > 0){
                                // while($row = $result-> fetch_assoc()){ 
                            ?> 
                            <!-- <div class="col-md-4 margin_bottom1 ">
                                <div class="product_box ">
                                    
                                    <p>Name: <?php echo $row['name']?></p>
                                    <p>Description: <?php echo $row['description']?></p>
                                    <p>Quantity: <?php echo $row['quantity']?></p>
                                    <p>Specification: <?php echo $row['specification']?></p>
                                    <p>Price: <?php echo $row['price']?></p>
                                    <p>Company: <?php echo $row['company']?></p>
                                    
                                </div>
                            </div> -->
                            <?php
                        //     }
                        // }
                        ?>
                        <?php echo $msg; ?>
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
    <script>
        function myFn(e,c){
            //alert(c);
            $("#prod").val(e);
            $("#price").val(c);
            window.location = "mores.php?prod="+e+"&price="+c;
            
        }
    </script>

</body>

</html>