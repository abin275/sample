<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "builder";
 
 // Create connection
$con= new mysqli($servername, 
    $username, $password, $dbname);
	
// Check connection
if ($con->connect_error) {
    die("Connection failed: " 
        . $con->connect_error);
}


$sql = "SELECT * from product";
 $result = $con->query($sql);
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $user =$row['username'];
               }
 }
$id = $_GET['id']; // get id through query string
$del = mysqli_query($con,"UPDATE `product` SET `status`=1 where product_id = '$id'"); // delete query

if($del )
{
    mysqli_close($con); // Close connection
    header("location: manageproduct.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>