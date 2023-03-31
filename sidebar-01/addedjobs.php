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
    <title>Users list </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- <link rel="stylesheet" href="table.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
            form {
            overflow: hidden;
            
            display:inline-block;
            margin:10px;
            }
</style>
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
                            <a href="addedjobs.php">Jobs Added</a>
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



        <div class="card1 bg-secondary mt-3">
        <div class="card-header">
            <h1 id="h1">Job Added Details</h1>
        </div>
        <div class="card-body">
            <!-- <a href="admin_dashboard.php"><button class="button-54">Dashboard</button></a> -->
            
            <!-- <form action="searchproductdetails.php" method="post">
                                        <input type="text" name="search" placeholder="Search" style="width:200px;height:30px;border-radius:10px;">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form> -->
                        
            <style>
                #content {
                           width: 160%;}
                .card1{
                            border-radius: 5px;
                            width: 100%;
                            -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
                            box-shadow: 0 1px 2.94px0.06px rgba(4, 26, 55, 0.16);
                            border: none;
                            margin-bottom: 30px;
                            -webkit-transition: all 0.3s ease-in-out;
                            transition: all 0.3s ease-in-out;
                        }

                        .card .card-block {
                            padding: 25px;
                        }

                        .order-card i {
                            font-size: 26px;
                        }
            </style>
            <table class="table table-bordered table-hover table-info" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>    
                        <th style="width: 10px">NAME</th>
                        <th style="width: 10px">ADDRESS</th>
                        <th style="width: 10px">PHONE</th>
                        <th style="width: 10px">LOCATION</th>
                        <th style="width: 10px">SALARY</th>
                        <th style="width: 10px">JOB TYPE</th>
                        <th style="width: 10px">Actions</th>                      

                    </tr>
                </thead>
                <tbody>

                    <?php
                 $sql = "SELECT * from tbl_postjobs"  ;
                //  $sql = "SELECT * from tbl_oil";
                 $result = $conn->query($sql);
                 if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                        <td>
                                <?php echo $row['job_id'] ?>
                            </td>
                        <td>
                                <?php echo $row['name'] ?>
                            </td>
                            <td>
                                <?php echo $row['address'] ?>
                            </td>
                            <td>
                                <?php echo $row['location'] ?>
                            </td>
                            <td>
                                <?php echo $row['phone'] ?>
                            </td>
                            <td>
                                <?php echo $row['salary'] ?>
                            </td>
                            <td>
                                <?php echo $row['jobtype'] ?>
                            </td>
                           
                            <td>
                            
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                            <?php
                              if($row['recruit_status']==0){
                                echo "<span class='badge_active'><a href='?type=status&operation=deactive&id=".$row['job_id']."' style='color:white;text-decoration:none;'>Recruitment Open</a></span>";
                              } 
                              else{
                                echo "<span class='badge_deactive'><a href='?type=status&operation=active&id=".$row['job_id']."' style='color:white;text-decoration:none;'>Recruitment Closed</a></span>";
                              }

                            ?>
                              <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                            </button>
</td>
                            <!-- <button class="btn btn-danger"  name="d_btn" value="<?=$row['basic_id']?>" style="height:40px">Delete</button>
                            <td><button class="btn btn-danger"  name="d_btn" value="<?=$row['basic_id']?>" style="height:40px">Delete</button></a></td>  -->
                        </tr>
                        <?php
                 }
                 }
                    ?>
                </tbody>
            </table>
                </div>
                </div>
                </div>

            <br> <br> <br>
            <!-- <style>
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
            </style> -->
            </head>

            <body>
                <br>

            </body>

</html>

</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
<?php
if(isset($_GET['type']) && $_GET['type']!=''){
    $type=($_GET['type']);
  
    if($type=='status'){
      $operation=($_GET['operation']);
      $id=($_GET['id']);
  
      if($operation=='deactive'){
        $status='1';
      }
      else{
        $status='0';
      }
      $update_status="UPDATE tbl_postjobs set recruit_status='$status'where job_id='$id'";
      mysqli_query($conn,$update_status);
  
    }

  }
?>

</html>