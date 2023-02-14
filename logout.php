<?php
    session_start();
    // unset($_SESSION["authentication"]);
    // unset($_SESSION["auth_user"]);
    session_destroy();
    $_SESSION['message'] = "Logged Out Successfully";
    header("Location: ./index.php");
?>
