<?php
if($_POST)
{
    
define('DB_HOST','localhost');
define('DB_NAME','cab_booking');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());


    $id=$_POST['id'];
   
    mysqli_query($con,"delete from bill where bill_id='$id'");
    
}
?>
