<?php

    session_start();
    include('connection.php');
    $email=$_SESSION["email"];
    $user_id=$_GET["user"];
$grand_total = 0;

if (!isset($_SESSION["email"])) {
    header("Location:login.php");
}

if (isset($_POST['submit'])) {
    $order_date = date("Y-m-d H:i:s");
    $customer_name = $_POST['name'];
    $customer_email = $_POST['email'];
    $customer_phone = $_POST['phone'];
    $customer_address = $_POST['address'];
    $payment_mode = $_POST['payment_mode'];
    $total_amount = $_POST['total_amount'];
    //Insert to orders table
    $sq=mysqli_query($conn,"SELECT registration_id FROM tbluser_registration where email='$user_id'");
    while($ro=mysqli_fetch_array($sq))
    {
        $user_id=$ro['registration_id'];
    

    $sql = "INSERT INTO orders (user_id, order_date, customer_name, customer_email, customer_phone, customer_address, payment_mode, total_amount, order_status) 
    VALUES ('$user_id', '$order_date', '$customer_name', '$customer_email', '$customer_phone', '$customer_address', '$payment_mode', '$total_amount',0)";
    $result = mysqli_query($conn, $sql);
    $order_id = mysqli_insert_id($conn);
    if (!empty($order_id)) {
        foreach ($_POST['items'] as $key => $product_id) {
            $id = $_POST['entry_ids'][$key];
            $quantity = $_POST['quantity'][$key];
            $price = $_POST['price'][$key];
            $total_price = $quantity * $price;
            $sql = "INSERT INTO order_items (order_id, product_id, quantity, price, total_price) VALUES ('$order_id', '$product_id', '$quantity', '$price', '$total_price')";
            $result = mysqli_query($conn, $sql);
            // update cart table status
            // $sql1 = "UPDATE tblcart SET is_checked_out = 1 WHERE entry_id = $id";
            // $result1 = mysqli_query($conn, $sql1);
            if ($result) {
                // reduce Total_quantity from product table
                $sql2 = "UPDATE tbl_accessories SET quantity = quantity - $quantity WHERE accessories_id = $product_id";
                $res = mysqli_query($conn, $sql2);  
            }
            else
            echo'<script>alert("Error in placing order!")</script>';
        }
        
        echo'<script>alert("Order is placed successfully!")</script>';
        
        
    }
}
    
}

