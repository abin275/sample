<?php
include "../connection.php";
include "index.php";
$email=$_SESSION["email"];
$user_id = $_SESSION['user_id'];
if(!isset($_SESSION["email"])) 
{
    header("Location:../login.php");
}
else{
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact_no=$_POST['phoneno'];

    $sql=mysqli_query($con,"update users set username='$name',email='$email',contact_no='$contact_no' where email = '$email'");
$_SESSION['msg']="Profile Updated Successfully !!";
}
}

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ElitBuilder</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</head>


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                
            </div>
        </div>
    

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!--  Info Box for Project count  -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Customer</span>
                                <span class="info-box-number"> <?php
                                        $sql="SELECT * from users where role='customer' AND status=0 ";
                                        $row=mysqli_query($con,$sql);
                                        if($total_user=mysqli_num_rows($row))
                                        {
                                            echo'<h4>'.$total_user.'</h4>';
                                        }
                                    ?></span>
                            </div>
                        </div>
                    </div>

                    <!--  Info Box for product count  -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-warning"><i class="fas fa-user"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total seller</span>
                                <span class="info-box-number"><?php
                                                $sql="SELECT * from users where role='seller' AND status=0 ";
                                                $row=mysqli_query($con,$sql);
                                                if($total_sel=mysqli_num_rows($row))
                                                {
                                                    echo'<h4>'.$total_sel.'</h4>';
                                                }
                                            ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-warning"><i class="fas fa-shopping-cart"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Product</span>
                                <span class="info-box-number"><?php
                                                $sql="SELECT * from product";
                                                $row=mysqli_query($con,$sql);
                                                if($total_products=mysqli_num_rows($row))
                                                {
                                                    echo'<h4>'.$total_products.'</h4>';
                                                }
                                            ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                    

                            
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="module-head">
<h3> Address</h3>
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
<?php $query=mysqli_query($con,"SELECT * from customer WHERE user_id='$user_id'");
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
                            </div><!--/.content-->
                            </div><!--/.span9-->
                            </div>
                            </div><!--/.container-->

    </div>



