<?php
    include_once "../connection.php";
    
	$id = $_GET['id'];
    $query="UPDATE order_items SET or_status=2 where id = $id"; // delete query;

    $data=mysqli_query($con,$query);

    if($data){
        echo" pending";
        /*echo '<script type="text/javascript">window.onload = function () { alert("successfully activated"); }
            </script>';*/
		header("Location:manage-order.php");
    }
    else{
        echo"Not able to activate";
    }
    
?>