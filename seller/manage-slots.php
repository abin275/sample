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
          
            

<div class="row mt-4 tm-edit-product-row">
    <div class="d-flex p-2">
        <form enctype='multipart/form-data' action="manage-order.php" method="POST" class="tm-edit-product-form">
            <div class="input-group mb-3">
                <?php
            $date = date("Y-m-d");
            ?>
                <label for="date" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Date</label>
                <input id="date" name="date" type="date" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" min="<?php echo $date;?>"  required value="<?php echo date("d / m / Y");?>">
            </div>
            <div class="input-group mb-3">
                <label for="slot" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2"> Number of Slots</label>
                <input id="slot" name="slot" type="number" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" required ></input>
            </div>
          
                <input hidden id="outlet" name="outlet" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" value="<?php echo $email;?>"></input>
           
            <div class="input-group mb-3">
                <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                    <button type="submit" class="btn btn-primary" id="upload" name="upload">Update</button>
                </div>
            </div>
        </form>
    </div>    
</div>






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
<?php 
if(isset($_GET['type']) && $_GET['type']!=''){
    $type=($_GET['type']);
  
    if($type=='status'){
      $operation=($_GET['operation']);
      $id=($_GET['id']);
  
      if($operation=='pending'){
        $status='1';
      }
      else if($operation=='onprogress') {
        $status='2';
      }
      else if($operation=='completed')
      {
        $status='2';
      }
      else{
        $status='0';
      }
      $update_status="UPDATE booking set status='$status'where booking_id='$id'";
      mysqli_query($conn,$update_status);
  
    }
  } 
?>
