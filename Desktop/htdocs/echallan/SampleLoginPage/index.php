
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet"  
 href="css/style.css">
</head>
<?php
include("db_connect.php");
?>
<body style="background-color: #7f8c8d">
	<div id="main_wrapper">
		<center>
			<h2>OFFICER LOGIN</h2>
		<img src="C:\xampp\htdocs\SampleLoginPage\imgs\PNG.png" class="PNG"/>
		<form method="post" class="myform" action="index.php">
			<label><br><b>Username:</b></label>
			<input type="text" class="inputvalues" name="username" placeholder="Enter Username"/><br><br>
		    <label><b>Password:</b></label>
			<input type="password" class="inputvalues"  name="upassword" placeholder="Enter Password"/><br><br>
			<input type="submit" id="login_btn" value="Login"/><br>
		</form>  
	
<?php
print_r($_POST);
if(isset($_POST['Username'])){
	$username=$_POST['username'];
    $password=$_POST['upassword'];
    $query="select * from loginpage where username='$username' and password='$password'";

    $query_run=my_sqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
    {
    	// valid 
    	$_SESSION['username']=$username;
    	header('location:homepage.php');
    }
    else{
    	// invalid
    	echo'<script type="texxt/javascript"> alert("invalid credentials")</script>'; 
    }
}

?>
</center>
	</div>	
</body>
</html>
