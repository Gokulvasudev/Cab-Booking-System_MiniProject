<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'cab_booking'); 
define('DB_USER','root');
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 


function Book() { 
	$billid= $_POST['bill_id']; 
	$km= $_POST['km'];
	$query1="SELECT cartype FROM bill WHERE bill_id=$billid";
	 $result=mysql_query($query1);
	 $row=mysql_fetch_array($result);
	 $cabtype=$row['cartype'];
	 if($cabtype=='o')
	 	$rate=2*(15*$km);
	else
		$rate=2*(20*$km);
		
	$query = "UPDATE bill SET kilometer_consumed=$km,rate=$rate WHERE bill_id=$billid"; 
	$data = mysql_query ($query)or die(mysql_error()); 

	if($data) { echo "YOUR BILLING DETAILS IS INSERTED...YOU WILL BE REDIRECTED SHORTLY......"; 
	echo "<script>setTimeout(\"location.href = 'driver_home.php';\",1500);</script>";
	} } 
	
	
			if(isset($_POST['submit'])) 
			{ 
			Book(); 
			}
?>