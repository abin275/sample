<?php
  include 'connection.php';
  if(isset($_POST['password_reset']))
  {
    $email=$_GET['email'];
    $npass=md5($_POST['new_password']);
    $cnewpass=md5($_POST['cnew_password']);
    $token=$_GET['token'];
    if(!empty($token))
    {
        if(!empty($token) && !empty($npass) && !empty($cnewpass))
        {
            $check_token="SELECT verify_token from tbl_login where verify_token='$token'";
            $check_token_run=mysqli_query($conn, $check_token);
            if(mysqli_num_rows($check_token_run)>0)
            {
                if($npass=$cnewpass)
                {
                    $updatepassword="UPDATE tbl_login SET password='$npass' where verify_token='$token'";
                    $updatepassword_run=mysqli_query($conn, $updatepassword);
                    if($updatepassword_run)
                    {
                        echo "<script> alert('Password Updated'); </script>";
                        //header('location:login.php');
                    }
                }
                else{
                    echo "<script> alert('Password not match'); </script>";
                    //header('location:change_password.php');
                }
            }
        }
        else
        {
            echo "<script> alert('invalid'); </script>";
            //header('location:change_password.php');
        }
    }
    else
    {
        echo "<script> alert('No token'); </script>";
        //header('location:change_password.php');
    }
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
    <link rel="stylesheet" href="./jobliststyle.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">


    <style>
      .error-message
      {
        color:red;
        font-size:15px;

      }
    </style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout inner_posituong">
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
                               
                                    
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>














   

<!--##################### Header Ends Here #####################-->
<div class="login"  style="font-size: 20px;font-weight:bolder;color:black">
    <div class="login-box"><br><br>
        <h2 style="font-size: 20px;font-weight:bolder;color:black">Change Password</h2>
        <form action="" method="POST">
            <div class="user-box">
                <input type="password" name="new_password" id="password" onkeyup="validatePassword()" required="">
                <label>New Password</label>
            </div>
            <div class="user-box">
                <input type="password" name="cnew_password" id="cpassword" onkeyup="validateForm()" required="">
                <label>Confirm New Password</label>
            </div>
          
            <button type=submit name="password_reset" id="signup_btn" style="font-size: 20px;font-weight:bolder;color:black">Update Paasword</button>
        </form>
        <p class="no-c">Already have an Account? <a href="user_login.php" style="color:#2030F4;font-weight:bold;">Login</a></p>
      </div>
</div>
    </div>
        
        

<!-- ################# Footer Starts Here#######################--->
        <footer class="footer">
        <div class="container">
            <div class="row">
            <div class="lead w-lg-50 mx-auto" style="font-size: 20px;font-weight:bolder;color:blue">
              
                    <!-- <p>
                        MedSphere is a leading provider of health care, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.
                    </p>
                    <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
                </div> -->

                <div class="lead w-lg-50 mx-auto" style="font-size: 20px;font-weight:bolder;color:blue">
                  <h2 style="font-size: 20px;font-weight:bolder;color:blue">Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        Trials Frontier <br>
                        Kochi (K.K District) <br>
                        Kerala, IND <br>
                        Phone: +91 9159669599 <br>
                        Email: <a href="mailto:trialsfrontieronline@gmail.com" class="">trialsfrontieronline@gmail.com</a><br>
                        Web: <a href="www.trialsfrontier.com" class="">www.trialsfrontier.in</a><br><br><br><br>
                        <a>2022 &copy; All Rights Reserved | Designed and Developed by trials frontier</a>
                       
                    </address>
                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a>2022 &copy; All Rights Reserved | Designed and Developed by MedSphere</a>
            </div>

        </div>
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>        
<script src="assets/js/script.js"></script>
<script src="assets/js/validate.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>