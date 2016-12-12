<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'cab_booking'); 
define('DB_USER','root');
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
include 'table_style.html'; 
	$billid= $_POST['bill_id']; 
	$result=mysql_query("SELECT * FROM bill WHERE bill_id=$billid");
	 ?>


<form><br><br><br>
            <div><center><table style="color: black" border="2">      

<?php
$row = mysql_fetch_array($result);
?>
 
                        
<tr><td>BILL ID:<?php echo $row['bill_id']?></td></tr>
<tr><td>PICKUP ADDRESS:<?php echo $row['pickupaddress']?></td></tr>
<tr><td>DROPDOWN ADDRESS:<?php echo $row['dropdownaddress']?></td></tr>

<tr><td>DATE:<?php echo $row['date']?></td></tr>
<tr><td>TIME:<?php echo $row['time']?></td></tr>

<tr><td>CAB NO:<?php echo $row['cab_no']?></td></tr>
<tr><td>CAB TYPE:<?php echo $row['cartype']?></td></tr>
<tr><td>DRIVER_ID:<?php echo $row['driver_id']?></td></tr>
<tr><td>KILOMETER CONSUMED:<?php echo $row['kilometer_consumed']?></td></tr>
<tr><td>RATE:<?php echo $row['rate']?></td></tr>
    </table></form></body></html>
<?php
	echo "<script>setTimeout(\"location.href = 'index.html';\",10000);</script>";

?></div>