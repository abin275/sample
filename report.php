<?php
include('session.php');
include('connection.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sales Report</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

</head>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}
		table, th, td {
			border: 1px solid black;
			padding: 5px;
			text-align: center;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>
    
</head>
<body>

<?php
 

// Connect to the database
// Retrieve sales data for the specified year and month
if (isset($_GET['year']) && isset($_GET['month'])) {
    $year = $_GET['year'];
    $month = $_GET['month'];


    $sql = "SELECT SUM(total_amount) AS total_revenue
    FROM orders WHERE MONTH(order_date) = $month AND YEAR(order_date) = $year";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output the total revenue for the seller for the specified month and year
        $row = mysqli_fetch_assoc($result);
        echo "<h2>Sales report for $month/$year</h2>";
        $total_revenue = $row['total_revenue'];
        echo "<p>Total Revenue : $total_revenue</p>";
    } 

    // Generate the sales report
    echo "<table>";

    $sql1 = "SELECT * FROM orders o,order_items ot,tbl_accessories p WHERE ot.order_id=o.id AND ot.product_id=p.accessories_id AND MONTH(order_date) = $month AND YEAR(order_date) = $year";
    $result1=mysqli_query($conn,$sql1);

   
    // Check if there are any results
    if (mysqli_num_rows($result1) > 0) {
        // Output the total revenue for the seller for the specified month and year
        echo "<table>";
        echo "<tr><th>Product_Name</th><th>Date</th><th>Quantity</th><th>Amount</th></tr>";
        while ($row = mysqli_fetch_assoc($result1)) {
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['order_date']."</td>";
            echo "<td>".$row['quantity']."</td>";
           
            echo "<td>".$row['total_amount']."</td>";
            echo "</tr>";
        }
    echo "</table>";
    }
    

    $sql3 = "SELECT count(oi.product_id) AS number, p.name
    FROM order_items oi 
    JOIN orders o ON oi.order_id = o.id 
    JOIN tbl_accessories p ON oi.product_id = p.accessories_id 
    WHERE YEAR(o.order_date) = $year AND MONTH(o.order_date) = $month GROUP BY oi.product_id";
    
    $result3 = mysqli_query($conn, $sql3);
    
    // Format the sales data for use with Chart.js
    $labels = array();
    $data = array();
    while ($rows = mysqli_fetch_assoc($result3)) {
        array_push($labels, $rows['name']);
        array_push($data, $rows['number']);
    }

    $labels_json = json_encode($labels);
    $data_json = json_encode($data);
    // Display the sales graph
    echo "<h2>Sales by Product for $month/$year</h2>";
    echo "<canvas id='sales-chart'></canvas>";
    echo "<script>";
    echo "var ctx = document.getElementById('sales-chart').getContext('2d');";
    echo "var salesChart = new Chart(ctx, {";
    echo "    type: 'bar',";
    echo "    data: {";
    echo "        labels: $labels_json,";
    echo "        datasets: [{";
    echo "            label: 'Sales',";
    echo "            data: $data_json,";
    echo "            backgroundColor: [";
    echo "                'rgba(255, 99, 132, 0.2)',";
    echo "                'rgba(54, 162, 235, 0.2)',";
    echo "                'rgba(255, 206, 86, 0.2)',";
    echo "                'rgba(75, 192, 192, 0.2)',";
    echo "                'rgba(153, 102, 255, 0.2)',";
    echo "                'rgba(255, 159, 64, 0.2)'";
    echo "            ],";
    echo "            borderColor: [";
    echo "                'rgba(255, 99, 132, 1)',";
    echo "                'rgba(54, 162, 235, 1)',";
    echo "                'rgba(255, 206, 86, 1)',";
    echo "                'rgba(75, 192, 192, 1)',";
    echo "                'rgba(153, 102, 255, 1)',";
    echo "                'rgba(255, 159, 64, 1)'";
    echo "            ],";
    echo "            borderWidth: 1";
    echo "        }]";
    echo "    }";
    echo "});";
    echo "</script>";

    // Calculate the balance
    /* $query1=mysqli_query($con,"select * from users where email='$email'");
    while($row=mysqli_fetch_array($query1))
    {
    $user_id=$row['user_id'];
    $query2=mysqli_query($con,"select * from seller where seller.user_id='$user_id'"); 
    while($row=mysqli_fetch_array($query2))
    {
    $seller_id=$row['seller_id'];
    $sql4 ="SELECT SUM(total_price) AS total_revenue FROM order_items oi INNER JOIN orders o ON oi.order_id = o.id
    INNER JOIN product p ON oi.product_id = p.product_id
    WHERE p.seller_id = $seller_id
    AND YEAR(o.order_date) = $year
    AND MONTH(o.order_date) < $month";
    // Calculate the sales metrics
    $result4 = mysqli_query($con, $sql4);
    $previous_sales = mysqli_fetch_assoc($result4)['total_revenue'];
    $balance = $previous_sales - $total_revenue;

    // Display the balance
    echo "<h2>Balance as of $month/$year</h2>";
    echo "<p>Previous sales: $previous_sales</p>";
    echo "<p>Total sales: $total_revenue</p>";
    if ($balance > 0) {
        echo "<p>You have a balance of $balance to carry forward.</p>";
    } elseif ($balance < 0) {
        echo "<p>You owe $balance from previous months.</p>";
    } else {
        echo "<p>You have no balance from previous months.</p>";
    }
}
    } */
}
?>
</body>
</html>