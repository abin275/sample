<?php
include('session.php');
include('connection.php');

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <title>REPORT</title>
    <!-- plugins:css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendor.bundle.base.css">
    <!-- endinject -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="sidebar-01/css/style.css">
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="style2.css" />
    <!-- End layout styles -->
   <link rel="icon" type="image/png" href="../../../favicons/favicon-16x16.png" sizes="16x16">
  </head>
   <style>
  
 @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap');

* {
    box-sizing: border-box;
}

body>div{
    min-height: 100vh;
    display: flex;
    font-family: 'Roboto', sans-serif;
}

.table_responsive {
    max-width: 900px;
    border: 1px solid #00bcd4;
    background-color: #efefef33;
    padding:10px;
    margin: auto;
    border-radius:10px;
	overflow:scroll;
}

table {
    width: 100%;
    font-size: 13px;
    color: #444;
    white-space: nowrap;
    border-collapse: collapse;
	
   
}

table>thead {
    background: linear-gradient(180deg, #14149e 5%, #0000cd 100%);
    color: #fff;
}

table>thead th {
    padding: 15px;
}

table th,
table td {
    border: 1px solid #00000017;
    padding: 10px 15px;
}

table>tbody>tr>td>img {
    display: inline-block;
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius:30%;
    border: 2px solid #fff;
    box-shadow: 0 2px 6px #0003;
}



table>tbody>tr {
    background-color: #fff;
    transition: 0.3s ease-in-out;
}


table>tbody>tr:nth-child(even) {
    background-color: rgb(238, 238, 238);
}

table>tbody>tr:hover{
    filter: drop-shadow(0px 2px 6px #0002);
}
.stop {
	font-family: Arial;
	color: #FFFFFF;
	font-size: 16px;
	border-radius: 8px;
	border: 0px #c81414 solid;
	background: linear-gradient(180deg, #ff0000 5%, #c81414 100%);
	text-shadow: 0px 1px 1px #ffffff;
	box-shadow: 0px 10px 14px -7px #616174;
	cursor: pointer;
	display: inline-flex;
	align-items: center;
	text-decoration:none;
}
.stop:hover {
	background: linear-gradient(180deg, #c81414 5%, #ff0000 100%);
	color: #FFFFFF;
}
.stop-icon {
	padding: 10px 10px;
}
.stop-icon svg {
	vertical-align: middle;
	position: relative;
	font-size: 21px;
	top: 0px;
	left: -2px;
}
.stop-text {
	padding: 10px 5px;
	
}
.stop-text span{
	display: block;
	position: relative;
	transform: rotate(0deg);
	top: 0px;
	left: -9px;
}
.start {
	font-family: Arial;
	color: #FFFFFF;
	font-size: 16px;
	text-decoration:none;
	border-radius: 8px;
	border: 0px #24a6a2 solid;
	background: linear-gradient(180deg, #48d1cc 5%, #24a6a2 100%);
	text-shadow: 0px 1px 1px #ffffff;
	box-shadow: 0px 10px 14px -7px #616174;
	cursor: pointer;
	display: inline-flex;
	align-items: center;
}
.start:hover {
	background: linear-gradient(180deg, #24a6a2 5%, #48d1cc 100%);
		color: #FFFFFF;
}
.start-icon {
	padding: 10px 10px;
}
.start-icon svg {
	vertical-align: middle;
	position: relative;
	font-size: 21px;
	top: 0px;
	left: -2px;
}
.start-text {
	padding: 10px 5px;
}
.start-text span{
	display: block;
	position: relative;
	transform: rotate(0deg);
	top: 0px;
	left: -9px;
}
img {
    display: inline-block;
    width: 40px;
    height: 40px;
    object-fit: cover;
    border-radius:50%;
   
    box-shadow: 0 2px 6px #0003;
}

  </style>
  <body>
    <div class="wrapper d-flex align-items-stretch">
      <!-- partial:../../partials/_sidebar.html -->
      <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(adminavatar.jpg);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">USERS</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                        </ul>
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
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_settings-panel.html -->
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles default primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles light"></div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:../../partials/_navbar.html -->
       
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">REPORTS</h3>
             
            </div>
            
                      
            <div class="span9">
            <div class="content">
                <div class="module">
                    <div class="module-head">
                        <div class="container-fluid">
                            <!-- HTML form for entering year and month -->
                            <form method="get" action="report.php">
                                <label for="year">Year:</label>
                                <input type="number" id="year" name="year" required>
                                <label for="month">Month:</label>
                                <input type="number" id="month" name="month" required>
                                <input type="submit" value="Generate report">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div><!--/.content-->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>