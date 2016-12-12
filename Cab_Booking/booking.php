<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'cab_booking'); 
define('DB_USER','root');
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 


function Booking() { 
	$pickupadd= $_POST['pickupadd']; 
	$dropdownadd= $_POST['dropdownadd']; 
	$cartype=$_POST['cabtype'];; 
	$date = $_POST['date'];
    $date=date("Y-m-d",strtotime($date));
		// 24-hour time to 12-hour time 
$time= $_POST['time'];

// 12-hour time to 24-hour time 
$time24= date("H:i", strtotime("$time"));
session_start();
$pass=$_SESSION['pass'];	
$query = "SELECT * FROM car_details
          WHERE cab_type='$cartype'          
          ORDER BY RAND() LIMIT 1";
$result = mysql_query($query);
if($result)
{
    while($row = mysql_fetch_array($result))
    {
        $cabno = $row['cab_no'];

    }
}


$query = "SELECT * FROM driver_details          
          ORDER BY RAND() LIMIT 1";
$result = mysql_query($query);
if($result)
{
    while($row = mysql_fetch_array($result))
    {
        $driverid = $row['driver_id'];

    }
}

$result2=mysql_query("INSERT INTO booking (pickupaddress,dropdownaddress,date,time,cartype,cab_no,driver_id) VALUES('$pickupadd','$dropdownadd','$date','$_POST[time]','$cartype','$cabno','$driverid')");

$result3=mysql_query("INSERT INTO bill (pickupaddress,dropdownaddress,date,time,cartype,cab_no,driver_id) VALUES('$pickupadd','$dropdownadd','$date','$_POST[time]','$cartype','$cabno','$driverid')");

$data=mysql_query("SELECT * FROM bill WHERE date='$date' AND time='$time24'");
$rw=mysql_fetch_array($data);
$billid=$rw['bill_id'];
$_SESSION['billid']=$billid; 


	if($result2) { 
	echo "YOUR BOOKING IS COMPLETED...YOU WILL BE REDIRECTED SHORTLY......"; 
	echo "<script>setTimeout(\"location.href = 'bill.php';\",1500);</script>";
	}
	exit();
	 } 
	
	
			if(isset($_POST['submit'])) 
			{ 
			Booking(); 
			}
?>