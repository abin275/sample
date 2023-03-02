<?php
 include "../connection.php";
 include "index.php";
 $email=$_SESSION["email"];
//  $user_id = $_SESSION['login_id'];
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
// $select = "SELECT * FROM product WHERE product_name ='$productname'";
//     $result=$con->query($select);
//     if($result->num_rows>0)
//         {
//             $_SESSION['msg']="Product  already Created !!";     
//         }
//         else{
    $sql=mysqli_query($conn,"insert into address(pincode,housename,city,district,user_id,locality,postoffice)values('$pincode','$housename','$city','$district','$user_id','$locality','$postoffice')");
    
    $_SESSION['msg']="profile completed Successfully !!";
}
if(isset($_GET['del']))
{
    mysqli_query($conn," delete from address where customer_id = '".$_GET['id']."'");
    $_SESSION['delmsg']="adress  deleted  successfully!!";
}
}
// }
?>
<div class="content-wrapper">


<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-body">
                

<div class="module-body">
                
<div class="span9">
<div class="content">
<div class="module">
<div class="module-head">
<a href="profile.php"><i class="bi bi-plus"></i>Add new address</a><br><br>
<div class="module">
<div class="module-head">
<h3>Manage Address</h3>
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
<?php $query=mysqli_query($conn,"SELECT * from address WHERE login_id= '$email'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($row['housename']);?>(H), <?php echo htmlentities($row['postoffice']);?> P.O,<?php echo htmlentities($row['locality']);?>, <?php echo htmlentities($row['city']);?>, <?php echo htmlentities($row['district']);?>, <?php echo htmlentities($row['pincode']);?> </td>
<td>
<a href="edit-profile.php?id=<?php echo $row['customer_id']?>" ><i class="icon-edit"></i></a>
<a href="address.php?id=<?php echo $row['customer_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
</tr>
<?php $cnt=$cnt+1; } ?>
</table>
</div>
</div>
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
<!-- <script src="scripts/datatables/jquery.dataTables.js"></script> -->
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