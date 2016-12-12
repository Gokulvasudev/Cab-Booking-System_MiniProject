<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'cab_booking'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 


function Contact() { 
	$fullname = $_POST['name'];
	$email = $_POST['email']; 
	$phone=$_POST['phone'];
	$msg = $_POST['usermsg'];
	$query = "INSERT INTO feedback(fullname,email,phone,usermsg) VALUES ('$fullname','$email','$phone','$msg')"; 
	$data = mysql_query ($query)or die(mysql_error()); 

	if($data) 
	{ 
	echo "THANQ FOR YOUR FEEDBACK....YOU WILL BE REDIRECTED SHORTLY...."; 
	echo "<script>setTimeout(\"location.href = 'index.html';\",1500);</script>";
	}
	 } 
	
	
			if(isset($_POST['submit'])) 
			{ 
			Contact(); 
			} 
?>