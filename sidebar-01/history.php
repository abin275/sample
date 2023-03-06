<?php
include('session.php');
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>trials </title>  
</head>
<body>
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
                                        <a class="nav-link " href="first.php" style="font-size: 30px;font-weight:bolder">Home</a>
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
                               <ul class="navbar-nav mr-auto">
                               
                               </ul>
                           </div>
                       </nav>
                   </div>
               </div>
           </div>
       </div>
   </header>
<div class="span9">
<div class="content">
<div class="module">
<div class="module-head">
    
<h3>Your Orders</h3>
</div>
<!-- <div class="module-body table"> -->
<?php if(isset($_GET['del']))
{?>
<div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
</div>
<?php } ?>
<br />  
<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
<thead>  
<tr>
<th>SI.NO</th>
<th>IMAGES</th>
<th>PRODUCT</th>
<th>QUANTITY</th>
<th>AMOUNT </th>
<th>ORDER DATE AND TIME</th>
</tr>
</thead>
</tr>
</thead>
<tbody>
<?php
$query=mysqli_query($conn,"SELECT *from tbl_accessories,orders,order_items where  order_items.order_id =orders.id and tbl_accessories.accessories_id=order_items.product_id");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><img width='100px' height='10px'src='bb/uploads/name"<?php echo htmlentities($row["image"]);?>'></td>
<td><?php echo htmlentities($row['name']);?></td>
<td><?php echo htmlentities($row['quantity']);?></td>
<td><?php echo htmlentities($row['total_price']);?></td>
<td><?php echo htmlentities($row['order_date']);?></td>
</tr>
<?php $cnt=$cnt+1; }?>
</tbody>
</table>
</div>
</div>
</div><!--/.content-->
</div><!--/.span9-->
</div>
</div><!--/.container-->
</div><!--/.wrapper-->




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