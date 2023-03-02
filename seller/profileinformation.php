<?php
 include "../connection.php";
 include "index.php";
 
 $email=$_SESSION["email"];
//  $user_id = $_SESSION['registration_id'];
if(!isset($_SESSION["email"])) 
{
   header("Location:../login.php");
}
else{
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $contact_no=$_POST['phoneno'];
// $select = "SELECT * FROM product WHERE product_name ='$productname'";
//     $result=$con->query($select);
//     if($result->num_rows>0)
//         {
//             $_SESSION['msg']="Product  already Created !!";     
//         }
//         else{
    $sql=mysqli_query($conn,"update tbluser_registration set name='$name',phone='$contact_no' where email = '$email'");
$_SESSION['msg']="Profile Updated Successfully !!";
}
}
// }
?>
<div class="content-wrapper">

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Profile</h1>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
</div>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-body">
                

<div class="module-body">

<?php if(isset($_POST['submit']))
{?>
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong></strong><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
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
<form class="form-horizontal row-fluid" name="profileupdate" method="post" enctype="multipart/form-data">
<?php
// $id=intval($_GET['id']);
$query=mysqli_query($conn,"SELECT * FROM tbluser_registration WHERE tbluser_registration.email = '$email'");
while($row=mysqli_fetch_array($query))
{
?>
<div class="control-group">
<label class="control-label" for="basicinput">Email:
<?php echo htmlentities($row['email']);?>
</label></div>
<div class="control-group">
<label class="control-label" for="basicinput">Name</label>
<div class="controls">
<input type="text"name="name" pattern="\S(.*\S)?"  placeholder="Enter Name" value="<?php echo htmlentities($row['name']);?>" class="span8 tip"  required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Contact_no</label>
<div class="controls">
<input type="text"name="phoneno" placeholder="Enter phoneno "  pattern="[6-9]{1}[0-9]{9}" value="<?php echo htmlentities($row['phone']);?>" class="span8 tip" required>
</div>
</div><br>
<br>
<?php } ?>
<div class="control-group">
<div class="controls">
<button type="submit" name="submit" class="btn btn-info">Update profile</button> 
<!-- <button type="submit" name="submit" class="btn">Add</button> -->
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