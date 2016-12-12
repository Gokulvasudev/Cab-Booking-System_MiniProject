<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'cab_booking'); 
define('DB_USER','root');
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 


function cardetails() { 
	$name= $_POST['name']; 
	$address= $_POST['address']; 
	$phone= $_POST['phone']; 
	$model=$_POST['model'];
	$regno=$_POST['regno'];
	$manu=$_POST['Car Manufacturer'];
	if($manu=="maruti"||$manu=="toyota"||$manu=="honda"||$manu=="tata")
		$type='o';
	else
		$type='l';
	$query = "INSERT INTO  car_details(owner,address,phone,model,regno,manufacturer,cab_type) VALUES ('$name','$address','$phone','$model','$regno','$manu','$type')"; 
	$data = mysql_query ($query)or die(mysql_error()); 

	if($data) { 
	echo "YOUR REGISTRATION IS COMPLETED..."; 
	echo "<script>setTimeout(\"location.href = 'admin_booking.php';\",1500);</script>";
	} } 
	
	
function validate() { 
	if(empty($_POST['pickupadd'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
			{ 
				echo "plz provide pickup address";
			}
			else
				Booking();
				}
			if(isset($_POST['submit'])) 
			{ 
			cardetails(); 
			}
?>