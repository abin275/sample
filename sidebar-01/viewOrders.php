<?php
session_start();
include "connection.php";
 $email=$_SESSION["email"];
 $uid=$_SESSION["email"];
if(!isset($_SESSION["email"]))  
{
    header("Location:user_login.php");
}

$query1=mysqli_query($conn,"select * from tbluser_registration where email='$email'");
while($row=mysqli_fetch_array($query1))
{
    $user_id=$row['registration_id'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>trials </title>  


</head>

      <!-- bootstrap css -->



      <link rel="stylesheet" href="http://localhost/sample//css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="http://localhost/sample//css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="http://localhost/sample//css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="http://localhost/sample//images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="http://localhost/sample//css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
<!--      <link rel="stylesheet" href="sidebar-01/css/style.css"> -->
</head>
<!-- body -->

<body class="main-layout inner_posituong contact_page">
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
                               <li class="nav-item">
                       <a class="nav-link" href="first.php">TRIALS FRONTIER</a>
                   </li> 
                   
                               </div>
                               <li class="nav-item active" width="auto">
                                        <a class="nav-link " href="..//first.php" style="font-size: 30px;font-weight:bolder">Home</a>
                                    </li>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                       <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                       </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                           <div class="card-body">
            <!-- <a href="admin_dashboard.php"><button class="button-54">Dashboard</button></a> -->
            
            
                               <ul class="navbar-nav mr-auto">
                               
                               </ul>
                           </div>
                       </nav>
                   </div>
               </div>
           </div>
       </div>
   </header>

<div class="container mt-3">
<nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
        
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-search d-none d-md-block mr-0">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search....." aria-label="search" aria-describedby="search" >
                
                <div class="input-group-prepend">
                  <span class="input-group-text" id="search">
                    <i class="fa fa-search"></i>
                  </span>
                </div> </li>
          </ul>
                </div>
                
          <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                  <div class="input-group">
                      <?= $_SESSION['email'] ?>&emsp;
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="search">
                            <i class="fa fa-user"></i>
                        </span>
                      </div> 
                  </div>
                      <!-- <i style='font-size:20px' class='fa fa-bars'></i> </a> -->
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="change-password.php">Change Password</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="../logout.php">Log Out</a>
                  </div>
              </li>
          </ul>
  
  
          
              
           
        </div>
      </nav>
</div>
   





    <div class="container mt-2">
        <div class="span9">
            <div class="content">
                <div class="module">
                    <div class="module-head">
    
                        <h1>Order Details</h1>
                    </div>

                    <!-- cart table -->
                    <div class="container">
                        <div class="col-md-12">
                        <button id="pdfButton"><b>Download Details</b></button>
                        <div class="card" id="generatePDF">
                            <div class="card-header fw-bold" style="background-color: #1F74BA;">
                                <span class="text-white fs-4">View Order</span>
                
                                <a href="orders.php" class="btn btn-warning float-end"><i class="fa fa-reply"></i>Back</a>
                            </div>
                    
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Delivery Details</h4>
                                        <hr>
                            
                                        <?php
                                        if(isset($_GET['ord_id']))
                                        {
                                            $ord_id=$_GET['ord_id'];
                                    
                                            $get_price = "SELECT total_amount FROM orders WHERE id='$ord_id'";
                                            $result_price=mysqli_query($conn,$get_price);  
                                            $ord_price=mysqli_fetch_assoc($result_price);


                                            $query=mysqli_query($conn,"SELECT *from tbl_accessories,orders,order_items where  order_items.order_id =orders.id and orders.user_id='$user_id' and tbl_accessories.accessories_id=order_items.product_id  and orders.id='$ord_id'");
                                            while($row=mysqli_fetch_array($query))
                                            {
                                    
                        
                                        
                                        ?>
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Order ID</label>
                                                <div class="border p-1">
                                                    <?php echo $ord_id; ?>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Order Date</label>
                                                <div class="border p-1">
                                                    <?php echo $row['order_date']; ?>
                                                </div>
                                            </div>

                                    

                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Email</label>
                                                <div class="border p-1">
                                                    <?php echo  $email; ?>
                                                </div>
                                            </div>

                                    

                                    
                                        </div> 
                                        <?php } }?> 
                                    </div>
                        

                                    <div class="col-md-6">                            
                                        <h4>Order Details</h4>                          
                                        <hr> 
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Product Image</th>
                                                    <th>Quantity</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(isset($_GET['ord_id']))
                                                {
                                                    $ord_id=$_GET['ord_id'];

                                        
                                         
                                        

                                                    $query=mysqli_query($conn,"SELECT *from tbl_accessories,orders,order_items where  order_items.order_id =orders.id and orders.user_id='$user_id' and tbl_accessories.accessories_id=order_items.product_id and orders.id='$ord_id'");
                                                    while($row=mysqli_fetch_array($query))
                                                    {

                                          
                                        
                                       
                                                ?>
                                    
                                                <tr>
                                                    <td><?php echo htmlentities($row['name']);?></td>
                                                    <td><img width='100px' height='10px' src="../uploads/<?php echo $row['image']; ?>"></td>
                                                    <td><?php echo htmlentities($row['quantity']);?></td>
                                                    
                                                    
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php }} ?>
                                        </table>
                            
                                    <hr>
                                    <h4>Total Price: <span class="float-end fw-bold">Rs.<?php echo $ord_price['total_amount']; ?></span></h4>
                                    <hr>
                            
                            
                            
                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
      var button = document.getElementById("pdfButton");
      var makepdf = document.getElementById("generatePDF");
      button.addEventListener("click", function () {
         var mywindow = window.open("", "PRINT", "height=600,width=600");
         mywindow.document.write(makepdf.innerHTML);
         mywindow.document.close();
         mywindow.focus();
         mywindow.print();
         return true;
      });
   </script>



        </div>
</div>
</div><!--/.content-->
</div><!--/.span9-->
</div>











    <!--  footer -->
    <footer>
        <div class="footer " style="margin-top: 8rem;">
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