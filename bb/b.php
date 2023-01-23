
<?php
include('connection.php');

if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $type_of_bike=$_POST['t'];
    $bike_name=$_POST['bname'];
    $bike_number=$_POST['number'];
    $bike_cc=$_POST['cc'];
    $type_of_service=$_POST['services'];
    $check_in=$_POST['cin'];
    $time=$_POST['time'];
    // $rc=$_POST['rc'];
 

    $rc=$_FILES["rc"]["name"];
    $temp1 = explode(".", $_FILES["rc"]["name"]);
    $newfilename1 = round(microtime(true)) . '.' .end($temp1);
    move_uploaded_file($_FILES["rc"]['tmp_name'],"uploads/" .$newfilename1);                  
    $loc1="uploads/".$newfilename1;

 
    $bike_pic=$_FILES["bike_pic"]["name"];
    $temp = explode(".", $_FILES["bike_pic"]["name"]);
    $newfilename = round(microtime(true)) . '.' .end($temp);
    move_uploaded_file($_FILES["bike_pic"]['tmp_name'],"uploads/" .$newfilename);                  
    $loc="uploads/".$newfilename;



    //checking empty condition
    if($title=='' or $name=='' or 
    $email=='' or $phone=='' or $type_of_bike=='' or 
    $bike_name==''or $bike_number=='' or $bike_cc=='' or $type_of_service=='' or $check_in=='' or $time==''  or $rc==''  or $bike_pic==''){
        echo "<script>alert('Please fill all the fields.')</script>";
        exit();
    }else{
        
    }

    //insert query
    $insert_products="INSERT INTO `booking`(`title`, 
    `name`, `email`, `phone`, `type_of_bike`,
    `bike_name`, `bike_number`, `bike_cc`, `type_of_service`,
    `check_in`, `rc`, `bike_pic`, `status`) VALUES ('$title','$name',
    '$email','$phone','$type_of_bike',
    '$bike_name','$bike_number','$bike_cc',
    '$type_of_service','$check_in', '$loc1', '$loc', 0)";

    $result_query=mysqli_query($conn,$insert_products);
    if($result_query){
        echo "<script>alert('Successfully inserted the products.')</script>";
    }
   
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOOKING SERVICES</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="validate.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                    <a href="../service centers.html"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            BIKE SERVICE BOOKING <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-9 col-sm-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form id='userreg' action="b.php" name="form" method="post" enctype="multipart/form-data">
                        
                            <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" id="a" class="form-control" octavalidate="R" >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Prof.">Prof.</option>
												<option value="Rev .">Rev .</option>
												<option value="Rev . Fr">Rev . Fr .</option>
                                            </select>
                              </div>
							  <div class="form-group">
                              <label for="name">NAME:</label>
                                <input  type= "text" id="name" class="form-control" name="name" placeholder="ENTER NAME" octavalidate="R,ALPHA_SPACES" > 
                                            
                               </div>
							   <div class="form-group">
                               <label for="email">EMAIL:</label>
                                <input type= "email" id="email" class="form-control" name="email" placeholder="ENTER EMAIL"  octavalidate="R,EMAIL"> 
                                </div>
								<div class="form-group">
                                <label for="phone">PHONE NUMBER:</label>
                                <input type= "tel" id="phone" class="form-control" name="phone" placeholder="ENTER PHONE NUMBER" octavalidate="R,DIGITS" > 
                                </div>
							   
                        <!-- </div>
                        
                    </div>
                </div>
                
               
                
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary"> -->
                        <div class="panel-heading">
                            BIKE INFORMATION
                        </div>
                        <div class="panel-body">
                
								<div class="form-group">
                                            <label>Type Of Bike*</label>
                                            <select name="t" id="b" class="form-control" octavalidate="R">
												<option value selected ></option>
                                                <option value="ORDINORY BIKE">ORDINORY BIKE</option>
                                                <option value="SUPER BIKE">SUPER BIKE</option>
												<option value="TOURING BIKE">TOURING BIKE</option>
												<option value="OFF-ROAD BIKE">OFF-ROAD BIKE</option>
                                            </select>
                              </div>
                              <div class="form-group">
                                            
                                            <label for="name">Bike Name:</label>
                                            <input type= "text" id="c" name="bname"  class="form-control" placeholder="ENTER BIKE NAME" octavalidate="R,ALPHA_SPACES" >
                                            
                               </div>
                               <div class="form-group">
                                            
                                            <label for="Bike Number">BIKE NUMBER:</label>
                                            <input type="text"  id="d" name="number" class="form-control" placeholder="ENTER NUMBER" octavalidate="R" >

                               </div>
                               <div class="form-group">
                                            <label>Bike cc</label>
                                            <input type="text" id="e" name="cc" class="form-control" placeholder="ENTER BIKE CC" octavalidate="R" >
                                            
                               </div>
							 
							 
							  <div class="form-group">
                                            <label>Type Of Services</label>
                                            <select name="services" id="f" class="form-control" octavalidate="R" >
												<option value selected ></option>
                                                <option value="ORDINORY SERVICES">ORDINORY SERVICES</option>
                                                <option value="MODIFICATION">MODIFICATION</option>
												<option value="ENGINE SERVICE">ENGINE SERVICE</option>
												<option value="TOURING SET UP">TOURING SET UP</option>
                                                <option value="TRACK SET UP">TRACK SET UP</option>
                                                <option value="OFF-ROAD SET UP">OFF-ROAD SET UP</option>
												
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input type="date" id="g" name="cin"  class="form-control" octavalidate="R" >
                                            
                               </div>

                               <div class="form-group">
                                            <label>Chech-in Time</label>
                                            <input type="time" id="h" name="time"   class="form-control" octavalidate="R" >
                                            
                               </div>

                               <div class="form-group" >
                                            <label for="img" style="font-size : 15px">Insert RC Book Image:</label>
                                             <input type="file" id="rc" name="rc" style="font-size : 15px">
                                            </div>

                                            <div class="form-group" >
                                            <label for="img" style="font-size : 15px">Insert Bike Image For Prototype Modeling:</label>
                                             <input type="file" id="bike_pic" name="bike_pic" style="font-size : 15px">
                                            </div>

                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        
						<input type="submit" name="submit" class="btn btn-primary">
						
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
    <script>
        const myForm = new octaValidate('userreg');
//listen for submit event
    document.getElementById('userreg').addEventListener('submit', function(e){
    
    //invoke the method
    if(myForm.validate() === true)
    { 
      //validation successful, process form data here
    } else {
      //validation failed
      e.preventDefault();
      return false;
    }
})
  </script>
  
</body>
</html>