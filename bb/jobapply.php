
<?php
include('connection.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $birth=$_POST['birth'];
    $p=$_POST['p'];
    $x=$_POST['x'];
    $q=$_POST['q'];
    $s=$_POST['s'];
    // $rc=$_POST['rc'];
 

 
    $bike_pic=$_FILES["cv"]["name"];
    $temp = explode(".", $_FILES["cv"]["name"]);
    $newfilename = round(microtime(true)) . '.' .end($temp);
    move_uploaded_file($_FILES["cv"]['tmp_name'],"uploads/" .$newfilename);                  
    $loc="uploads/".$newfilename;



    //checking empty condition
    if($name=='' or $address=='' or 
    $email=='' or $phone=='' or $birth=='' or $p=='' or 
    $x==''or $q=='' or $s=='' or $cv==''){
        echo "<script>alert('Please fill all the fields.')</script>";
        exit();
    }else{
        
    }

    //insert query
    $insert_products="INSERT INTO `booking`(
    `name`,`address`, `email`, `phone`, `birth`, `position`,
    `experience`, `education`, `skills`,`cv`, `status`) VALUES ('$name','address',
    '$email','$phone','$birth','$p',
    '$x','$q','$s','$loc', 0)";

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
    <title>JOB APPLAYING PORTAL</title>
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
                    <a href="../careers.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                        JOB APPLICATION FORM <small></small>
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
                              <label for="name">NAME:</label>
                                <input  type= "text" id="name" class="form-control" name="name" placeholder="ENTER NAME" octavalidate="R,ALPHA_SPACES" > 
                                            
                               </div>
                               <div class="form-group">
                              <label for="address">ADDRESS:</label>
                                <input  type= "text" id="address" class="form-control" name="address" placeholder="ENTER ADDRESS" octavalidate="R,ALPHA_SPACES" > 
                                            
                               </div>
							   <div class="form-group">
                               <label for="email">EMAIL:</label>
                                <input type= "email" id="email" class="form-control" name="email" placeholder="ENTER EMAIL"  octavalidate="R,EMAIL"> 
                                </div>
								<div class="form-group">
                                <label for="phone">PHONE NUMBER:</label>
                                <input type= "tel" id="phone" class="form-control" name="phone" placeholder="ENTER PHONE NUMBER" octavalidate="R,DIGITS" > 
                                </div>
                                <div class="form-group">
                                <label for="date of birth">DATE OF BIRTH:</label>
                                <input type= "text" id="birth" class="form-control" name="birth" placeholder="ENTER DATE OF BIRTH" octavalidate="R,DIGITS" > 
                                </div>
                                <div class="form-group">
                                <label for="position">APPLIED POSITION & PLACE:</label>
                                <input type= "text" id="p" class="form-control" name="p" placeholder="ENTER APPLIED POSITION" octavalidate="R,ALPHA_SPACES" > 
                                </div>
                                <div class="form-group">
                                <label for="experiences">PREVIOUS EXPERENCES:</label>
                                <input type= "text" id="x" class="form-control" name="x" placeholder="ENTER PREVIOUS EXPERENCES" octavalidate="R,ALPHA_SPACES" > 
                                </div>
                                <div class="form-group">
                                <label for="qualification">EDUCATION QUALIFICATION (CURRENT):</label>
                                <input type= "text" id="q" class="form-control" name="q" placeholder="ENTER EDUCATION QUALIFICATION" octavalidate="R,ALPHA_SPACES" > 
                                </div>
                                <div class="form-group">
                                <label for="skills">SKILLS:</label>
                                <input type= "text" id="s" class="form-control" name="s" placeholder="ENTER SKILLS" octavalidate="R,ALPHA_SPACES" > 
                                </div>
                                

                                <div class="form-group" >
                                            <label for="img" style="font-size : 15px">UPLOAD RESUME:</label>
                                             <input type="file" id="cv" name="cv" style="font-size : 15px">
                                            </div>

                                <!-- <div class="form-group">
                                            <label>SELECT OUTLET</label>
                                            <select name="o" id="o" class="form-control" octavalidate="R" >
												<option value selected ></option>
                                                <option value="kottyam">kottyam</option>
                                                <option value="kanjirappally">kanjirappally</option>
                                                <option value="pathanamthitta">pathanamthitta</option>
                                            </select>
                              </div> -->



                        <!-- </div>
                        
                    </div>
                </div>
                
               
                
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary"> -->
                        
                        
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