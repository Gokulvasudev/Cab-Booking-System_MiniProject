<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'cab_booking'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 


function NewUser() { 
	$fullname = $_POST['name']; 
	$userName = $_POST['username']; 
	$email = $_POST['email']; 
	$password = $_POST['password'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$status=$_POST['admin/user'];
	$query = "INSERT INTO  customer(fullname,email,gender,phone,username,password,admin_status) VALUES ('$fullname','$email','$gender','$phone','$userName','$password','$status')"; 
	$data = mysql_query ($query)or die(mysql_error()); 

	if($data) 
	{ 
	echo "YOUR REGISTRATION IS COMPLETED...YOU WILL BE REDIRECTED SHORTLY......."; 
echo "<script>setTimeout(\"location.href = 'admin_booking.php';\",1500);</script>";
	}
	 } 
	
	
function SignUp() { 
	if(!empty($_POST['username'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
			{ 
				$query = mysql_query("SELECT * FROM customer WHERE userName = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error()); 
				if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
				{ 
					newuser(); 
				} 
				else 
				{ 
					echo "SORRY...YOU ARE ALREADY REGISTERED USER...PLEASE LOGIN..."; 
					echo "<script>setTimeout(\"location.href = 'login.html';\",1500);</script>";
				} 
			} 
			}
			
			if(isset($_POST['submit'])) 
			{ 
			SignUp(); 
			} 
?>