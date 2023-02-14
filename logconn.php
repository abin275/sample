<?php
session_start();
include('connection.php');

if(isset($_POST['login']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM tbl_login where email='$email' and password='$password'";
    //echo $query;
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        $row = mysqli_fetch_array($query_run);
        
        // Authenticating Logged In User
        $_SESSION['authentication'] = true;

        // Storing Authenticated User data in Session
        // $_SESSION['auth_user'] = [
        //     'user_id'=>$row['login_id'],
        //     'user_email'=>$row['email'],
        //     'pass'=>$row['password'],
        // ];
        

        if($row['role'] == 'admin')
        {
            
            session_start();
            $_SESSION["email"]=$row["email"];
            header("Location:sidebar-01/admin.php");        
        }
        elseif($row['role'] == 'customer')
        {
            session_start();
            $_SESSION["lid"]=$row["login_id"];
            $_SESSION["email"]=$row["email"];
            header("Location:sidebar-01/..//first.html");
        }       
    }
    else
    {
        $_SESSION['message'] = "Invalid Email or Password"; //message to show
        header("Location: user_login.php");
        exit(0);
    }
}
?>