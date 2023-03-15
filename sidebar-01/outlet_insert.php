<?php
include('connection.php');
// include('a.js');

if(isset($_POST['submit'])){
    $product_name=$_POST['name'];
    $product_address=$_POST['address'];
    $product_location=$_POST['location'];
    $email=$_POST['email'];
    
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $name = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];

    $location="../uploads/";
    $image=$location.$name;
    
    $target_dir="../uploads/";
    $finalImage=$target_dir.$name;
   move_uploaded_file ($temp, $finalImage);

    //accessing images
    // $product_image1=$_FILES['img1']['name'];
    //accessing image tmp names
    // $temp_image1=$_FILES['img1']['tmp_name'];
   
    //checking empty condition
    if($product_name=='' or $product_address=='' or $product_location=='' or $phone=='' or $finalImage=='' ){
        echo "<script>alert('Please fill all the fields.')</script>";
        exit();
    }else{
        // move_uploaded_file($temp_image1,"./images/$product_image1");
    }
// $product_category=="SELECT 'category_id' FROM `tbl_category`";
 $insert_products="INSERT INTO tbloutlet(`name`, `address`, `city_location`, `phone`,`image`,`email`,`password`) 
VALUES ('$product_name','$product_address','$product_location','$phone','$finalImage','$email','$password')";
    
    
    $result_query=mysqli_query($conn,$insert_products);
    if($result_query){
        $insert_shop="INSERT INTO tbl_login(`email`,`password`,`role`) 
        VALUES ('$email','$password','shop')";

        $result_query2=mysqli_query($conn,$insert_shop);
        

        echo "<script>alert('Successfully inserted the products.')</script>";
    }
   
}
?>


<body class='hi'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/ce3d98df2b.js"></script>
   <link href="style.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./script.js"></script>

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
                    <a href="admin.php">ADMIN DASHBOARD</a>
                         </li>
                            <li>
                            <a href="registeruser.php">REGISTERED USERS</a>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">PRODUCT BASED</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                            <a href="pro.php">Add Product</a>
                            </li>
                            <li>
                            <a href="productdetails.php">Product Details</a>
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
                            </ul>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">SERVICES & BOOKING BASED</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                            <a href="outlet_insert.php">Add outlets</a>
                            </li>
                            <li>
                                <a href="bookingdetails.php">Booking Details</a>
                            </li>
                            <li>
                                <a href="doorstepbookingdetails.php">Doorstep Booking Details</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">JOB BASED</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                            <a href="jobentering.php">Enter jobs</a>
                            </li>
                            <li>
                            <a href="viewjobers.php">Job applayers Details</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">REPORTS</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">                          
                            <li>
                            <a href="../prev.php">Report generation</a>
                            </li>
                            <li>
                            <a href="../salesReport.php">Sales report</a>
                            </li>
                            <li>
                            <a href="bill.php">Generate bill</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">DATA VISUALIZATION</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                            <a href="dataanalysis.php">Sales Analysis</a>
                            </li>
                            <li>
                            <a href="fav.php">Mostly carted items</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="contactdetails.php">Feedback Details</a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">HOME</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>







<div class='dashboard'>
    <div class='dashboard-app'>
        
        <div class='dashboard-content' style="background-image: url(); height: 100%; background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
            <div class='container'>
            <h2 class="text-center font-monospace fw-bolder">ADD OUTLETS</h> 
                        <div class='card mt-1 bg-'>
                            <div class='card-header'>
                              <h4 class="text-start font-monospace fw-bold">INSERT OUTLET DETAILS</h4>
                              <div class='card-body'>
                                <form method="post" action="outlet_insert.php" enctype="multipart/form-data">
                                <div class="row">

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group text-start">
                                            <label for="title" class="form-label fw-normal fs-5">OUTLET NAME</label>
                    
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Shop Name">
                                            </div>
                                        </div>


                                        <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">COMPANY ADDRESS</label>
                                                <input type="text" class="form-control" name="address" placeholder="32, Wales Street, New York, USA">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">LOCATION</label>
                                                <input type="text" class="form-control" name="location" placeholder="Location">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                <label for="gender">GENDER:</label>
                                <div>
                                    <input type="radio" name="gender" value="male" >Male
                                    <input type="radio" name="gender" value="female" >Female
                                    <input type="radio" name="gender" value="other" >Other<br> -->
                                <!--<select name="gender">
                                   <option>male</option>
                                   <option>female</option>
                                   <option>other</option>-->
                                </div>

                                        <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">PHONE NUMBER</label>
                                                <input type="text" class="form-control" name="phone" placeholder="phone number">
                                            </div>
                                        </div>

                                        
                                        <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="phone number">
                                            </div>
                                        </div>

                                        
                                        <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">Password</label>
                                                <input type="text" class="form-control" name="password" placeholder="phone number">
                                            </div>
                                        </div>

                                        <div class="form-group text-start" >
                                            <label for="img" style="font-size : 15px">Select image:</label>
                                             <input type="file" id="img" name="img" style="font-size : 15px">
                                            </div>
                                        </div>
                                        

                                        <div class="col-lg-12 col-md-12 mt-2">
                                            <button type="submit" class="btn btn-success col-lg-12 col-md-12" name="submit">CONFIRM PRODUCT</button>
                                        </div>
                                       
                                       
                                    </div>
                                </form>
                                
                              </div>
                            </div>
                        </div>
                
            </div>
        </div>
    </div>
</div>


</body>

