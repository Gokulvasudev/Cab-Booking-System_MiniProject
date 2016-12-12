<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'cab_booking'); 
define('DB_USER','root');
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 


function driverdetails() { 
	$name= $_POST['name']; 
	$address= $_POST['address']; 
	$phone= $_POST['phone']; 
	$exp=$_POST['exp'];
	$licno=$_POST['licno'];
	$status="Driver";
	$query = "INSERT INTO  driver_details(name,address,phone,licence_number,experiance) VALUES ('$name','$address','$phone','$licno','$exp')"; 
	$query1="INSERT INTO customer(username,password,admin_status) VALUES ('$name','$licno','$status')";
	$data = mysql_query ($query)or die(mysql_error()); 
	$data1=mysql_query($query1) or die(mysql_error());

	if($data) { 
	echo "REGISTRATION COMPLETED..."; 
	echo "<script>setTimeout(\"location.href = 'admin_booking.php';\",1500);</script>";
	} } 

			if(isset($_POST['submit'])) 
			{ 
			driverdetails(); 
			}
?>