<?php session_start(); ?>
<html>

<head>

    <style>
        body {
            background-image: url('img/1.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        
        .form-box {
            margin: 80px auto;
            padding: 40px 30px 30px 30px;
        }
    </style>
    <title>User_login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="validate.js"></script>
</head>

<body>
    <div class="container">
        <div class="form-box ">
            <div class="row col-md-5 col-md-offset-3 ">
                <div class="panel">
                    <div class="panel-heading text-center text-warning">
                        <h2><b>TRIALS FRONTIER<b></div>
                        <div class="panel-body">
                        <?php
                    // Your message code
                    if(isset($_SESSION['message']))
                    {
                        echo '<h4 class="alert alert-warning">'.$_SESSION['message'].'</h4>';
                        unset($_SESSION['message']);
                    } // Your message code
                ?>
                            <form action="logconn.php" method="post" id="loginform">
                                <div class="form-group">
                                <label for="c">EMAIL:</label>
                                <input type= "email" id="a" class="form-control" name="email" placeholder="ENTER EMAIL"  octavalidate="R,EMAIL"> 
                                </div>
                                
                                <div class="form-group">
                                <label for="e">PASSWORD:</label>
                                <input type= "password" id="e" class="form-control" name="password" placeholder="ENTER PASSWORD" octavalidate="R" > 
                                </div>
                                
                                <input type="submit" id="c" class="btn btn-warning col-12 mb-3" value="LOGIN" name="login">
                                <small ><a href="user_forgetpassword.php">Forgot Password?<a></small>

                            </form>

                        </div>
                        <div class="panel-footer text-right">
                            <small><a href="user_registration.php">Create an account?<a></small>
                        </div>
                    </div>
                    </div>
                </div>
        
                <script>
        const myForm = new octaValidate('loginform');
//listen for submit event
    document.getElementById('loginform').addEventListener('submit', function(e){
    
    //invoke the method
    if(myForm.validate() === true)
    { 
      //validation successful, process form data here
    } else {
      //validation failed
      e.preventDefault();
      return false;
    }
})







    </script>

    </body>
</html>