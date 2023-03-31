<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="project";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
    if (!$conn) 
    {
        echo "Connection failed: ";
    }

?>


<html lang="en">

<head>
    <title>Jobers list </title>
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
        function fnConfirm(){
            alert();
            var ID = $(this).val();
                if(ID){
                    
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
        }

    </script>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(adminavatar.jpg);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="admin.php" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">USERS</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                        </ul>
                    </li>  
                    <li>
                    <a href="admin.php">ADMIN DASHBOARD</a>
                         </li>
                            <li>
                            <a href="registeruser.php">REGISTERED USERS</a>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">PRODUCT BASED</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                            <a href="pro.php">Add Product</a>
                            </li>
                            <li>
                            <a href="productdetails.php">Product Details</a>
                            </li>
                            <li>
                            <a href="\sample\bb\cat.php">insert categories</a>
                            </li>
                            <li>
                            <a href="\sample\bb\se.php">insert second catagories</a>
                            </li>
                            <li>
                            <a href="\sample\bb\co.php">insert color</a>
                            </li>
                            <li>
                            <a href="\sample\bb\sp.php">insert specifications</a>
                            </li>
                            <li>
                            <a href="\sample\bb\qu.php">insert quantity</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">SERVICES & BOOKING BASED</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                            <a href="outlet_insert.php">Add outlets</a>
                            </li>
                            <li>
                                <a href="bookingdetails.php">Booking Details</a>
                            </li>
                            <li>
                                <a href="doorstepbookingdetails.php">Doorstep Booking Details</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">JOB BASED</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                            <a href="jobentering.php">Enter jobs</a>
                            </li>
                            <li>
                            <a href="viewjobers.php">Job applayers Details</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">REPORTS</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">                          
                            <li>
                            <a href="../prev.php">Report generation</a>
                            </li>
                            <li>
                            <a href="../salesReport.php">Sales report</a>
                            </li>
                            <li>
                            <a href="bill.php">Generate bill</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">DATA VISUALIZATION</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                            <a href="dataanalysis.php">Sales Analysis</a>
                            </li>
                            <li>
                            <a href="fav.php">Mostly carted items</a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a href="contactdetails.php">Feedback Details</a>
                            </li>



                        
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">test</a>
                    </li>
                    <li>
                        <a href="#">test</a>
                    </li>
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
<h1 id="h1">Job applayers  Detail</h1><br> <br>
<h2>Applayers Pending </h2> <br> <br>

<table class="paleBlueRows">
    <thead>
        <tr>
            <th>APPLAYING_ID</th>
            <th>JOB ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>DATE OF BIRTH</th>
            <th>APPLAYED POSITION AND PLACE WHERE</th>
            <th>PREVIOUS EXPERIENCES</th>
            <th>EDUCATION QUALIFICATION</th>
       
            <th>CV</th>
            <th>ACTION</th>
            <th>Service Status</th>
        
        </tr>
    </thead>
    <tbody>

        <?php

    

     $sql = "SELECT * from jobers,tbl_postjobs where jobers.job_id=tbl_postjobs.job_id AND status = 0";
    
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        ?>
            <tr>
            <td>
             <?php echo $row['jobers_id'] ?>
                </td>
                <td>
                    <?php echo $row['job_id'] ?>
                </td>
                <td>
                    <?php echo $row['jober_name'] ?>
                </td>
                <td>
                    <?php echo $row['jober_address'] ?>
                </td>
                
                <td>
                    <?php echo $row['email'] ?>
                </td>
                <td>
                    <?php echo $row['jober_phone'] ?>
                </td>
                <td>
                    <?php echo $row['birth'] ?>
                </td>
                <td>
                    <?php echo $row['name'] ?>
                </td>
                <td>
                    <?php echo $row['experience'] ?>
                </td>
                <td>
                    <?php echo $row['education'] ?>
                </td>
                
                
                <td>
                  <img src="../bb/<?php echo $row['cv'] ?>" style="width: 100px;height: 100px;">
                </td>
               
               <td> 
                <button class="btn btn-danger" id="con" name="conform" value="<?=$row['jobers_id']?>" onclick="fnConfirm()">Confirm</button>
               </td>
               <td> 
                <a href="viewjobersdone.php?id=<?php echo $row['jobers_id']; ?>"><button class="btn btn-dark">DONE</button></a>
               </td>
            </tr>
            <?php
     }
     }
        ?>
    </tbody>
</table> <br> <br>

<h2>Get Posted</h2> <br> <br> 

<table class="paleBlueRows">
    <thead>
        <tr>
        <th>APPLAYING_ID</th>
            <th>JOB ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>DATE OF BIRTH</th>
            <th>APPLAYED POSITION AND PLACE WHERE</th>
            <th>PREVIOUS EXPERIENCES</th>
            <th>EDUCATION QUALIFICATION</th>
            <th>CV</th>
      
            
            <!-- <th>Service Status</th> -->
        
        </tr>
    </thead>
    <tbody>

        <?php
     $sql = "SELECT * from jobers where status = 1";
    
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        ?>
           <tr>
            <td>
             <?php echo $row['jobers_id'] ?>
                </td>
                <td>
                    <?php echo $row['job_id'] ?>
                </td>
                <td>
                    <?php echo $row['jober_name'] ?>
                </td>
                <td>
                    <?php echo $row['jober_address'] ?>
                </td>
                
                <td>
                    <?php echo $row['email'] ?>
                </td>
                <td>
                    <?php echo $row['jober_phone'] ?>
                </td>
                <td>
                    <?php echo $row['birth'] ?>
                </td>
                <td>
                    <?php echo $row['name'] ?>
                </td>
                <td>
                    <?php echo $row['experience'] ?>
                </td>
                <td>
                    <?php echo $row['education'] ?>
                </td>
                
                
                <td>
                  <img src="../bb/<?php echo $row['cv'] ?>" style="width: 100px;height: 100px;">
                </td>
              
            </tr>
            <?php
     }
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