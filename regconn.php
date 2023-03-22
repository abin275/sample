<?php

// Create connection
session_start();
require_once('connection.php');

if(isset($_POST["save"]))
{
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password =md5($_POST['password']);
    $sql2="SELECT name FROM tbluser_registration WHERE name='$name'";
    $sql="SELECT email FROM tbluser_registration WHERE email='$email'";
    $sql1="SELECT phone FROM tbluser_registration WHERE phone='$phone'";
    $res3=mysqli_query($conn,$sql2);
    $res=mysqli_query($conn,$sql);
    $res1=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($res3) > 0)
    {
        $_SESSION['status']="  USERNAME IS ALREADY REGISTERED ";
        
        header("Location:user_registration.php"); 
    }
    else if (mysqli_num_rows($res) > 0) 
    {
        $_SESSION['status']="  EMAIL ALREADY EXISTS ";
        
        header("Location:user_registration.php");            
    }
    else if(mysqli_num_rows($res1) > 0)
    {
        $_SESSION['status']="  THIS PHONE NUMBER IS ALREADY REGISTERED ";
        
        header("Location:user_registration.php");    
    }
    else
    {
       
        $usertype="customer";
        $sql1 = "INSERT INTO `tbluser_registration`(`registration_id`, `name`, `gender`, `phone`, `address`, `email`, `password`,`role`) VALUES (DEFAULT,'$name','$gender','$phone','$address','$email','$password','$usertype')";
        $sql2 = "INSERT INTO `tbl_login`(`login_id`, `email`, `password`) VALUES (DEFAULT,'$email','$password')";
        $result = mysqli_query($conn,$sql1);
        $result2 = mysqli_query($conn,$sql2);
        if($result && $result2)
        {
            header("Location:index.php");
        
        }
        
   
    }
}
?>