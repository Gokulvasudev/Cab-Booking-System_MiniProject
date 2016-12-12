<?php
include "header1.php";
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'cab_booking'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
 include 'table_style.html';
 session_start();
 $pass=$_SESSION['pass'];
$result1=mysql_query("SELECT driver_id FROM driver_details WHERE licence_number='$pass'");
$row1=mysql_fetch_array($result1);
$id=$row1['driver_id'];
$result =mysql_query("SELECT * FROM booking WHERE driver_id=$id");
?>


<form><br><br><br>
            <div><center><table style="color: black" border="2">
                        <tr> <th>BOOKING_ID</th><th>PICKUP ADDRESS</th><th>DROPDOWN ADDRESS</th><th>DATE</th><th>TIME</th><th>CAB TYPE</th></tr>
        

<?php
while($row = mysql_fetch_array($result))
{
?>
 
                        
                        <tr><td><?php echo $row['booking_id']?></td>
    <td><?php echo $row['pickupaddress']?></td>
<td><?php echo $row['dropdownaddress']?></td>

<td><?php echo $row['date']?></td>
<td><?php echo $row['time']?></td>

<td><?php echo $row['cartype']?></td></tr>

<?php
}?>
    </table></form></body></html>
<?
mysqli_close($con);
exit();
?></div>
