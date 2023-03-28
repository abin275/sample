<?php
 
    require_once "connection.php";
 

    $second_id = $_POST["second_id"];
 
    $result = mysqli_query($conn,"SELECT * FROM tbl_spec where second_id = $second_id");
?>
 
<option value="">Select Specification</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
    <option value="<?php echo $row["spec_id"];?>"><?php echo $row["specifications"];?></option>
<?php
}
?>