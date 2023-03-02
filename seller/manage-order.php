<?php
include "../connection.php";
include "index.php";
$email=$_SESSION["email"];
if(!isset($_SESSION["email"])) 
{
    header("Location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\includelink.css">

    <!-- Fancy box css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" 
    integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link type="text/css" href="../admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="../admin/css/theme.css" rel="stylesheet">
    <link type="text/css" href="../admin/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="style2.css">
<style>
.divScroll {
overflow:scroll;
height:500px;
width:1200px;}
</style>
</head>
<body>
    <script language="javascript" type="text/javascript">
        var popUpWin=0;
        function popUpWindow(URLStr, left, top, width, height)
        {
        if(popUpWin)
        {
        if(!popUpWin.closed) popUpWin.close();
        }
        popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
        }

</script>
</head>
<body>

     <br/>
     <br/> 
    <div class="container-fluid">
    
        <div class="row flex-nowrap">
          
            
<div class="divScroll">           
<div class="span35">
<div class="content">
<div class="module">
<div class="module-head">
<div class="col-md-12 text-right mb-3">
                <button class="btn btn-primary" id="download"> Take a pdf</button>
            </div>
<h3>Service order</h3>
</div>
<!-- <div class="module-body table"> -->
<?php if(isset($_GET['del']))
{?>
<div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
</div>

<?php } ?>
<br />  
<div id="invoice">
<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="10%">

<thead> 
<tr>
<th>#</th>
<th>Order Date</th>
<th> Name</th>
<th>Email /Contact no</th>
<th>Product </th>
<th>Shipping Address</th>
<th>Qty</th>
<th>Amount </th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$query=mysqli_query($conn,"SELECT *from booking ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($row['time']);?></td>
<td><?php echo htmlentities($row['check_in']);?></td>

<td><?php echo htmlentities($row['name']);?></td>
<td><?php echo htmlentities($row['email']);?>
<td><?php echo htmlentities($row['phone']);?></td>
<td><?php echo htmlentities($row['rc']);?></td>
<td><?php echo htmlentities($row['bike_number']);?></td>
<td><?php echo htmlentities($row['bike_cc']);?></td>
<td><?php echo htmlentities($row['type_of_service']);?></td>

</tr>

<?php $cnt=$cnt+1; }?>
</tbody>
</table>


</div>
</div><!--/.content-->
</div><!--/.span9-->
</div>
</div><!--/.container-->
</div><!--/.wrapper-->
<script src="../admin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="../admin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="../admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../admin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="../admin/scripts/datatables/jquery.dataTables.js"></script>
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
                jsPDF: { unit: 'in', format: 'a3', orientation: 'l' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>
</body>
<?php ?>
