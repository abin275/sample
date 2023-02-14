<?php

session_start();
if (!isset($_SESSION['email'])){

header('Location:/SAMPLE/index.php');
}
//$id_session=$_SESSION['id'];
?>