<?php

session_start();
if (!isset($_SESSION['email'])){

header('Location:/SAMPLE/index.html');
}
//$id_session=$_SESSION['id'];
?>