<?php
include('connection.php');
// include('a.js');

if(isset($_POST['submit'])){
    $product_name=$_POST['name'];
    $product_address=$_POST['address'];
    $product_location=$_POST['location'];
    $email=$_POST['email'];
    
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $name = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];

    $location="../uploads/";
    $image=$location.$name;
    
    $target_dir="../uploads/";
    $finalImage=$target_dir.$name;
   move_uploaded_file ($temp, $finalImage);

    //accessing images
    // $product_image1=$_FILES['img1']['name'];
    //accessing image tmp names
    // $temp_image1=$_FILES['img1']['tmp_name'];
   
    //checking empty condition
    if($product_name=='' or $product_address=='' or $product_location=='' or $phone=='' or $finalImage=='' ){
        echo "<script>alert('Please fill all the fields.')</script>";
        exit();
    }else{
        // move_uploaded_file($temp_image1,"./images/$product_image1");
    }

//     if( $product_category=='1'){
//     $product_category=="SELECT 'category_id' FROM `tbl_category`";
//     $insert_products="INSERT INTO `tbl_oil`( `category_id`, `name`, `quantity`, `description`, `price`,  `company`, `specification`, `second_id`) 
//      VALUES ('$product_category', '$product_title', '$product_quantity', '$description', '$product_price','$product_address', '$product_specification' , '$product_category2')";

//     $result_query=mysqli_query($conn,$insert_products);
//     if($result_query){
//         echo "<script>alert('Successfully inserted the oil products.')</script>";
//     }}
    
//     if( $product_category=='2'){
//     $product_category=="SELECT 'category_id' FROM `tbl_category`";
//         $insert_products="INSERT INTO `tbl_basics`( `category_id`, 
//         `name`, `description`, `specification`, `quantity`, `price`, `company`, `second_id`) 
//          VALUES ('$product_category',' $product_title','$description','$product_specification','$product_quantity','$product_price','$product_address' , '$product_category2')";
    
//         $result_query=mysqli_query($conn,$insert_products);
//         if($result_query){
//             echo "<script>alert('Successfully inserted the basics products.')</script>";
//         }}
        
//         if( $product_category=='3'){
//         $product_category=="SELECT 'category_id' FROM `tbl_category`";
//             $insert_products="INSERT INTO `tbl_wearables`( `category_id`, 
//             `name`,`quantity`,`description`, `price`, `specification`, `company`, `second_id`) 
//              VALUES ('$product_category',' $product_title','$product_quantity','$description','$product_price','$product_specification','$product_address' , '$product_category2')";
        
//             $result_query=mysqli_query($conn,$insert_products);
//             if($result_query){
//                 echo "<script>alert('Successfully inserted the wearables products.')</script>";
//             }}
            
//     //insert query
//     /* $insert_products="INSERT INTO `tbl_products`(`product_title`, 
//     `product_description`, `product_keywords`, `category_id`, `brand_id`,
//     `product_image1`, `product_image2`, `product_image3`, `product_price`,
//     `date`, `status`) VALUES ('$product_title','$description',
//     '$product_keywords','$product_category','$product_brands',
//     '$product_image1','$product_image2','$product_image3',
//     '$product_price',NOW(),'$product_status')";

//     $result_query=mysqli_query($con,$insert_products);
//     if($result_query){
//         echo "<script>alert('Successfully inserted the products.')</script>";
//     }
   
// } */
// }
//
// $product_category=="SELECT 'category_id' FROM `tbl_category`";
 $insert_products="INSERT INTO tbloutlet(`name`, `address`, `city_location`, `phone`,`image`,`username`,`password`) 
VALUES ('$product_name','$product_address','$product_location','$phone','$finalImage','$email','$password')";

    $result_query=mysqli_query($conn,$insert_products);
    if($result_query){
        $insert_shop="INSERT INTO tbl_login(`email`,`password`,`role`) 
        VALUES ('$email','$password','shop')";

        $result_query2=mysqli_query($conn,$insert_shop);
        

        echo "<script>alert('Successfully inserted the products.')</script>";
    }
   
}
?>


<body class='hi'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/ce3d98df2b.js"></script>
   <link href="style.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./script.js"></script>

   <head>
    <title>trials </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
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
                    <a href="admin.php">admin</a>
                     </li>
                        <li>
                            <a href="registeruser.php">Registered Users</a>
                        </li>
                        <!-- <li>
                            <a href="registershop.html">Register Shops</a>
                        </li> -->
                        <li>
                            <a href="productdetails.php">Product Details</a>
                        </li>
                        <li>
                            <a href="bookingdetails.php">Booking Details</a>
                        </li>
                        <li>
                                <a href="contactdetails.php">Complaint Details</a>
                            </li>
                            <li>
                           <a href="outlet_insert.php">Add outlets</a>
                          </li>
                             <li>
                           <a href="pro.php">Add Product</a>
                          </li>
                          <li>
                           <a href="jobentering.php">Enter jobs</a>
                          </li>
                          <li>
                           <a href="bill.php">Generate bill</a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">HOME</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>







<div class='dashboard'>
    <div class='dashboard-app'>
        
        <div class='dashboard-content' style="background-image: url(); height: 100%; background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
            <div class='container'>
            <h2 class="text-center font-monospace fw-bolder">ADD OUTLETS</h> 
                        <div class='card mt-1 bg-'>
                            <div class='card-header'>
                              <h4 class="text-start font-monospace fw-bold">INSERT OUTLET DETAILS</h4>
                              <div class='card-body'>
                                <form method="post" action="outlet_insert.php" enctype="multipart/form-data">
                                <div class="row">

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group text-start">
                                            <label for="title" class="form-label fw-normal fs-5">OUTLET NAME</label>
                    
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Shop Name">
                                            </div>
                                        </div>


                                        <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">COMPANY ADDRESS</label>
                                                <input type="text" class="form-control" name="address" placeholder="32, Wales Street, New York, USA">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">LOCATION</label>
                                                <input type="text" class="form-control" name="location" placeholder="Location">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                <label for="gender">GENDER:</label>
                                <div>
                                    <input type="radio" name="gender" value="male" >Male
                                    <input type="radio" name="gender" value="female" >Female
                                    <input type="radio" name="gender" value="other" >Other<br> -->
                                <!--<select name="gender">
                                   <option>male</option>
                                   <option>female</option>
                                   <option>other</option>-->
                                </div>

                                        <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">PHONE NUMBER</label>
                                                <input type="text" class="form-control" name="phone" placeholder="phone number">
                                            </div>
                                        </div>

                                        
                                        <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="phone number">
                                            </div>
                                        </div>

                                        
                                        <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">Password</label>
                                                <input type="text" class="form-control" name="password" placeholder="phone number">
                                            </div>
                                        </div>

                                        <div class="form-group text-start" >
                                            <label for="img" style="font-size : 15px">Select image:</label>
                                             <input type="file" id="img" name="img" style="font-size : 15px">
                                            </div>
                                        </div>
                                        

                                        <div class="col-lg-12 col-md-12 mt-2">
                                            <button type="submit" class="btn btn-success col-lg-12 col-md-12" name="submit">CONFIRM PRODUCT</button>
                                        </div>
                                        <!-- <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">PRODUCT DESCRIPTION</label>
                                                <textarea cols="30" rows="6" name="description" placeholder="Short description..." class="form-control"></textarea>
                                            </div>
                                        </div> -->
                                        


                                        <!-- <div class="col-xl-6 col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">PRODUCT HIGHLIGHTS</label>
                                                <textarea cols="30" rows="6" name="highlight" placeholder="Short description..." class="form-control"></textarea>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                            <label class="form-label fw-normal fs-5"for="pet-select">Product Specification</label>

                                            <select class="form-select form-control"name="specification" id="pet-select">
                                            <option value="">Select specification</option>
                                            <?php
                                                $result=mysqli_query($conn,"select * from tbl_spec");
                                               
                                                while($row=mysqli_fetch_array($result)){

                                                ?>
                                               
                                               <option style="overflow-wrap: break-word;"value="<?php echo $row['specifications'];?>"><?php echo $row["specifications"];?></option>
                                                <?php
                                                }
                                                ?>
                                            
                                            </select>
                                                <label class="form-label fw-normal fs-5">PRODUCT SPECIFICATIONS</label>
                                                <textarea cols="30" rows="6" name="specification" placeholder="Short description..." class="form-control"></textarea>
                                            </div>
                                        </div> -->

                                        <!-- categories
                                        <div class="col-xl-6 col-lg-12 col-md-12 mt-2">
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

                                            <div class="col-xl-12 col-lg-12 col-md-12 mt-3">
                                                <div class="form-group select-group text-start">
                                                <label class="form-label fw-normal fs-5" for="secondc"> SECOND CATEGORIES</label>
                                                <select class="form-select form-control" name="f" id="subcategory_dropdown"> -->
                                                    
                                                    <!-- <option>Select</option>
                                                   
                                                    <option class=OIL>ENGINE OIL</option>
                                                    <option class=OIL>BRAKE FLUID</option>
                                                    <option class=BASICS>HEADLIGHT</option>
                                                    <option class=BASICS>FOG LIGHT</option>
                                                    <option class=BASICS>HANDLE BARS</option>
                                                    <option class=BASICS>HORN</option>
                                                    <option class=WERABLES>JACKET</option>
                                                    <option class=WERABLES>HELMET</option>
                                                    <option class=WERABLES>GLOVES</option> -->
                                                 </select>
                                                </div>
                                            </div>
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
                                            /* var f = $("[name=f] option").detach()
                                            $("[name=s]").change(function() {
                                            var val = $(this).val()
                                            $("[name=f] option").detach()
                                            f.filter("." + val).clone().appendTo("[name=f]")
                                            }).change() */

                                            </script>


                                    

<!--                                         
                                        <div class="col-xl-6 col-lg-12 col-md-12 mt-2">
                                            <div class="form-group select-group text-start">
                                                <label class="form-label fw-normal fs-5">CATEGORYS</label>
                                                <select class="form-select form-control" name="s">
                                                    <option value="1">Select</option>
                                                    <option value="Artificial Intelligence">OIL</option>
                                                    <option value="Cloud Computing">BASICS</option>
                                                    <option value="Blockchain Technology">WERABLES</option>
                                                    
                                                </select>
                                        <div class="col-xl-15 col-lg-12 col-md-12 mt-2">
                                            <div class="form-group select-group text-start">
                                                <label class="form-label fw-normal fs-5">SECOND CATEGORY</label>
                                                <select class="form-select form-control" name="f">
                                                    <option value="1">Select</option>
                                                    <option class=OIL>ENGINE OIL</option>
                                                    <option class=OIL>BRAKE FLUID</option>
                                                    <option class=BASICS>HEADLIGHT</option>
                                                    <option class=BASICS>FOAG LIGHT</option>
                                                    <option class=BASICS>HANDLE BARS</option>
                                                    <option class=BASICS>HORN</option>
                                                    <option class=WERABLES>JACKET</option>
                                                    <option class=WERABLES>HELMET</option>
                                                    <option class=WERABLES>GLOVES</option>
                                                 </select>
                                            </div>
                                        </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-xl-6 col-lg-12 col-md-12 mt-2">
                                            <div class="form-group select-group text-start">
                                                <label class="form-label fw-normal fs-5">PRICE</label>
                                                <input type="text" class="form-control" name="price" placeholder="enter a amount">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-12 mt-2">
                                            <div class="form-group select-group text-start">
                                                <label class="form-label fw-normal fs-5">Colour</label>
                                                <select class="form-select form-control" name="c" id="colour_dropdown">
                                                <option value="">Select colour</option>
                                                
                                                <?php
                                                $result=mysqli_query($conn,"select * from tbl_color");
                                               
                                                while($row=mysqli_fetch_array($result)){

                                                ?>
                                               
                                               <option value="<?php echo $row['color_name'];?>"><?php echo $row["color_name"];?></option>
                                                <?php
                                                }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-12 mt-2">
                                        <div class="form-group select-group text-start">
                                                <label class="form-label fw-normal fs-5">Quantity</label>
                                                <select class="form-select form-control" name="q" id="category_dropdown">
                                                <option value="">Select quantity</option>
                                                
                                                <?php
                                                $result=mysqli_query($conn,"select * from tbl_quantity");
                                               
                                                while($row=mysqli_fetch_array($result)){

                                                ?>
                                               
                                               <option value="<?php echo $row['quantity_name'];?>"><?php echo $row["quantity_name"];?></option>
                                                <?php
                                                }
                                                ?>
                                                </select>
                                            </div>
                                            </div> -->
                                            
                                        
                                        
                                            <!-- <div class="form-group text-start" >
                                            <label for="img" style="font-size : 15px">Select image:</label>
                                             <input type="file" id="img" name="img" style="font-size : 15px">
                                            </div>
                                        </div> -->
                                        
                                        <!-- <div class="col-xl-6 col-lg-12 col-md-12 mt-2">accept="image/*"
                                            <div class="form-group select-group text-start">
                                                <label class="form-label fw-normal fs-5">Career Level</label>
                                                <select class="form-select form-control" name="position">
                                                    <option value="1">Select</option>
                                                    <option value="Intern">Intern</option>
                                                    <option value="Junior Developer">Junior Developer</option>
                                                    <option value="Senior developer">Senior developer</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        
                                       
                                        <!-- <div class="col-xl-4 col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">Find On Map</label>
                                                <input type="text" class="form-control" placeholder="32, Wales Street, New York, USA">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">Latitude</label>
                                                <input type="text" class="form-control" placeholder="Melbourne">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12 mt-2">
                                            <div class="form-group text-start">
                                                <label class="form-label fw-normal fs-5">Longitude</label>
                                                <input type="text" class="form-control" placeholder="Melbourne">
                                            </div>
                                        </div> -->
                                       
                                    </div>
                                </form>
                                
                              </div>
                            </div>
                        </div>
                
            </div>
        </div>
    </div>
</div>


</body>

