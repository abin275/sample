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

    $del = mysqli_query($conn,"UPDATE `jobers` SET `status`=1 WHERE jobers_id=$id;"); // update query
    if($del)
    {
        mysqli_close($conn); // Close connection
        header("location:viewjobers.php"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
        
    }

?>