<?php
session_start();
include('connection.php');
    $uid = $_SESSION["email"]; 
    $prod=$_GET["prod"];   
    $price=$_GET["price"];
    echo $prod;
    echo $price;

    $select = "SELECT * FROM tblcart WHERE accessories_id=$prod AND user_id='$uid' AND is_checked_out=0";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0)
    {
        $msg = "<div class='alert alert-danger'>Already added to cart.</div>";
    } 
    else
    {
        $qry = "INSERT INTO tblcart (accessories_id, quantity, user_id, price) VALUES('$prod','1','$uid','$price')";
        $result_query=mysqli_query($conn,$qry);
        if($result_query){
            // $msg = "<div class='alert alert-success'>Added to cart</div>";
            header("Location:cart.php");
        } 
    }
  

?>