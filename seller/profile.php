<?php
 include "../connection.php";
 include "index.php";
 
 $email=$_SESSION["email"];
//  $user_id = $_SESSION['user_id'];
if(!isset($_SESSION["email"])) 
{
   header("Location:../login.php");
}
else{
if(isset($_POST['submit'])){
$pincode=$_POST['pincode'];
$city=$_POST['city'];
$district=$_POST['district'];
$housename=$_POST['housename'];
$locality=$_POST['locality'];
$postoffice=$_POST['postoffice'];
$state=$_POST['state'];
// $select = "SELECT * FROM work WHERE email ='$email' ";
$select = "SELECT * FROM address WHERE pincode ='$pincode' and housename='$housename' and city='$city' and district='$district'AND user_id='$user_id' and locality='$locality' and postoffice='$postoffice' and state='$state'";
    $result=$conn->query($select);
    if($result->num_rows>0)
        {
            $_SESSION['msg']="Address already Created !!";     
        }
        else{
    $sql=mysqli_query($conn,"INSERT into address(pincode,housename,city,district,user_id,locality,postoffice,state)values('$pincode','$housename','$city','$district','$user_id','$locality','$postoffice','$state')");
    
    $_SESSION['msg']="profile completed Successfully !!";
}
}
}
?>
<div class="content-wrapper">

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Manage Address</h1>
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
<div class="control-group">
<label class="control-label" for="basicinput">pincode</label>
<div class="controls">
<input type="text" name="pincode" id="pincode" placeholder="Enter pincode " class="span8 tip"  required>
<input type="button" onclick="getDetails()" value="get details"/>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">City</label>
<div class="controls">
<input type="text" name="city" id="city" placeholder="Enter city"  class="span8 tip" pattern="^([A-Za-z]+ )+[A-Za-z]+$|^[A-Za-z]+$" required>
<!-- <select name="city" id="city">
<option value="">select taluk</option>
</select> -->
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">District</label>
<div class="controls">
<input type="text"name="district" id="district" placeholder="Enter district "  class="span8 tip" pattern="^([A-Za-z]+ )+[A-Za-z]+$|^[A-Za-z]+$" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">State</label>
<div class="controls">
<input type="text" name="state" id="state" placeholder="Enter state"  class="span8 tip" pattern="^([A-Za-z]+ )+[A-Za-z]+$|^[A-Za-z]+$" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Post Office</label>
<div class="controls">
<input type="text"name="postoffice"  placeholder="Enter postoffice "  class="span8 tip" pattern="^([A-Za-z]+ )+[A-Za-z]+$|^[A-Za-z]+$" required>
</div>
</div>
<div class="control-group">
<div class="control-group">
<label class="control-label" for="basicinput">Locality</label>
<div class="controls">
<input type="text"name="locality"  placeholder="Enter locality "  class="span8 tip" pattern="^([A-Za-z]+ )+[A-Za-z]+$|^[A-Za-z]+$" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">HouseName</label>
<div class="controls">
<input type="text"name="housename"  placeholder="Enter housename "  class="span8 tip" pattern="^([A-Za-z]+ )+[A-Za-z]+$|^[A-Za-z]+$" required>
</div>
</div>
<br><br>
<div class="control-group">
<div class="controls">
<button type="submit" name="submit" class="btn btn-info">Add</button>
<a href="address.php" class="btn btn-info">Cancel</a> 
<br><br>
</div>
</div>
</form>
</div>
</div>

<div class="span9">
<div class="content">
<div class="module">
<div class="module-head">
<h3>Manage Addresses</h3>
</div>
<div class="module-body table">
<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
<thead>
<tr>
<th>#</th>
<th>Home</th>
</tr>
</thead>
<tbody>
<?php $query=mysqli_query($conn,"select * from address WHERE login_id= '$email'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($row['housename']);?>(H), <?php echo htmlentities($row['postoffice']);?> P.O,<?php echo htmlentities($row['locality']);?>, <?php echo htmlentities($row['city']);?>, <?php echo htmlentities($row['district']);?>, <?php echo htmlentities($row['pincode']);?>, <?php echo htmlentities($row['state']);?> </td>
<td>
<a href="edit-profile.php?id=<?php echo $row['customer_id']?>" ><i class="icon-edit"></i></a>
<a href="address.php?id=<?php echo $row['user_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
</tr>
<?php $cnt=$cnt+1; } ?>
</table>
</div>
</div>
</div><!--/.content-->
</div><!--/.span9-->
</div>
</div><!--/.container-->
</div><!--/.wrapper-->
<script type="text/javascript">
    function getDetails()
    {
        var pincode=jQuery('#pincode').val();
        if(pincode==''){
            jQuery('#state').val('');
            jQuery('#district').val('');
        }else{
            jQuery.ajax({
                url:'get.php',
                type:'POST',
                data:'pincode='+pincode,
                success:function(data){
                       var getData=$.parseJSON(data);
                       jQuery('#state').val(getData.state);
                       jQuery('#district').val(getData.district);

                }
            });
        }
    }
</script>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
<!-- <script src="scripts/datatables/jquery.dataTables.js"></script> -->
<!-- <script>
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

</script> -->
</body>
<?php ?>