<html><head>
<script type="text/javascript" src="JStest\jquery.min.js"></script>
<script type="text/javascript"><?php include 'JStest/delete_user.js'?></script>
    </head>



<?php
include "header2.php";
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'cab_booking'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
 include 'table_style.html';
session_start();
$pass=$_SESSION['pass'];
$result1=mysql_query("SELECT * FROM customer WHERE password='$pass'");
$row1=mysql_fetch_array($result1);
$cusid=$row1['customer_id'];
$result =mysql_query("SELECT * FROM bill WHERE customer_id='$cusid'");
?>


<form><br><br><br>
            <div><center><table style="color: black" border="2">
                        <tr> <th>BILL_ID</th><th>PICKUP ADDRESS</th><th>DROPDOWN ADDRESS</th><th>DATE</th><th>TIME</th><th>CAB TYPE</th><th>CAB NO</th><th>KM</th><th>RATE</th><th>DELETE</th></tr>
        

<?php
while($row = mysql_fetch_array($result))
{
?>
 
                        
                        <tr><td><?php echo $row['bill_id']?></td>
    <td><?php echo $row['pickupaddress']?></td>
<td><?php echo $row['dropdownaddress']?></td>

<td><?php echo $row['date']?></td>
<td><?php echo $row['time']?></td>

<td><?php echo $row['cartype']?></td>

<td><?php echo $row['cab_no']?></td>
<td><?php echo $row['kilometer_consumed']?></td>

<td><?php echo $row['rate']?></td>
<td><center><input type="image" src="images/delete.png" width="20" height="20" name="delete" value="DELETE" onClick="delete_user(<?php echo $row['bill_id']?>)"></center></td>
</tr>

<?php
}?>
    </table></form></body></html>
<?
mysqli_close($con);
?></div>






 