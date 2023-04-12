
<?php
include('connection.php');

if(isset($_POST['submit'])){
    echo $title=$_POST['title'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $o=$_POST['o'];
    $type_of_bike=$_POST['t'];
    $bike_name=$_POST['bname'];
    $bike_number=$_POST['number'];
    $bike_cc=$_POST['cc'];
    $type_of_service=$_POST['services'];
    $check_in=$_POST['cin'];
    echo $time=$_POST['time'];
    echo $lat=$_POST['latitude'];
    echo $lon=$_POST['longitude'];
    // $rc=$_POST['rc'];
 


 
    $rc=$_FILES["rc"]["name"];
    $temp = explode(".", $_FILES["rc"]["name"]);
    $newfilename = round(microtime(true)) . '.' .end($temp);
    move_uploaded_file($_FILES["rc"]['tmp_name'],"uploads/" .$newfilename);                  
    $loc="uploads/".$newfilename;



    //checking empty condition
    if($title=='' or $name=='' or 
    $email=='' or $phone=='' or $o=='' or $type_of_bike=='' or 
    $bike_name==''or $bike_number=='' or $bike_cc=='' or $type_of_service=='' or $check_in=='' or $time==''){
        echo "<script>alert('Please fill all the fields.')</script>";
        exit();
    }else{
        
    }

    //insert query
    $insert_products="INSERT INTO `booking`(`title`, 
    `name`, `email`, `phone`, `outlet`, `type_of_bike`,
    `bike_name`, `bike_number`, `bike_cc`, `type_of_service`,
    `check_in`, `rc`,`longitude`,`latitude`, `status`) VALUES ('$title','$name',
    '$email','$phone','$o','$type_of_bike',
    '$bike_name','$bike_number','$bike_cc',
    '$type_of_service','$check_in', '$loc','$lon','$lat', 0)";

    $result_query=mysqli_query($conn,$insert_products);
    $date = date("Y-m-d");
    $sq = "SELECT * from tbl_slots s, tbloutlet t where s.outlet_id = t.outlet_id and t.address='$o' and s.date = '$date' and s.slot_status = 1";
    $result = $conn-> query($sq);
    if ($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
      $slot = $row['slot_id'];

    $sql = mysqli_query($conn, "UPDATE tbl_slots SET slot_num=slot_num-1 where slot_id = $slot");
    $s = "SELECT * from tbl_slots s, tbloutlet t where s.outlet_id = t.outlet_id and t.address='$o' and s.date = '$date' and s.slot_status = 1";
    $res = $conn-> query($s);
    if ($res-> num_rows > 0){
    while($row1 = $res-> fetch_assoc()){
      $slot_num = $row1['slot_num'];
      if($slot_num <= 0)
      {
        $sql = mysqli_query($conn, "UPDATE tbl_slots SET slot_status=0 where slot_id = $slot");
      }
        
    }
   
}
    }
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

    
<body onload = "getLocation();">
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
                <?php
                $outlet = $_GET['outlet'];
                ?>
                <div class="col-md-9 col-sm-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
                            
						<form id='userreg' action="" name="form" method="post" enctype="multipart/form-data">
                        
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
							   
                                <div class="form-group">
                                <label for="o">OUTLET:</label>
                                <input type="text" id="o" class="form-control" name="o" value = "<?php echo $outlet;?>" readonly> 
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
                                

                                        <!-- <input type="text" class="form-control form-control-user" name="location" placeholder="location"> -->
                    <input type="hidden" id="ws" name="ws" value="#">
                    <input type="hidden" id="cs" name="cs" value="#">
                    <div class="form-group">
                    <input type="hidden" class="user" id="" name="latitude"
                    placeholder="latitude"/>
                    </div>
                    <div class="form-group">
                    <input type="hidden" class="user" id="" name="longitude"
                    placeholder="longitude"/>
                    </div>
                    <!-- <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="" name="land"
                    placeholder="Landmark" required/>
                    </div> -->
                    <!-- <input type="text" class="form-control form-control-user" name="land" placeholder="Landmark"> -->


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
   

    <script type="text/javascript">
        function getLocation(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition(),showError());
            }
        }
        function showPosition(position){
            document.querySelector('.user input[name = "latitude"]').value = position.coords.latitude; 
            document.querySelector('.user input[name = "longitude"]').value = position.coords.longitude; 
        }
        function showError(error){
            switch(error.code){
                case error.PERMISSION_DENIED:
                alert("Allow Geolocation");
                location.reload();
                break;
            }
        }
    </script>

    
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