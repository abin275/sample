<?php

    include_once "../connection.php";
    
	$id = $_GET['id'];
    $query="UPDATE booking SET status=2 where booking_id = $id"; // delete query;

    $data=mysqli_query($conn,$query);

    if($data){
        echo" deliverd";
        /*echo '<script type="text/javascript">window.onload = function () { alert("successfully activated"); }
            </script>';*/
		header("Location:manage-order.php");
    }
    else{
        echo"Not able to activate";
    }
    
?>