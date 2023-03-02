<?php
include "../connection.php";
include "index.php";
if(!isset($_SESSION["email"])) 
{
    header("Location:../login.php");
} 
else{
     if(isset($_POST['submit'])) {
    $category=$_POST['category'];
    $select = "SELECT * FROM category WHERE category_name ='$category' ";
    $result=$con->query($select);
    if($result->num_rows>0)
        {
            $_SESSION['msg']="Category  alredy Created !!";     
        } 
     else{  
        $sql=mysqli_query($con,"insert into category(category_name) values('$category')");
        $_SESSION['msg']="Category Created !!";
     }
        }
    if(isset($_GET['del']))
    {
    mysqli_query($con," UPDATE category SET status=1 where  category_id = '".$_GET['id']."'");
    $_SESSION['delmsg']="Category deleted !!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   

    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <script>   
</script>
<!----> 
<script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['wishlist','Number'],
 <?php 
      $query = "SELECT count(wishlist.product_id) AS number, product.product_name FROM product INNER JOIN wishlist WHERE product.product_id=wishlist.product_id GROUP BY wishlist.product_id";

       $exec = mysqli_query($con,$query);
       while($row = mysqli_fetch_array($exec)){

       echo "['".$row['product_name']."',".$row['number']."],";
       }
       ?> 
 
 ]);

 var options = {
 title: 'Favourite Product',
  pieHole: 0,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.PieChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
  
</script>

<!---->
</head>
<body>

                
            <div class="span9">
<div class="content">
<div class="module">
<div class="module-head">
<div class="container-fluid">
 <div id="columnchart12" style="width: 100%; height: 500px;"></div>
 </div>
</div>
</div>
</div>
</div><!--/.content-->
</div><!--/.span9-->
</div>
</div><!--/.container-->
</div><!--/.wrapper-->
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="scripts/datatables/jquery.dataTables.js"></script>
<!-- <script src="validation.js"></script> -->
<script>
$(document).ready(function() {
$('.datatable-1').dataTable({
"pageLength": 5,
"lengthMenu": [5, 10, 20, 25, 50]
});
$('.dataTables_paginate').addClass("btn-group datatable-pagination");
$('.dataTables_paginate > a').wrapInner('<span />');
$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
});

</script>
<script>
window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'report.pdf',
                image: { type: 'jpeg', quality: 0.99 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'a3', orientation: 'p' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>
</body>
<?php ?>
</html>