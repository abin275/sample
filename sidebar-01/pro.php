<?php
include('connection.php');
// include('a.js');

if(isset($_POST['submit'])){
    $product_title=$_POST['title'];
    $description=$_POST['description'];
    // $product_highlight=$_POST['highlight'];
    $product_specification=$_POST['specification'];

    $product_category=$_POST['s'];
    $product_category2=$_POST['f'];
    $product_price=$_POST['price'];
    $product_size=$_POST['q'];
    $product_address=$_POST['address'];
    $product_color=$_POST['c'];
    $date=date("Y/m/d");
    $quantity=$_POST['quantity'];
    $year=$_POST['year'];
    $month=$_POST['month'];
    $name = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];

    /* $product_image1=$_FILES['img1']['name'];
    $temp_image1=$_FILES['img1']['tmp_name']; */

   /*  $location="../uploads/";
    $image=$location.$name;
    
    $target_dir="../uploads/";
    $finalImage=$target_dir.$name;
   move_uploaded_file ($temp, $finalImage); */

    //accessing images
    // $product_image1=$_FILES['img1']['name'];
    //accessing image tmp names
    // $temp_image1=$_FILES['img1']['tmp_name'];
   
    //checking empty condition
    if($product_title=='' or $description=='' or 
    $product_specification=='' or $product_category=='' or $product_category2=='' or 
    $product_price=='' or $product_size=='' or $product_address=='' or $product_color=='' or $date==''  or  $quantity=='' or  $year=='' or  $month=='' or $name=='' ){
        echo "<script>alert('Please fill all the fields.')</script>";
        exit();
    }else{
        move_uploaded_file($temp,"../uploads/$name");
    

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
$product_category=="SELECT 'category_id' FROM `tbl_category`";
 $insert_products="INSERT INTO tbl_accessories(`category_id`, `name`, `size`, `description`, `price`, `specification`, `company`, `second_id`, `color`, `date`, `quantity`,  `year`,  `month`, `image`) 
VALUES ('$product_category',' $product_title','$product_size','$description','$product_price','$product_specification','$product_address' , '$product_category2' , '$product_color' , '$date' , '$quantity' , '$year' , '$month' , '$name')";

    $result_query=mysqli_query($conn,$insert_products);
    if($result_query){
        echo "<script>alert('Successfully inserted the products.')</script>";
    }
} 
}
?>









   <head>
        <title>trials </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://use.fontawesome.com/ce3d98df2b.js"></script>
        <link href="style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="./script.js"></script>
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
                <a href="admin.php">ADMIN DASHBOARD</a>
                         </li>
                            <li>
                            <a href="registeruser.php">REGISTERED USERS</a>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">PRODUCT BASED</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                            <a href="pro.php">Add Product</a>
                            </li>
                            <li>
                            <a href="productdetails.php">Product Details</a>
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
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">SERVICES & BOOKING BASED</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                            <a href="outlet_insert.php">Add outlets</a>
                            </li>
                            <li>
                                <a href="bookingdetails.php">Booking Details</a>
                            </li>
                            <li>
                                <a href="doorstepbookingdetails.php">Doorstep Booking Details</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">JOB BASED</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                            <a href="jobentering.php">Enter jobs</a>
                            </li>
                            <li>
                            <a href="viewjobers.php">Job applayers Details</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">REPORTS</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">                          
                            <li>
                            <a href="../prev.php">Report generation</a>
                            </li>
                            <li>
                            <a href="../salesReport.php">Sales report</a>
                            </li>
                            <li>
                            <a href="bill.php">Generate bill</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">DATA VISUALIZATION</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                            <a href="dataanalysis.php">Sales Analysis</a>
                            </li>
                            <li>
                            <a href="fav.php">Mostly carted items</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="contactdetails.php">Feedback Details</a>
                            </li>
                </ul>

                <!-- <div class="footer">
                <p></p>
                </div> -->
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
                    <div class='dashboard-content' style="background-image: url(b2.jpg); height: 100%; background-position: center;
                    background-repeat: no-repeat; background-size: cover;">
                        <div class='container'>
                            <h2 class="text-center font-monospace fw-bolder">ADD PRODUCTS</h> 
                            <div class='card mt-1 bg-'>
                                <div class='card-header'>
                                    <h4 class="text-start font-monospace fw-bold">INSERT PRODUCT DETAILS</h4>
                                    <div class='card-body'>
                                        <form method="post" action="pro.php" enctype="multipart/form-data">
                                            <div class="row">

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group text-start">
                                                        <label for="title" class="form-label fw-normal fs-5">PRODUCT NAME</label>
                                                        <input type="text" id="title" name="title" class="form-control" placeholder="enter product name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 mt-2">
                                                    <div class="form-group text-start">
                                                        <label class="form-label fw-normal fs-5">PRODUCT DESCRIPTION</label>
                                                        <textarea cols="30" rows="6" name="description" placeholder="Short description..." class="form-control"></textarea>
                                                    </div>
                                                </div>

                                        
                                                <div class="col-lg-12 col-md-12 mt-2">
                                                    <div class="form-group text-start">
                                                        <label class="form-label fw-normal fs-5"for="pet-select">Product Specification</label>

                                                        <select class="form-select form-control" name="specification" id="pet-select">
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
                                                    </div>
                                                </div>

                                                <!-- categories -->
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
                                                                <select class="form-select form-control" name="f" id="subcategory_dropdown">
                                                    
                                                    
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
                                                }
                                                });       
                                                });    
                                                });
                                            

                                                </script>


                                                <div class="col-xl-6 col-lg-12 col-md-12 mt-2">
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
                                                        <label class="form-label fw-normal fs-5">size</label>
                                                        <select class="form-select form-control" name="q" id="category_dropdown">
                                                        <option value="">Select size</option>
                                                
                                                        <?php
                                                        $result=mysqli_query($conn,"select * from tbl_size");
                                               
                                                        while($row=mysqli_fetch_array($result)){

                                                        ?>
                                               
                                                        <option value="<?php echo $row['size_name'];?>"><?php echo $row["size_name"];?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                        </select>
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
                                                        <label class="form-label fw-normal fs-5">QUANTITY</label>
                                                        <input type="number" class="form-control" name="quantity" placeholder="Enter Quantity" min="1">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 mt-2">
                                                    <div class="form-group text-start">
                                                        <label class="form-label fw-normal fs-5">YEAR</label>
                                                        <input type="text" class="form-control" name="year" placeholder="Enter year">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 mt-2">
                                                    <div class="form-group text-start">
                                                        <label class="form-label fw-normal fs-5">MONTH</label>
                                                        <input type="text" class="form-control" name="month" placeholder="Enter month">
                                                    </div>
                                                </div>


                                        
                                                <div class="form-group text-start" >
                                                    <label for="img" style="font-size : 15px">Select image:</label>
                                                    <input type="file" id="img" name="img" style="font-size : 15px">
                                                </div>
                                                <!-- </div> -->
                                        
                                     
                                                <div class="col-lg-12 col-md-12 mt-2">
                                                <button type="submit" class="btn btn-success col-lg-12 col-md-12" name="submit">CONFIRM PRODUCT</button>
                                                </div>
                                            </div>
                                        </form>
                                
                                    </div>
                                </div>
                            </div>
                
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

