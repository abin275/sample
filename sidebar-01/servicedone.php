<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="project";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
    if (!$conn) 
    {
        echo "Connection failed: ";
    }

    $id = $_GET['id']; // get id through query string

    $del = mysqli_query($conn,"UPDATE `booking` SET `status`=1 WHERE booking_id=$id;"); // update query
    if($del)
    {
        mysqli_close($conn); // Close connection
        header("location:../seller/manage-order.php"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
        
    }

?>