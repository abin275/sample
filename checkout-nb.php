<?php
    session_start();
    include('connection.php');
    $email=$_SESSION["email"];
    $user_id=$_GET["user"];
$grand_total = 0;

if (!isset($_SESSION["email"])) {
    header("Location:login.php");
}

if (isset($_POST['submit'])) {
    $order_date = date("Y-m-d H:i:s");
    $customer_name = $_POST['name'];
    $customer_email = $_POST['email'];
    $customer_phone = $_POST['phone'];
    $customer_address = $_POST['address'];
    $payment_mode = $_POST['payment_mode'];
    $total_amount = $_POST['total_amount'];
    //Insert to orders table
    $sq=mysqli_query($conn,"SELECT registration_id FROM tbluser_registration where email='$user_id'");
    while($ro=mysqli_fetch_array($sq))
    {
        $user_id=$ro['registration_id'];
    

    $sql = "INSERT INTO orders (user_id, order_date, customer_name, customer_email, customer_phone, customer_address, payment_mode, total_amount, order_status) 
    VALUES ('$user_id', '$order_date', '$customer_name', '$customer_email', '$customer_phone', '$customer_address', '$payment_mode', '$total_amount',0)";
    $result = mysqli_query($conn, $sql);
    $order_id = mysqli_insert_id($conn);
    if (!empty($order_id)) {
        foreach ($_POST['items'] as $key => $product_id) {
            $id = $_POST['entry_ids'][$key];
            $quantity = $_POST['quantity'][$key];
            $price = $_POST['price'][$key];
            $total_price = $quantity * $price;
            $sql = "INSERT INTO order_items (order_id, product_id, quantity, price, total_price) VALUES ('$order_id', '$product_id', '$quantity', '$price', '$total_price')";
            $result = mysqli_query($conn, $sql);
             //update cart table status
             $sql1 = "UPDATE tblcart SET is_checked_out = 1 WHERE cart_id = $id";
             $result1 = mysqli_query($conn, $sql1);
            if ($result) {
                // reduce Total_quantity from product table
                $sql2 = "UPDATE tbl_accessories SET quantity = quantity - $quantity WHERE accessories_id = $product_id";
                $res = mysqli_query($conn, $sql2);  
            }
            else
            echo'<script>alert("Error in placing order!")</script>';
        }
        header("location:orders.php");
        /* echo'<script>alert("Order is placed successfully!")</script>'; */
        
        
    }
}
    
}



$sql3 = mysqli_query($conn,"SELECT c.cart_id, c.accessories_id, p.name, c.quantity, p.price,c.user_id FROM tblcart c INNER JOIN tbl_accessories p ON p.accessories_id = c.accessories_id WHERE c.user_id= '$user_id' and c.is_checked_out = 0");

?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons.css" rel="stylesheet">
  
  <link rel="stylesheet" href="productdetailstyle.css"/>
<meta charset="UTF-8">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  
    
  
    <script src="https://unpkg.com/phosphor-icons"></script>
    <title>Product</title>
  
<style>
@media (min-width: 1025px) {
  .h-custom {
  height: 100vh !important;
  }
  }
  .text-bold {
            font-weight: 800;
        }

        text-color {
            color: #0093c4;
        }

        /* Main image - left */
        .main-img img {
            width: 100%;
        }

        /* Preview images */
        .previews img {
            width: 100%;
            height: 140px;
        }

        .main-description .category {
            text-transform: uppercase;
            color: #0093c4;
        }

        .main-description .product-title {
            font-size: 2.5rem;
        }

        .old-price-discount {
            font-weight: 600;
        }

        .new-price {
            font-size: 2rem;
        }

        .details-title {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 1.2rem;
            color: #757575;
        }

        .buttons .block {
            margin-right: 5px;
        }

        .quantity input {
            border-radius: 0;
            height: 40px;

        }


        .custom-btn {
            text-transform: capitalize;
            background-color: #0093c4;
            color: white;
            width: 150px;
            height: 40px;
            border-radius: 0;
        }

        .custom-btn:hover {
            background-color: #0093c4 !important;
            font-size: 14px;
            color: white !important;
        }

        .similar-product img {
            height: 400px;
        }

        .similar-product {
            text-align: left;
        }

        .similar-product .title {
            margin: 17px 0px 4px 0px;
        }

        .similar-product .price {
            font-weight: bold;
        }


        /* Small devices (landscape phones, less than 768px) */
        @media (max-width: 767.98px) {

            /* Make preview images responsive  */
            .previews img {
                width: 100%;
                height: auto;
            }

        }
</style>
    </head>
    <body>


 <!-- bootstrap css -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout inner_posituong contact_page">
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                <li class="nav-item">
                        <a class="nav-link" href="first.php">TRIALS FRONTIER</a>
                    </li> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

        <main>
            
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            

            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
            <li class="nav-item">
                        <a class="nav-link" href="first.php">Home</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wishlist.php">Wishlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>
                </ul>
                
                <form class="d-flex">
                    <input class="form-control me-3" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
                &emsp;&emsp;&emsp;&emsp;
                  &emsp;&emsp;         
                <ul class="navbar-nav mr-lg-2">
                   <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              
              <span class="nav-profile-name">Account</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <button type="button" class="btn btn-dark btn-sm btn-icon-text">
                Profile
              </button>
              <button type="button" class="btn btn-dark btn-sm btn-icon-text">
                            <?php
                              if(!(isset($_SESSION['email']))){
                                echo "<span class='badge_active'><a href='login.php' style='color:white;text-decoration:none;'>Login</a></span>";
                              } 
                              else{
                                echo "<span class='badge_deactive'><a href='logout.php' style='color:white;text-decoration:none;'>Logout</a></span>";
                              }

                            ?>
                                                       
                            </button>
                            <?php 
                            if(isset($_SESSION['email'])){
                            $email=$_SESSION['email'];
                            }
                            ?>
            </div>
          </li>
          
        </ul>
            </div>
        </div>
    </nav>
            <section class="h-100 gradient-custom">
                <form method="post" id="placeOrder" action=" ">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 px-4 pb-4" id="order">

                                <div class="container">
                        </br></br>
                                    <h4>Order Details</h4>
                                    </br>
                                    <?php
                                    while ($row = mysqli_fetch_array($sql3)) {
                                        $sub_total = $row['quantity'] * $row['price'];
                                        $grand_total += $sub_total;
                                        
                                        ?>
                                        <input type="hidden" name="items[]" value="<?= $row['accessories_id'] ?>">
                                        <input type="hidden" name="quantity[]" value="<?= $row['quantity'] ?>">
                                        <input type="hidden" name="price[]" value="<?= $row['price'] ?>">
                                        <input type="hidden" name="entry_ids[]" value="<?= $row['cart_id'] ?>">
                                        <p><?= $row['name'] ?> <span class="price">₹ <?= $sub_total ?></span></p>
                                        <?php
                                    } ?>
                                    <hr class="hr">
                                    <?php
                                    
                                    ?>
                                    <p>Total <span class="price" style="color:black"><b>₹ <?= $grand_total ?></b></span></p>
                                </div>

                                <input type="hidden" id="amt"name="total_amount" id="total" value="<?= $grand_total; ?>">
                                </br>
                                <?php
                                $sq = "SELECT * FROM tbluser_registration where email = '$user_id'";
                                $res = $conn->query($sq);
                                    if ($res-> num_rows > 0){
                                        while($ro = $res-> fetch_assoc()){
                    
                                ?>
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name"  value = "<?= $ro['name'] ?>" minlength="5" maxlength="50" pattern="\S(.*\S)?" required>
                                </div>
                                </br>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" value = "<?= $ro['email'] ?>" required>
                                </div>
                                </br>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone" value = "<?= $ro['phone'] ?>"   required>
                                </div>
                                </br>

                                <div class="form-group">
                                <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address"  value = "<?= $ro['address'] ?>"  required>
                                </div>
                                </br>
                                


                                <div class="form-group">
                                    <select name="payment_mode" class="form-control" required>
                                        <option value="" selected disabled>Payment Mode</option>
                                        <option value="1">Cash On Delivery</option>
                                        <option value="1">Net Banking</option>
                                    </select>
                                </div>
                                </br>
                              
                               
         
                                
                                <!-- <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script> -->

<!-- <form>
    <input type="text" name = "name" id = "name">
    <input type="text" name="amt" id="amt">


    <input type="button" class="btn btn-primary"name="pay" id ="rzp-button1" value="Pay now" onclick="pay_now()">
    
</form>
<script>
    function pay_now(){

    var name=jQuery('#name').val();
    var amt=jQuery('#amt').val(); 
    // var amount = getElementById('total').value;
    var options = {
    "key": "rzp_test_bpkYObmj5H0Qba",
    "amount": 50*100, 
    "currency": "INR",
    "name": "Ad_Sol",
    "description": "Test Transaction",
    "image": "https://drive.google.com/file/d/1FJCNPPMhML96z3s4IrR8-yGU4A6HLm2X/view?usp=share_link",
    "handler":function(response){
        console.log(response);
        jQuery.ajax({
            type:'POST',
            url:'payment.php',
            data:"payment_id="+response.razorpay_payment_id+"&amt="+amt+"&name="+name,
            success:function(result){
                window.location.href="thankyou.php";
            }

        })
        // if(response){
        //     window.location.href="/adsol/index.php";
        // }
       

    }
};

var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}

}
</script> -->
                                </br></br>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-danger">Place Order</button>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </form>
            </section>  
        </main>
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>


</script>
                                

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


    </body>
</html>