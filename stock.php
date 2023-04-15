<?php
  session_start();
include 'connection.php'; // get id through query string
$total=0;

$reg=$_SESSION["email"];

$sql=mysqli_query($conn,"SELECT * FROM `tbluser_registration` where email='$reg'");
while($row = mysqli_fetch_array($sql))
   {
    $address=$row['address'];
   } 
$cart=mysqli_query($conn,"SELECT * FROM `tblcart` where user_id='$reg'");
while($rows=$cart->fetch_assoc())
{

$accessories_id=$rows['accessories_id'];
$qty=$rows['quantity'];
$price=$rows['price'];
$total=$rows['quantity'] * $rows['price'];
$che=mysqli_query($conn,"SELECT * FROM `tbl_accessories` where accessories_id='$accessories_id'");
while($row = mysqli_fetch_array($che))
   {
    $qt=$row['quantity'] - $qty;
    mysqli_query($conn,"UPDATE `tbl_accessories` SET `quantity`='$qt' WHERE accessories_id='$accessories_id'");
}
//$insert_products="INSERT INTO `tbl_order`(qty,total_price,address,date) VALUES ('$qty','$total','$address',NOW())"; 
}
//$result_query=mysqli_query($conn,$insert_products);
$sel=mysqli_query($conn,"DELETE FROM `tblcart` WHERE user_id='$reg'");
if($sel)
{
   // mysqli_close($conn); // Close connection
    header("location:thanku.php"); // redirects to all records page
    exit;   
}
else
{
    echo "Error deleting record"; // display error message if not delete
    
}

if(isset($_POST['submit']))
{
 $bill = $_POST['bill_id'];
 $amount = $_POST['amount'];
 $transaction = md5(rand());
 $sql2 = mysqli_query($conn, "INSERT INTO bills_paid (bill_id, booking_id, service_type, transaction_id, amount) VALUES ($bill, $id, 'Service Center', '$transaction', $amount)");
 if($sql2)
 {
    header("location:cbookingdetails.php");
 }
}
?>