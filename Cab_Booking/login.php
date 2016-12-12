<?php
if(isset($_POST['submit']))
{


define('DB_HOST', 'localhost'); 
define('DB_NAME', 'cab_booking'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


	session_start();
 	$user=$_POST['username']; 
    $pass=$_POST['password']; 
    $query = "SELECT * FROM customer WHERE username='$user' and  password='$pass'";
    $res = mysql_query($query);
    $rows = mysql_num_rows($res);
    if ($rows==1) 
    {
        $_SESSION['user'] = $_POST['username'];
		$_SESSION['pass']=$_POST['password'];
		$rw=mysql_fetch_array($res);
		if($rw['admin_status']=="Admin")
        	header("Location: admin_booking.php");
		else if($rw['admin_status']=="User")
			header("location:home.php");
		else
			header("location:driver_home.php");
    }
    else 
    {
        echo "user name and password not found...you will be redirected to homepage shortly....";
		echo "<script>setTimeout(\"location.href = 'index.html';\",1500);</script>";
        // TODO - replace message with redirection to login page
        //  header("Location: securedpage.php");
    }
}
?>