<?php
include "../connection.php";
include "index.php";

 if(!isset($_SESSION["email"])) 
 {
     header("Location:../login.php");
 }
 else{

if(isset($_POST['submit']))
{
$category=$_POST['category'];
$id=$_SESSION['user_id'];
$productname=$_POST['productName'];
$productprice=$_POST['productprice'];
$quantity=$_POST['quantity'];
$productdescription=$_POST['productDescription'];
$image=$_FILES["file"]["name"];
$t=$_FILES["file"]["tmp_name"];
$f="../admin/uploads/".$image;
move_uploaded_file($t, $f);
$select = "SELECT * FROM product WHERE product_name ='$productname' ";
$result=$con->query($select);
if($result->num_rows>0)
    {
        $_SESSION['msg']="productname is  already Existed !! Not Inserted  !!";     
    } 
 else{ 
$sql=mysqli_query($con,"insert into product(category_id,product_name,price,Total_quantity,product_desc,sell_id,product_image) values('$category','$productname','$productprice','$quantity','$productdescription','$id','$image')");
$_SESSION['msg']="Product Inserted Successfully !!";
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
<h3>Add Products</h3>
</div>

<?php if(isset($_POST['submit']))
{?>
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
</div>
<?php } ?>

<?php if(isset($_GET['del']))
{?>
<div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
</div>
<?php } ?>
<br />

<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
<div class="control-group">
     <center> <h3> Add Product</h3><br><label class="control-label" for="basicinput">Category</label>
 
<select name="category" class="span8 tip" onChange="getSubcat(this.value);" required>
<option value="">Select Category</option>
<?php $query=mysqli_query($con,"select * from category where status=0");
while($row=mysqli_fetch_array($query))
{?>
<option value="<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></option>
<?php } ?>
</select>
<br>
<br>

<label class="control-label" for="basicinput">Product Name</label>
 
<input type="text" name="productName" placeholder="Enter Product Name" class="span8 tip" minlength="8"
      maxlength="50" pattern="\S(.*\S)?" required>
<br>
<br>

<label class="control-label" for="basicinput">Product Description</label>
 
<input type="text" name="productDescription" placeholder="Enter Product Description" rows="6" style="height:100px" class="span8 tip" minlength="10"
      maxlength="300" pattern="\S(.*\S)?"required>
<br>
<br>

<label class="control-label" for="basicinput">Product Price</label>
 
<input type="text" name="productprice" placeholder="Enter Product Price" class="span8 tip" minlength="1"
      maxlength="7" pattern="\d+(\.\d{2})?" required>
<br>
<br>


<label class="control-label" for="basicinput">Product Quantity</label>
 
<input type="text" name="quantity" placeholder="Enter Product Quantity" class="span8 tip" minlength="1" maxlength="7" pattern="\d+(\.\d{2})?" required>

<br>
<br>

<label class="control-label" for="basicinput">upload image: &ensp; &ensp; </label>

<input name="file" type="file" accept="image/*" />
<br>
<br>
 
<button type="submit" name="submit" class="btn" style="background-color:#98A2E6">Insert</button></center>
</div>
</form>
</div>
</div>
</div></div>
</div>
</div>
</div>
      <!-- main-panel ends -->
  
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
