<?php
session_start();
?>
<html>
<head>
    <style>
        body {
            background-image: url('img/10.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <title>User_registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="validate.js"></script>
</head>

<body>
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel mt-3">
                <div class="panel-heading text-center text-primary">
                    <h2><b>TRIALS FRONTIER<b></div>
                <?php
                    // Your message code
                    if(isset($_SESSION['status']))
                    {
                        echo '<h4 class="alert alert-warning">'.$_SESSION['status'].'</h4>';
                        unset($_SESSION['status']);
                    } // Your message code
                ?>
                    <div class="panel-body">
                            <form id="user_registration" action="regconn.php" method="post">
                                <div class="form-group">
                                <label for="name">NAME:</label>
                                <input  type= "text" id="name" class="form-control" name="name" placeholder="ENTER NAME" octavalidate="R,ALPHA_SPACES" > 
                                </div>
                                <div class="form-group">
                                <label for="address">ADDRESS:</label>
                                <input  type= "text" id="address" class="form-control" name="address" placeholder="ENTER ADDRESS"  octavalidate="R,ALPHA_SPACES"> 
                                </div>
                                <div class="form-group">
                                <label for="gender">GENDER:</label>
                                <div>
                                    <input type="radio" name="gender" value="male" >Male
                                    <input type="radio" name="gender" value="female" >Female
                                    <input type="radio" name="gender" value="other" >Other<br>
                                <!--<select name="gender">
                                   <option>male</option>
                                   <option>female</option>
                                   <option>other</option>-->
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="email">EMAIL:</label>
                                <input type= "email" id="email" class="form-control" name="email" placeholder="ENTER EMAIL"  octavalidate="R,EMAIL"> 
                                </div>
                                <div class="form-group">
                                <label for="phone">PHONE NUMBER:</label>
                                <input type= "tel" id="phone" class="form-control" name="phone" placeholder="ENTER PHONE NUMBER" octavalidate="R,DIGITS" > 
                                </div>
                                <div class="form-group">
                                <label for="password">PASSWORD:</label>
                                <input  type= "password" id="password" class="form-control" name="password" placeholder="ENTER PASSWORD" octavalidate="R"> 
                                </div>
                                <!-- <div class="form-group">
                                <label for="cpassword">CONFIRM PASSWORD:</label>
                                <input  type= "password" id="cpassword" class="form-control" name="vpassword" placeholder="CONFIRM PASSWORD"> 
                                </div> -->
                                <input type="submit" id="a" class="btn btn-primary col-12" value="REGISTER" name="save">
                            </form>

                        </div>
                        <div class="panel-footer text-right">
                            <small><a href="user_login.php">Already have an account?<a></small>
                        </div>
                    </div>
                </div>
            </div>
    <script>
        const myForm = new octaValidate('user_registration');
//listen for submit event
    document.getElementById('user_registration').addEventListener('submit', function(e){
    
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