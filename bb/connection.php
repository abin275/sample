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

?>