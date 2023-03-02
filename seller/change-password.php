
<?php
// $_SESSION["userId"] = $_SESSION['user_id'];
include "../connection.php";
include "index.php";
if (count($_POST) > 0) {

    $sql = "SELECT * FROM users WHERE user_id= ?";
    $statement = $con->prepare($sql);
    $statement->bind_param('i', $_SESSION["user_id"]);
    $statement->execute();
    $result = $statement->get_result();
    $row = $result->fetch_assoc();

    if (! empty($row)) {
        $hashedPassword = $row["password"];
        
        $password = md5($_POST["newPassword"]);
        $currentpass=md5($_POST["currentPassword"]);
        // print($currentpass);exit;
        if ($currentpass == $hashedPassword) {
            $sql = "UPDATE users set password=? WHERE user_id=?";
            $statement = $con->prepare($sql);
            $statement->bind_param('si', $password, $_SESSION["user_id"]);
            $statement->execute();
            $message = '<div class="validation-successmessage">Password Changed </div>';
        } else
            $message = '<div class="validation-message">Current Password is not correct</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\includelink.css">

    <!-- Fancy box css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" 
    integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link type="text/css" href="../admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="../admin/css/theme.css" rel="stylesheet">
    <link type="text/css" href="../admin/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <style>
        .validation-message{
            color:red;
        }
        .validation-successmessage{
            color:green;
        }
    </style>

<script type="text/javascript">
function valid()
{
	if(document.chngpwd.password.value=="")
	{
		alert("Current Password Filed is Empty !!");
		document.chngpwd.password.focus();
		return false;
	}
	else if(document.chngpwd.newpassword.value=="")
	{
		alert("New Password Filed is Empty !!");
		document.chngpwd.newpassword.focus();
		return false;
	}
	else if(document.chngpwd.confirmpassword.value=="")
	{
		alert("Confirm Password Filed is Empty !!");
		document.chngpwd.confirmpassword.focus();
		return false;
	}
	else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
	{
		alert("Password and Confirm Password Field do not match !!");
		document.chngpwd.confirmpassword.focus();
		return false;
	}
	return true;

}

function validatePassword() {
	var currentPassword, newPassword, confirmPassword, output = true;

	currentPassword = document.frmChange.currentPassword;
	newPassword = document.frmChange.newPassword;
	confirmPassword = document.frmChange.confirmPassword;

	if (!currentPassword.value) {
		currentPassword.focus();
		document.getElementById("currentPassword").innerHTML = "required";
		output = false;
	}
	else if (!newPassword.value) {
		newPassword.focus();
		document.getElementById("newPassword").innerHTML = "required" ;
		output = false;
	}
	else if (!confirmPassword.value) {
		confirmPassword.focus();
		document.getElementById("confirmPassword").innerHTML = "required";
		output = false;
	}
	if (newPassword.value != confirmPassword.value) {
		newPassword.value = "";
		confirmPassword.value = "";
		newPassword.focus();
		document.getElementById("confirmPassword").innerHTML = "not same";
		output = false;
	}
	return output;
}



</script>
</head>
<body>

        <div class="col-auto col-md-9">
            <h3>Admin Change Password</h3>
            <br>
            <div class="span9" style="background:#98A2E6;">
                <div class="content">
                    <div class="module">
                        <div class="module-body">
                            <div class="text-center"><?php if(isset($message)) { echo $message; } ?></div>
                            <form class="form-horizontal row-fluid" name="frmChange" method="post" enctype="multipart/form-data" onSubmit="return validatePassword()">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Current Password</label>
                                    
                                    <div class="controls">
                                        
                                        <input type="password" placeholder="Enter your current Password" name="currentPassword" class="span8 tip" ><span id="currentPassword" class="validation-message"></span>
                                    </div>  
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">New Password</label>
                                   
                                    <div class="controls">
                                        
                                        <input type="password" placeholder="Enter your new current Password" name="newPassword" class="span8 tip"minlength="7"pattern="\S(.*\S)?" ><span id="newPassword" class="validation-message" ></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Confirm Password</label>
                                    
                                    <div class="controls">
                                       
                                        <input type="password" placeholder="Enter your new Password again" name="confirmPassword" class="span8 tip" > <span id="confirmPassword" class="validation-message"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn" style="background:#98A2E6;">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--/.content-->
                    </div><!--/.span9-->
                </div>
            </div><!--/.container-->
        </div>
    </div>
</div>


