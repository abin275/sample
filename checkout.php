<?php
session_start();
include "connection.php";
 $email=$_SESSION["email"];
 $uid=htmlentities($_SESSION['email']);
if(!isset($_SESSION["email"]))  
{
    header("Location:user_login.php");
}
else
{
    if (isset($_POST['submit'])) {
  
        $user_id = $_POST['registration_id'];
        $order_date = date("Y-m-d H:i:s");
        $customer_name = $_POST['name'];
        $customer_email = $_POST['email'];
        $customer_phone = $_POST['phone'];
        $customer_address = $_POST['address'];
        $payment_mode = $_POST['payment_mode'];
        $total_amount = $_POST['total_amount'];
        //Insert to orders table
        $sql = "INSERT INTO orders (user_id, order_date, customer_name, customer_email, customer_phone, customer_address, payment_mode, total_amount) VALUES ('$user_id', '$order_date', '$customer_name', '$customer_email', '$customer_phone', '$customer_address', '$payment_mode', '$total_amount')";
        $result = mysqli_query($conn, $sql);
        $order_id = mysqli_insert_id($conn);
        if (!empty($order_id)) {
            foreach ($_POST['items'] as $key => $product_id) {
                $id = $_POST['cart_ids'][$key];
                $quantity = $_POST['quantity'][$key];
                $price = $_POST['price'][$key];
                $total_price = $quantity * $price;
                $sql1 = "INSERT INTO order_items (order_id, product_id, quantity, price, total_price) VALUES ('$order_id', '$product_id', '$quantity', '$price', '$total_price')";
                $result1 = mysqli_query($conn, $sql1);
                // update cart table status
                $sql2 = "UPDATE cart SET is_checked_out = 1 WHERE cart_id = $id";
                $result2 = mysqli_query($conn, $sql2);
                if ($result2) {
                    // reduce Total_quantity from product table
                    $sq = "UPDATE tbl_accessories SET quantity = quantity - $quantity WHERE product_id = $product_id";
                    $res = mysqli_query($conn, $sq);
                }
            }
            echo '<script>alert("Order Successfully Placed")
            window.location.replace("customer_index.php");</script>';
            
    
            
        }
    }
}
    $query = mysqli_query($conn,"select * from tbluser_registration where email='$email'");
                  while($row=mysqli_fetch_array($query))
                   {
                    $user_id=$row['registration_id'];                
    $sl = mysqli_query($conn, "SELECT * from tblcart, tbl_accessories where tbl_accessories.accessories_id = tblcart.accessories_id and tblcart.user_id=" . $_SESSION["email"] . " " );
                   }
    ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>cla</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
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
  <!-- CSS FILES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="css/slick.css"/>

<link href="css/tooplate-little-fashion.css" rel="stylesheet">
<link href="css/stylecat.css" rel="stylesheet">
<link rel="stylesheet" href="css/navstyle.css">
<link rel="stylesheet"href="css/buttonstyle.css">
<link rel="stylesheet"href="css/search.css">

<!--
    </head>

body -->

<body class="main-layout inner_posituong computer_page">

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
                                    <a href="index.php"><img src="images/logo.png" alt="#" /></a>
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
                                    <li class="nav-item active ">
                                        <a class="nav-link " href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="about.html ">About</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="service centers.html ">Service Centers</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="careers.php ">Careers</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link " href="product.php">Products</a>
                                    </li>
                                    <li class="nav-item d_none">
                                        <a class="nav-link" href="cart.php">Cart</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="contact.php">Contact Us</a>
                                    </li>

                                    <li class="nav-item d_none ">
                                        <a class="nav-link " href="user_registration.php">Register</a>
                                    </li>
                                    <li class="nav-item d_none ">
                                        <a class="nav-link " href="sidebar-01\user.php">Account</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!---->

<form method="post" id="placeOrder">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 px-4 pb-4" id="order">
                <h4 class="text-center text-info p-2">Complete your order!</h4>
                <div class="container">
                    <h4>Price Details</h4>
                    <?php
                    while ($ro = mysqli_fetch_array($sl)) {
                        $sub_total = $ro['quantity'] * $ro['price'];
                        $grand_total += $sub_total;
                        ?>
                        <input type="hidden" name="items[]" value="<?= $ro['accessories_id'] ?>">
                        <input type="hidden" name="quantity[]" value="<?= $ro['quantity'] ?>">
                        <input type="hidden" name="price[]" value="<?= $ro['price'] ?>">
                        <input type="hidden" name="cart_ids[]" value="<?= $ro['cart_id'] ?>">
                        <p><?= $ro['name'] ?> <span class="price">₹ <?= $sub_total ?></span></p>
                        <?php
                    } 
                ?>
                    <hr class="hr">
                    <p>Total <span class="price" style="color:black"><b>₹ <?= $grand_total ?></b></span></p>
                </div>
                <?php
                  $query=mysqli_query($conn,"select * from tbluser_registration where email='$email'");
                  while($row=mysqli_fetch_array($query))
                   {
                    $user_name=$row['username'];
                    $phone_no=$row['contact_no'];
                    $user_id=$row['registration_id'];                
                ?>
                <input type="hidden" name="registration_id" value="<?=$user_id?>">
                <input type="hidden" name="total_amount" value="<?= $grand_total; ?>">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter Name"  minlength="5"
      maxlength="50" pattern="\S(.*\S)?" required value=<?php echo($user_name); ?>>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter E-Mail"  required value=<?php echo($email);?>;>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" 
                     required value=<?php echo($phone_no)?>>
                </div>
                <?php
                }?>
                <div class="form-group">
                    <input type="text" name="address" class="form-control" rows="3" cols="10" pattern="^([A-Za-z]+ )+[A-Za-z]+$|^[A-Za-z]+$"
                              placeholder="Enter Delivery Address Here..."></input>
                </div>
                <h6 class="text-center lead">Select Payment Mode</h6>
                <div class="form-group">
                    <select name="payment_mode" class="form-control" required>
                        <option value="" selected disabled>-Select Payment Mode-</option>
                        <option value="1">Cash On Delivery</option>
                    </select>
                </div>
                <div class="form-group">
                <a href ="thankyou.php"> <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block" onsubmit="alert('Order Placed Successfully')"></a>
                </div>
            </div>
        </div>
    </div>
</form>








<footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <img class="logo1" src="images/logo1.png" alt="#" />
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                        <h3>About Us</h3>
                        <ul class="about_us ">
                            <li>TRIALS FORIENTER<br>AN ONLINE SHOPPING SITE<br>AND SERVICE CENTERS BOOKING, <br>PLATFORM</li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                        <h3>Contact Us</h3>
                        <ul class="conta ">
                            <li>dolor sit amet,<br> consectetur <br>magna aliqua.<br> quisdotempor <br>incididunt ut e </li>
                        </ul>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                        <form class="bottom_form ">
                            <h3>Newsletter</h3>
                            <input class="enter " placeholder="Enter your email " type="text " name="Enter your email ">
                            <button class="sub_btn ">subscribe</button>
                        </form>
                    </div>


                </div>
            </div>
            <div class="copyright ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12 ">
                            <p>© 2022 All Rights Reserved. Design by
                                <!--<a href="https://html.design/ ">-->Abinmon Bousally</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/jquery-3.0.0.min.js "></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js "></script>
    <script src="js/custom.js "></script>
    <script type="text/javascript">
        (function(d, m) {
            var kommunicateSettings = {
                "appId": "1e5676d0b7781e77e7f4ec1f0c8fd4eb9",
                "popupWidget": true,
                "automaticChatOpenOnNavigation": true
            };
            var s = document.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
            var h = document.getElementsByTagName("head")[0];
            h.appendChild(s);
            window.kommunicate = m;
            m._globals = kommunicateSettings;
        })(document, window.kommunicate || {});
        /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
    </script>
</body>

</html>


      