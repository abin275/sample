<?php
include "../session.php";
include "../connection.php";
$email=$_SESSION["email"];
?>


<html lang="en">

<head>
    <title>Users list </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script>

       /*
        $(document).ready(function(){
            $('#con').on('click', function(){
                alert();
                var ID = $(this).val();
                if(ID){
                    alert();
                    $.ajax({
                        type:'POST',
                        url:'bookingmail.php',
                        data:'id='+ID,
                        success:function(html){
                        $('#con').html= "Email Sent"; 
                        }
                    }); 
                }else{
                   
                }
            });
            
        });
        */
        

    </script>
</head>

<body>

        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
                <div class="p-4 pt-5">
                    <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(adminavatar.jpg);"></a>
                    <ul class="list-unstyled components mb-5">
                        <li class="active">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">ABOUT</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                            <a href="#">VIEW ACCOUNT</a>
                        </li>
                        <li>
                            <a href="#">PASSWORD</a>
                        </li>
                            </ul>
                        </li>
                        <li>
                            <a href="cbookingdetails.php">BOOKING DETAILS</a>
                        </li>
                        <li>
                            <a href="\sample\cart.php">CART</a>
                        </li>
                        <li>
                            <a href="history.php">My orders</a>
                        </li>
                        
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">ACCOUNT</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>
                                    <a href="#">PAYMENTS</a>
                                </li>
                                <li>
                                    <a href="#">ADDRESS BOOKING</a>
                                </li>
                                <li>
                                    <a href="#">REFUND</a>
                                </li>
                                <li>
                                    <a href="#">PRODUCT RETURNS</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#">test</a>
                        </li>
                        <li>
                            <a href="#">test</a>
                        </li> -->
                    </ul>

                    <div class="footer">
                    <p></p>
                </div>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="admin.php">HOME</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="../logout.php">LOGOUT</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- <h2 class="mb-4"></h2> -->
<h1 id="h1">Booking Detail</h1><br> <br>


<table class="paleBlueRows">
    <thead>
        <tr>
            <th>#</th>
            <th>CUSTOMER_ID</th>
            
            <th>NAME</th>
            <th>EMAIL</th>
            
            <th>OUTLET</th>
           
            <th>BIKE_NAME</th>
            <th>BIKE_NUMBER</th>
          
            <th>TYPE_OF_SERVICE</th>
            <th>CHECK_IN_DATE</th>
            <th>ARRAVING TIME</th>
            <th>RC BOOK PHOTO</th>
            <th>STATUS</th>
            
        
        </tr>
    </thead>
    <tbody>

        <?php

$sql1 = mysqli_query($conn,"SELECT * from tbl_login,booking where  tbl_login.login_id=booking.login_id AND tbl_login.email='$email'");
$cnt=1;
while($rows=mysqli_fetch_array($sql1)) {
        ?>
            <tr>
            <td>
             <?php echo htmlentities($cnt);?>
                </td>
                <td>
             <?php echo $rows['login_id'] ?>
                </td>
               
                <td>
                    <?php echo $rows['name'] ?>
                </td>
                <td>
                    <?php echo $rows['email'] ?>
                </td>
               
                <td>
                    <?php echo $rows['outlet'] ?>
                </td>
               
                <td>
                    <?php echo $rows['bike_name'] ?>
                </td>
                <td>
                    <?php echo $rows['bike_number'] ?>
                </td>
               
                <td>
                    <?php echo $rows['type_of_service'] ?>
                </td>
                <td>
                    <?php echo $rows['check_in'] ?>
                </td>
                <td>
                    <?php echo $rows['time'] ?>
                </td>
                
                <td>
                  <img src="../bb/<?php echo $rows['rc'] ?>" style="width: 100px;height: 100px;">
                </td>
                  
                <td>
                <?php 
               
                if($rows['status']==0)
                {
                echo "PENDING";
                }
                elseif($rows['status']==1)
                {
                echo "ON PROGRESS";
                }
                else
                {
                 echo "COMPLETED<br><br>";
                
                 echo "<span class='badge_active'><a href='../sidebar-01/bill2.php?booking_id=".$rows['booking_id']." '>Bill</a></span>";
                }
                ?>
                            </td>
          
               
            </tr>
            <?php
             $cnt=$cnt+1;
     }
     
        ?>
    </tbody>
</table>



<br> <br> <br>











<style>
    html {
        box-sizing: border-box;
    }
    
    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }
    
    .column {
        float: left;
        width: relative;
        margin-bottom: 8px;
        padding: 0 8px;
        width: 350px;
        height: 550px;
    }
    
    @media screen and (max-width: 650px) {
        .column {
            display: block;
        }
    }
    
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        height: 350px;
        width: 300px;
    }
    
    .container {
        padding: 0 16px;
    }
    
    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }
    
    .title {
        color: grey;
    }
    
    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }
    
    .button:hover {
        background-color: #555;
    }
</style>
</head>

<body>
    <br>

</body>



</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>






</body>

</html>