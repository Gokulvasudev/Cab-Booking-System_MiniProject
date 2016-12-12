<?php
include "header.php";
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'cab_booking'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
 include 'table_style.html';

$result =mysql_query("SELECT * FROM feedback");
?>


<form><br><br><br>
            <div><center><table style="color: black" border="2">
                        <tr> <th>FEEDBACK_ID</th><th>NAME</th><th>EMAIL</th><th>PHONE</th><th>USER MESSAGE</th></tr>
        

<?php
while($row = mysql_fetch_array($result))
{
?>
 
                        
                        <tr><td><?php echo $row['feedback_id']?></td>
    <td><?php echo $row['fullname']?></td>
<td><?php echo $row['email']?></td>

<td><?php echo $row['phone']?></td>
<td><?php echo $row['usermsg']?></td>

<?php
}?>
    </table></form></body></html>
<?
mysqli_close($con);
?></div>
