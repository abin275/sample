<?php
include "../connection.php";
include "index.php";

if(!isset($_SESSION["email"])) 
{
    header("Location:../login.php");
}
else{
if(isset($_GET['del']))
{
    mysqli_query($con,"delete from product where id = '".$_GET['id']."'");
    $_SESSION['delmsg']="Product deleted !!";
}
}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\includelink.css">

    <!-- Fancy box css -->
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

    <link rel="stylesheet" href="style2.css">
<style>
.divScroll {
overflow:scroll;
height:500px;
width:1200px;
}
</style>
</head>
<body>
   
       <!--  </div> -->
    </nav>    
    <div class="container-fluid">
    
        <div class="row flex-nowrap">
            
        <div class="divScroll">           
<div class="span35">
<div class="content">            
<div class="content">
<div class="module">
<div class="module-head">
<h3>Products</h3>

<div class="module-body table">
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
<th>#</th>
<th>Product Image</th>
<th>Product Name</th>
<th>Category </th>
<th>Description</th>
<th>Price</th>
<th>Quantity</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
$query=mysqli_query($con,"SELECT * from product, category,users WHERE product.category_id=category.category_id AND product.sell_id=users.user_id AND product.status=0 AND product.sell_id=".$_SESSION['user_id']);
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><img height='100px' src='../admin/uploads/<?php echo htmlentities($row["product_image"]);?>'></td>
<td><?php echo htmlentities($row['product_name']);?></td>
<td><?php echo htmlentities($row['category_name']);?></td>
<td ><?php echo htmlentities($row['product_desc']);?></td>
<td><?php echo htmlentities($row['price']);?></td>
<td><?php echo htmlentities($row['Total_quantity']);?></td>
<td>
<a href="edit-products.php?id=<?php echo $row['product_id']?>" ><i class="fa fa-edit"></i></a>
<a href="pdel.php?id=<?php echo $row['product_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-remove"></i></a></td> 
</tr>
<?php $cnt=$cnt+1; } ?>
</table>
</div>
</div>
</div><!--/.content-->
</div><!--/.span9-->
</div>
</div><!--/.container-->
</div>
</div>
</div>
<script src="../admin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="../admin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="../admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../admin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="../admin/scripts/datatables/jquery.dataTables.js"></script>
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
</body>
<?php ?>