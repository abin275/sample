<?php
include('connection.php');
session_start();
if(isset($_POST['d_btn']))
{
	$registration_id=$_POST['d_btn'];
	$query="UPDATE tbluser_registration SET status=1 where  registration_id='$registration_id'";
	$query_run=mysqli_query($conn, $query);
	if($query_run)
	{
		echo "Deleted";
		header('location:registeruser.php');
	}
}
?>