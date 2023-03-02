<?php
include "../connection.php";
include "index.php";

if(!isset($_SESSION["email"])) 
{
    header("Location:../login.php");
}
else{
$pid=intval($_GET['id']);
if(isset($_POST['submit']))
{
$productname=$_POST['productName'];
$productimage1=$_FILES["productimage"]["name"];
move_uploaded_file($productimage1,"../admin/uploads/$productimage1");
$sql=mysqli_query($con,"update  product set product_image='$productimage1' where product_id='$pid' ");
$_SESSION['msg']="Product Image Updated Successfully !!";
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
    <link rel="stylesheet" href="../admin/style.css">
    <link type="text/css" href="../admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="../admin/css/theme.css" rel="stylesheet">
    <link type="text/css" href="../admin/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

</head>
<body>
   
       <!--  </div> -->
    </nav>    
    <div class="container-fluid">
    
        <div class="row flex-nowrap">
            
             
<div class="content">
<div class="module">
<div class="module-head">
<h3>update image</h3>
</div>

<?php if(isset($_POST['submit']))
{?>
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
</div>
<?php } ?>
<br />
<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
<?php
$query=mysqli_query($con,"select product_name,product_image from product where product_id='$pid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<div class="control-group">
<label class="control-label" for="basicinput">Product Name:&ensp; &ensp;  </label>
 <strong> <?= $row['product_name'] ?> </strong>
</div>
</br>

<div class="control-group">
<label class="control-label" for="basicinput">Current Product Image: &ensp; &ensp; </label>
<img src="../admin/uploads/<?php echo htmlentities($row['product_image']);?>" width="200" height="100">
</div>
</br>

<div class="control-group">
<label class="control-label" for="basicinput">New Product Image:&ensp; &ensp; </label>
<input type="file" name="productimage" id="productimage" value="" class="span8 tip" required>
</div>
</br>

<?php } ?>
<div class="control-group">
<button type="submit" name="submit" class="btn">Update</button>
</div>
</form>
</div>
</div>
</div><!--/.content-->
</div><!--/.span9-->
</div>
</div><!--/.container-->
</div><!--/.wrapper-->
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="scripts/datatables/jquery.dataTables.js"></script>
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