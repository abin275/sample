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

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(adminavatar.jpg);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">USERS</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                        </ul>
                    </li>  
                            <li>
                                <a href="registeruser.php">Registered Users</a>
                            </li>
                            <li>
                                <a href="registershop.html">Register Shops</a>
                            </li>
                            <li>
                                <a href="productdetails.php">Product Details</a>
                            </li>
                            <li>
                                <a href="bookingdetails.php">Booking Details</a>
                            </li>
                            <li>
                                <a href="contactdetails.php">Complaint Details</a>
                            </li>
                             <li>
                           <a href="pro.php">Add Product</a>
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
            <h1 id="h1">Complaint Detail</h1><br> <br>

<table class="paleBlueRows">
    <thead>
        <tr>
            
            <th>NO.</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>MESSAGE</th>
            
        
        </tr>
    </thead>
    <tbody>

        <?php
     $sql = "SELECT * from tbl_contact";
    
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        ?>
            <tr>
            <td>
             <?php echo $row['contact_id'] ?>
                </td>
                <td>
                    <?php echo $row['name'] ?>
                </td>
                <td>
                    <?php echo $row['email'] ?>
                </td>
                <td>
                    <?php echo $row['phone'] ?>
                </td>
                <td>
                    <?php echo $row['message'] ?>
                </td>
                
                
                <!-- <button class="btn btn-danger"  name="d_btn" value="<?=$row['basic_id']?>" style="height:40px">Delete</button> -->
                <!-- <td><button class="btn btn-danger"  name="d_btn" value="<?=$row['basic_id']?>" style="height:40px">Delete</button></a></td>  -->
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

</html>

</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>