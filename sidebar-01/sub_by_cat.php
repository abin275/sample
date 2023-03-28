<?php
 
    require_once "connection.php";
 
    $category_id = $_POST["category_id"];
 
    $result = mysqli_query($conn,"SELECT * FROM tbl_second where category_id = $category_id");
?>
 
<option value="">Select subcategory</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
    <option value="<?php echo $row["second_id"];?>"><?php echo $row["second_name"];?></option>
<?php
}
?>
