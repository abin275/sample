<?php
include 'connection.php';
use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  function send_password_mail($email, $token)
  {
    require ("PHPMailer.php");
    require ("SMTP.php");
    require ("Exception.php");
    $mail = new PHPMailer(true);
    try {
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                   //Enable verbose debug output
      $mail->isSMTP();                                           //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                      //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                  //Enable SMTP authentication
      $mail->Username   = 'trialsfrontieronline@gmail.com';                 //SMTP username
      $mail->Password   = 'zejdnmzchovtgpkk';                    //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           //Enable implicit TLS encryption
      $mail->Port       = 465;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      $mail->setFrom('trialsfrontieronline@gmail.com', 'a');
      $mail->addAddress($email);    
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Password Reset Link';
      $mail->Body    = "Your Password Reset Link
                        <a href='http://localhost/sample/change_password.php?email=$email&token=$token'>Click Here</a>";
      $mail->send();
      return true;
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      return false;
  }
  }

if(isset($_POST['check_mail']))
{
    $email=$_POST['email'];
    $token=md5(rand());
    $check_email="SELECT email from tbl_login where email='$email'";
    $check_email_run=mysqli_query($conn, $check_email);
    if(mysqli_num_rows($check_email_run)>0)
    {
        $row=mysqli_fetch_assoc($check_email_run);
        $update_token="UPDATE tbl_login SET verify_token='$token' where email='$email'";
        $update_token_run=mysqli_query($conn,$update_token);
        if($update_token_run)
        {
            send_password_mail($email, $token);
            echo "<script> alert('Link is sent to mail'); </script>";
        }
        else{
            echo "<script> alert('Wrong'); </script>";
        }
    }
    else{
        echo "<script> alert('No email found'); </script>";
        //header('location:forgot_password.php');
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
<!--############### Header Ends Here ###############-->

<!-- <div class="login">
    <div class="login-box">
        <h2>Reset Password</h2>
        <form action="forgot_password.php" method="POST">
            <div class="user-box">
                <input type="email" name="email" required>
                <label>Enter Email address</label>
            </div>
            <button type="submit" name="check_mail" class="submit">Send</button>
        </form>
    </div>
</div> -->

<!--##################### Footer Starts Here ######################--->
<footer class="footer">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-4 col-sm-12">
                  <h2>About Us</h2>
                    <p>
                        MedSphere is a leading provider of health care, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.
                    </p>
                    <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
                </div> -->



                <div class="lead w-lg-50 mx-auto" style="font-size: 20px;font-weight:bolder;color:white">
                        <div class="login">
                        <div class="login-box">
                            <h2 class="lead w-lg-50 mx-auto" style="font-size: 20px;font-weight:bolder;color:white">Reset Password</h2>
                            <form action="forgot_password.php" method="POST">
                                <div class="user-box">
                                    <input type="email" name="email" required>
                                    <label>Enter Email address</label>
                                </div>
                                <button type="submit" name="check_mail" class="submit" style="font-size: 20px;font-weight:bolder;color:red">Send</button>
                            </form>
                        </div>
                      </div>
                    </div>


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
              <!-- <a>2022 &copy; All Rights Reserved | Designed and Developed by trials frontier</a> -->
              <!-- <span>
              <a><i class="fab fa-google-plus-g"></i></a>
              <a><i class="fab fa-twitter"></i></a>
              <a><i class="fab fa-facebook-f"></i></a>
              </span> -->
        </div>

    </div>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>        
<script src="assets/js/script.js"></script>
</html>