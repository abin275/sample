<?php
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADDING SECOND CATAGORIES</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                <li>
                    <a href="/sample/sidebar-01/admin.php"><i class="fa fa-home"></i> Admin Homepage</a>
                    </li>
                    <li>
                                <a href="\sample\sidebar-01\registeruser.php"><i class="fa fa-home"></i>Registered Users</a>
                            </li>
                            <li>
                                <a href="\sample\sidebar-01\registershop.html"><i class="fa fa-home"></i>Register Shops</a>
                            </li>
                            <li>
                                <a href="\sample\sidebar-01\productdetails.php"><i class="fa fa-home"></i>Product Details</a>
                            </li>
                            <li>
                                <a href="\sample\sidebar-01\bookingdetails.php"><i class="fa fa-home"></i>Booking Details</a>
                            </li>
                            <li>
                                <a href="\sample\sidebar-01\contactdetails.php"><i class="fa fa-home"></i>Complaint Details</a>
                            </li>
                             <li>
                           <a href="\sample\sidebar-01\pro.php"><i class="fa fa-home"></i>Add Product</a>
                          </li>




                          <li>
                           <a href="\sample\sidebar-01\outlet_insert.php"><i class="fa fa-home"></i>Add outlets</a>
                          </li>
                          <li>
                           <a href="\sample\sidebar-01\jobentering.php"><i class="fa fa-home"></i>Enter jobs</a>
                          </li>
                          <li>
                           <a href="\sample\sidebar-01\bill.php"><i class="fa fa-home"></i>Generate bill</a>
                          </li>



                          <li>
                           <a href="cat.php"><i class="fa fa-home"></i>Add category</a>
                          </li>
                          <li>
                           <a href="co.php"><i class="fa fa-home"></i>Add Colour</a>
                          </li>
                          <li>
                           <a href="qu.php"><i class="fa fa-home"></i>Add Quantity</a>
                          </li>
                          <li>
                           <a href="se.php"><i class="fa fa-home"></i>Add Second catagories</a>
                          </li>
                          <li>
                           <a href="sp.php"><i class="fa fa-home"></i>Add Specifications</a>
                          </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           INSERT SECOND CATAGORIES<small></small>
                        </h1>
                    </div>
                </div> 
                 <div class="row">

                 <div class="form-group">
                                            <label>SECOND CATAGORIES</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div> 	
                               </div>
                
                       
                                            <div class="form-group">
                                            <div class="form-group select-group text-start">
                                                <label class="form-label fw-normal fs-5">CATEGORIES</label>
                                                <select class="form-select form-control" name="s" id="category_dropdown">
                                                <option value="">Select category</option>
                                                
                                                <?php
                                                $result=mysqli_query($conn,"select * from tbl_category");
                                               
                                                while($row=mysqli_fetch_array($result)){

                                                ?>
                                               
                                               <option value="<?php echo $row['category_id'];?>"><?php echo $row["category_name"];?></option>
                                                <?php
                                                }
                                                ?>
                                                </select>
                                                </div>
                                        </div>




                                        <script>
                                          $(document).ready(function() {
                                            $('#category_dropdown').on('change', function() {
                                             var category_id = this.value;
                                        $.ajax({
                                        url: "sub_by_cat.php",
                                        type: "POST",
                                        data: {
                                            category_id: category_id
                                        },
                                        cache: false,
                                        success: function(result){
                                        $("#subcategory_dropdown").html(result);
                                       /*  $('#city-dropdown').html('<option value="">Select State First</option>');  */
                                     }
                                    });
         
         
                                    });    

                                });

                                </script>

							 
                
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        
						<input type="submit" name="submit" class="btn btn-primary">
						
						</form>
							
                    </div>
                </div>
            
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>