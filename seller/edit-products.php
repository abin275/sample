<?php
include "../connection.php";
include "index.php";

if(!isset($_SESSION["email"])) 
{
    header("Location:../login.php");
}
else{
$pid=intval($_GET['id']);
if(isset($_POST['submit'])){
    $category=$_POST['category'];
      
$productname=$_POST['productName'];
$productprice=$_POST['productprice'];
$quantity=$_POST['quantity'];
$productdescription=$_POST['productDescription'];
$select = "SELECT * FROM product WHERE product_name ='$productname' ";
$result=$con->query($select);
if($result->num_rows>0)
    {
        $_SESSION['msg']="productname already Created ! Try another name";     
    }    
else
{
$sql=mysqli_query($con,"update  product set category_id='$category',product_name='$productname',price='$productprice',Total_quantity='$quantity', product_desc='$productdescription' where product_id='$pid' ");
$_SESSION['msg']="Product Updated Successfully !!";
    }
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
<h3>Edit Products</h3>
</div>

<div class="module-body">
<?php if(isset($_POST['submit']))

{?>
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
</div>
<?php } ?>
<?php if(isset($_GET['del']))
{?>
<div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
</div>
<?php } ?>
<br />
<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
<?php
$id=intval($_GET['id']);

$query=mysqli_query($con,"select product.*,category.category_name as catname,category.category_id as cid  from product join category on category.category_id=product.category_id  where product.product_id='$id'");
while($row=mysqli_fetch_array($query))
{
?>
<div class="control-group">
<label class="control-label" for="basicinput">Category</label>
 
<select name="category" class="span8 tip"required>
<option value="<?php echo htmlentities($row['category_id']);?>"><?php echo htmlentities($row['catname']);?></option>
<?php $query=mysqli_query($con,"select * from category");
while($rw=mysqli_fetch_array($query))
{
if($row['catname']==$rw['categoryName'])
{
continue;
}
else{
?>
<option value="<?php echo $rw['category_id'];?>"><?php echo $rw['category_name'];?></option>
<?php }} ?>
</select>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Name</label>
<input type="text"    name="productName"  placeholder="Enter Product Name" value="<?php echo htmlentities($row['product_name']);?>" class="span8 tip"class="span8 tip" minlength="8"
      maxlength="50" pattern="\S(.*\S)?" required>
</div>
</br>


<div class="control-group">
<label class="control-label" for="basicinput">Product Price</label>
<input type="text" name="productprice"  placeholder="Enter Product Price" value="<?php echo htmlentities($row['price']);?>" class="span8 tip" minlength="1"
      maxlength="7" pattern="\d+(\.\d{2})?" required>
</div>
</br>

<div class="control-group">
<label class="control-label" for="basicinput">Product Quantity</label>
<input type="text" name="quantity"  placeholder="Enter Product Quantity" value="<?php echo htmlentities($row['Total_quantity']);?>" class="span8 tip" minlength="1"
      maxlength="7" pattern="\d+(\.\d{2})?" required>
</div>
</br>

<div class="control-group">
<label class="control-label" for="basicinput">Product Description</label>
<input  type="text" name="productDescription"  placeholder="Enter Product Description" value="<?php echo htmlentities($row['product_desc']);?>" class="span8 tip" style="height:100px"  minlength="20"
      maxlength="300" pattern="\S(.*\S)?"required>
</div>
</br>

<div class="control-group">
<label class="control-label" for="basicinput">Product Image1</label>
<img src="../admin/uploads/<?php echo htmlentities($row['product_image']);?>" width="200" height="100"> <a href="update-image.php?id=<?php echo $row['product_id'];?>"required>Change Image</a>
</div>
</br>
<?php } ?>

<div class="control-group">
<button type="submit" name="submit" class="btn" style="background:#98A2E6;">Update</button>
</div>
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