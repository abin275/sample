<?php 
session_start();
include "connection.php";
 $email=$_SESSION["email"];
 $uid=$_SESSION["email"];
if(!isset($_SESSION["email"]))  
{
    header("Location:user_login.php");
}
else
{
    $query=mysqli_query($conn,"select * from tbluser_registration where email='$email'");
    while($row=mysqli_fetch_array($query))
    {
        $user_id=$row['registration_id'];
    }
   

{
    if(isset($_POST['update_cart'])){
        $update_quantity = $_POST['cart_quantity'];
        $update_id = $_POST['cart_id'];
        $sql= mysqli_query($conn, "UPDATE cart SET quantity = '$update_quantity' WHERE cart_id = '$update_id'");
        echo $sql;
        $message[] = 'cart quantity updated successfully!';
     }
     if(isset($_GET['remove'])){
        $remove_id = $_GET['remove'];
        mysqli_query($conn, "DELETE FROM cart WHERE cart_id = '$remove_id'") or die('query failed');
        header('location:cart.php');
     }  
     if(isset($_GET['delete_all'])){
        mysqli_query($conn, "DELETE FROM cart WHERE user_id = '$user_id'") or die('query failed');
        header('location:cart.php');
     }
}
}

if(isset($_GET['id'])){
    $uid = $_SESSION["email"];
    $prod=$_GET["id"];   
   

    $select="SELECT * from tblcart where user_id='$uid' and accessories_id='$prod'";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0)
    {
        $msg = "<div class='alert alert-danger'>Already added to cart.</div>";
    } 
    else
    {
        $qry = "INSERT INTO `tblcart` (`user_id`,`accessories_id`,`quantity`) VALUES('$uid','$prod',1)";
        $result_query=mysqli_query($conn,$qry);
        if($qry){
            $msg = "<div class='alert alert-success'>Added to cart</div>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP registration form</title>

<!-- Bootstrap -->
<!-- <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
<link href="sidebar-01/css/bootstrap.min.css" rel="stylesheet">
<link href="sidebar-01/css/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="css/slick.css"/>

<link href="tooplate-little-fashion.css" rel="stylesheet">
<link href="css/stylecat.css" rel="stylesheet">
<link rel="stylesheet" href="css/navstyle.css">
<link rel="stylesheet"href="css/buttonstyle.css">
<link rel="stylesheet"href="cartstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->




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
</head>
<body>

<section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>
        <!-- <nav class="navbar navbar-inverse" style="background:#04B745;">
    <div class="container-fluid">
      <div class="navbar-header"> <a class="navbar-brand" href="#" style="color:#FFFFFF;">Shopping Cart</a> </div>
    </div>
  </nav> -->
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
                               <li class="nav-item active" width="auto">
                                        <a class="nav-link " href="#" style="font-size: 30px;font-weight:bolder">SHOPPING CART</a>
                                    </li>
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
                               <li class="nav-item">
                                        <a class="nav-link " href="first.php"><i class="bi bi-shop-window"></i> Home</a>
                                    </li>
                               <li class="nav-item">
                                <a class="nav-link" href="product.php"><i class="bi bi-shop-window"></i> Shop</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="checkout.php">
                                    <i class="bi bi-key"></i> Checkout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <i class="bi bi-heart-fill"></i> Wishlist</a>
                            </li>
                            <?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) )
                            { ?>
                            <li class="nav-item">
                                    <a class="nav-link" href="logout.php"> <i class="bi bi-box-arrow-right"></i> Logout</a>
                                </li>
                            <?php }
                            else{ ?>
                                
                                <li class="nav-item">
                                <a class="nav-link" href="user_login.php"><i class="bi bi-box-arrow-in-left"></i>Login</a>
                            </li>
                         <?php } ?>
                      </ul>
                      <li class="nav-item">
                        <div class="d-none d-lg-block">
                        <?php if( isset($_SESSION['email'])&& !empty($_SESSION['email']) )
                        { ?>
                            <a href=" " style="font-size:15px;display:flex;float:right;font-weight:bolder" class="bi-person custom-icon me-3"> WELCOME -<?php echo htmlentities($_SESSION['email']);?></a>
                        <?php }
                        else{ ?>
                            <a href=" " class="bi-person custom-icon me-3"></a> 
                                
                         <?php } ?>
                            <a href="product-detail.html" class="bi-bag custom-icon"></a>
                    </div>
                               </ul>
                           </div>
                           
                       </nav>
                   </div>
               </div>
           </div>
       </div>
   </header>

                            <!-- <li class="nav-item">
                                <a class="nav-link" href="product.php"><i class="bi bi-shop-window"></i> Shop</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="checkout.php">
                                    <i class="bi bi-key"></i> Checkout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <i class="bi bi-heart-fill"></i> Wishlist</a>
                            </li>
                            <?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) )
                            { ?>
                            <li class="nav-item">
                                    <a class="nav-link" href="logout.php"> <i class="bi bi-box-arrow-right"></i> Logout</a>
                                </li>
                            <?php }
                            else{ ?>
                                
                                <li class="nav-item">
                                <a class="nav-link" href="user_login.php"><i class="bi bi-box-arrow-in-left"></i>Login</a>
                            </li>
                         <?php } ?>
                      </ul>
                        <div class="d-none d-lg-block">
                        <?php if( isset($_SESSION['email'])&& !empty($_SESSION['email']) )
                        { ?>
                            <a href=" " style="font-size:15px;display:flex;float:right;" class="bi-person custom-icon me-3"> Welcome -<?php echo htmlentities($_SESSION['email']);?></a>
                        <?php }
                        else{ ?>
                            <a href=" " class="bi-person custom-icon me-3"></a> 
                                
                         <?php } ?>
                            <a href="product-detail.html" class="bi-bag custom-icon"></a>
                    </div> -->
                </div>
            </div>
            </nav> 
            <nav class="navbar navbar-inverse" style="background:#04B745;">
    <div class="container-fluid">
      <div class="navbar-header"> <a class="navbar-brand" href="#" style="color:#FFFFFF;"></a> </div>
    </div>
  </nav>
<div class="container" style="width:600px;">
 
  <nav class="navbar navbar-inverse" style="background:#04B745;">
    <div class="container-fluid pull-left" style="width:300px;">
      <div class="navbar-header"> <a class="navbar-brand" href="#" style="color:#FFFFFF;">PRODUCTS</a> </div>
    </div>
    <div class="pull-right" style="margin-top:7px;margin-right:7px;"><a href="cart.php?action=emptyall" class="btn btn-info">Empty cart</a></div>
  </nav>
  </div>




  
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
<!-- Header -->


<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
<div class="s-full js-hide-cart"></div>

<div class="header-cart flex-col-l p-l-65 p-r-25">
<div class="header-cart-title flex-w flex-sb-m p-b-8">
<span class="mtext-103 cl2">
Your Cart
</span>

<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
<i class="zmdi zmdi-close"></i>
</div>
</div>
<div class="header-cart-content flex-w js-pscroll">
<ul class="header-cart-wrapitem w-full">
<li class="header-cart-item flex-w flex-t m-b-12">
<div class="header-cart-item-img">
<img src="images/item-cart-01.jpg" alt="IMG">
</div>

<div class="header-cart-item-txt p-t-8">
<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
White Shirt Pleat
</a>

<span class="header-cart-item-info">
1 x $19.00
</span>
</div>
</li>

<li class="header-cart-item flex-w flex-t m-b-12">
<div class="header-cart-item-img">
<img src="images/item-cart-02.jpg" alt="IMG">
</div>

<div class="header-cart-item-txt p-t-8">
<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
Converse All Star
</a>

<span class="header-cart-item-info">
1 x $39.00
</span>
</div>
</li>

<li class="header-cart-item flex-w flex-t m-b-12">
<div class="header-cart-item-img">
<img src="images/item-cart-03.jpg" alt="IMG">
</div>

<div class="header-cart-item-txt p-t-8">
<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
Nixon Porter Leather
</a>

<span class="header-cart-item-info">
1 x $17.00
</span>
</div>
</li>
</ul>
<div class="w-full">
<div class="header-cart-total w-full p-tb-40">
Total: $75.00
</div>


<div class="header-cart-buttons flex-w w-full">
<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
View Cart
</a>

<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
Check Out
</a>
</div>
</div>
</div>
</div>
</div>



<!-- Shoping Cart -->
<form class="bg0 p-t-75 p-b-85">
<div class="container">
<div class="row">
<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
<div class="m-l-25 m-r--38 m-lr-0-xl">
<div class="wrap-table-shopping-cart">
<table class="table-shopping-cart">
<tr class="table_head">
<th class="column-1">Product</th>
<th class="column-2"></th>
<th class="column-3">Price</th>
<th class="column-4">Quantity</th>
<th class="column-5">Total</th>
</tr>

<?php
                        $sql1="SELECT * from tbl_accessories,tblcart where tblcart.accessories_id=tbl_accessories.accessories_id and tblcart.user_id='$uid' and tblcart.is_checked_out=0";
                       
                        $res = $conn-> query($sql1);
                        if ($res-> num_rows > 0){
                            while($row1 = $res-> fetch_assoc()){
                    ?>
                                <tr class="table_row">
                                    <td class="column-1">
                                        <div class="how-itemcart1">
                                        <img src="<?php echo $row1['image']?>" alt="IMG">
                                        </div>
                                    </td>
                                    <td class="column-2"><?php echo $row1['name']?></td>
                                    <td class="column-3">₹ <?php echo $row1['price']?></td>
                                    <!-- <td class="column-4">
                                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product" min="1" type="number" name="num-product1" value="<?php echo $row1['quantity']?>">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                    </td>
                                     -->
                                     <form action=" " method="POST" enctype="multipart/form-data">
                                     <td class="column-4">
               
                  <input type="hidden" name="cart_id" value="<?php echo $row1['cart_id']; ?>">
                  <input type="number" min="1" max="10" name="quantity" value="<?php echo $row1['quantity']?>">
                  <td class="column-6">₹ <?php echo $row1['price']*$row1['quantity']; ?></td>
              
            </td>
                                    
                                    
                                    <td><button type="submit" name="update" class="option-btn">Update</button></td>
                                    </form>
                                    <td class="column-5"><a href="cart.php?rementry=<?php echo $row1['cart_id'];?>">
                                    <button type="button" id="button1" onClick="window.location.reload()" class="btn btn-outline-dark btn-sm">Remove</button></a></td>
                                    
                                </tr>
                                <?php
                          }
                          }
                          ?>
</td>

</table>
</div>

<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
<!-- <div class="flex-w flex-m m-r-20 m-tb-5">
<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
Apply coupon
</div>
</div> -->

<!-- <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
Update Cart
</div> -->
</div>
</div>
</div>

<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
<h4 class="mtext-109 cl2 p-b-30">
BUY NOW
</h4>

<div class="flex-w flex-t bor12 p-b-13">
<div class="size-208">
<span class="stext-110 cl2">
</span>
</div>
<!-- 
<div class="size-209">
<span class="mtext-110 cl2">
$79.65
</span>
</div>
</div>

<div class="flex-w flex-t bor12 p-t-15 p-b-30">
<div class="size-208 w-full-ssm">
<span class="stext-110 cl2">
Shipping:
</span>
</div>

<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
<p class="stext-111 cl6 p-t-2">
There are no shipping methods available. Please double check your address, or contact us if you need any help.
</p>
<div class="p-t-15">
<span class="stext-112 cl8">
Calculate Shipping
</span>

<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
<select class="js-select2" name="time">
<option>Select a country...</option>
<option>USA</option>
<option>UK</option>
</select>
<div class="dropDownSelect2"></div>
</div>

<div class="bor8 bg0 m-b-12">
<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State / country">
</div>

<div class="bor8 bg0 m-b-22">
<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
</div>
<div class="flex-w">
<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
Update Totals
</div>
</div>
</div>
</div>
</div>

<div class="flex-w flex-t p-t-27 p-b-33">
<div class="size-208">
<span class="mtext-101 cl2">
Total:
</span>
</div> -->

<!-- <div class="size-209 p-t-1">
<span class="mtext-110 cl2">
$79.65
</span>
</div> -->
</div>
<a href="checkout.php?user=<?php echo $uid;?>" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
<!-- <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer"> -->
Proceed to Checkout

<!-- </button> -->
                        </a>
</div>
</div>
</div>
</div>


<!-- Footer -->



<?php
if(isset($_POST['update']))
{
    $entry = $_POST['cart_id'];
    $p_quantity = $_POST['quantity'];
    $update = "UPDATE tblcart SET quantity = $p_quantity WHERE cart_id = '$entry'";
        mysqli_query($conn,$update);      
}


if(isset($_GET['rementry']))
{
  $entry = $_GET['rementry'];
    
  $delete="DELETE FROM tblcart where cart_id=$entry";
  mysqli_query($conn,$delete); 
    
    
}

?>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
$(".js-select2").each(function(){
$(this).select2({
minimumResultsForSearch: 20,
dropdownParent: $(this).next('.dropDownSelect2')
});
})
</script>
<!--===============================================================================================-->
<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
$('.js-pscroll').each(function(){
$(this).css('position','relative');
$(this).css('overflow','hidden');
var ps = new PerfectScrollbar(this, {
wheelSpeed: 1,
scrollingThreshold: 1000,
wheelPropagation: false,
});

$(window).on('resize', function(){
ps.update();
})
});
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>


      