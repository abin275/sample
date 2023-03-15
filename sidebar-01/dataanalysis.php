<?php
include "../session.php";
include "../connection.php";
$email=$_SESSION["email"];
if(!isset($_SESSION["email"])) 
{
    header("Location:../user_login.php");
}

else{
     if(isset($_POST['submit'])) {
    $category=$_POST['tbl_category'];
    $select = "SELECT * FROM tbl_category WHERE category_name ='$category' ";
    $result=$conn->query($select);
    if($result->num_rows>0)
        {
            $_SESSION['msg']="Category  alredy Created !!";     
        } 
     else{  
        $sql=mysqli_query($conn,"insert into tbl_category(category_name) values('$category')");
        $_SESSION['msg']="Category Created !!";
     }
        }
    if(isset($_GET['del']))
    {
    mysqli_query($conn," UPDATE tbl_category SET status=1 where  category_id = '".$_GET['id']."'");
    $_SESSION['delmsg']="Category deleted !!";
    }
}
?>

<html lang="en">

<head>
    <title>trials </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" 
    integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link type="text/css" href="../admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="../admin/css/theme.css" rel="stylesheet">
    <link type="text/css" href="../admin/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  

  
         <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
<style>
.divScroll {
overflow:scroll;
height:500px;
width:1200px;}
</style>
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

<!----> 
<script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['order_items','Number'],
 <?php 
      $query = "SELECT count(order_items.product_id) AS number, tbl_accessories.name FROM tbl_accessories INNER JOIN order_items WHERE tbl_accessories.accessories_id=order_items.product_id GROUP BY order_items.product_id";

       $exec = mysqli_query($conn,$query);
       while($row = mysqli_fetch_array($exec)){

       echo "['".$row['name']."',".$row['number']."],";
       }
       ?> 
 
 ]);

 var options = {
 title: 'Sales Analysis',
  pieHole: 0,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.BarChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
  
</script>

<!---->
<div class="container-xxl position-relative bg-white d-flex p-0">
                <!-- Content Start -->
                <div class="content">


                    <!--Gradient card box-->
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                    <div class="container">

                
<div class="span9">
<div class="content">
<div class="module">
<div class="module-head">
<div class="container-fluid">
 <div id="columnchart12" style="width: 100%; height: 500px;"></div>
 </div>
</div>
</div>
</div>
</div><!--/.content-->
</div><!--/.span9-->
</div>
</div><!--/.container-->
</div><!--/.wrapper-->
</div><!--/.span9-->
</div>
</div>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="scripts/datatables/jquery.dataTables.js"></script>
<!-- <script src="validation.js"></script> -->
<script>
$(document).ready(function() {
$('.datatable-1').dataTable({
"pageLength": 5,
"lengthMenu": [5, 10, 20, 25, 50]
});
$('.dataTables_paginate').addClass("btn-group datatable-pagination");
$('.dataTables_paginate > a').wrapInner('<span />');
$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
});

</script>
<script>
window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'report.pdf',
                image: { type: 'jpeg', quality: 0.99 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'a3', orientation: 'p' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>
</body>
<?php ?>
</html>