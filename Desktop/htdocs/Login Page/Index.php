<!DOCTYPE html>
<html>
<head>
<title>MY First Web Page</title>
<link rel="stylesheet" type="text/css" 
 href="style.css"></link>
 <link rel="stylesheet" type="text/css"
  href="">
</head>
<body>
	<div class="container">
		<img src="PNG.png" />
		<form method="post">
			<div class="font-input">
			<input type="text" name="username" placeholder="Enter Username">
		</div>
			<input type="password" name="password" placeholder="Enter Password">
		</div>
		<div class="font-input">
			<input type="submit" name="submit" value="Login" class="btn-login"><br>
			<a href="www.google.com"><p>forget password?</p></a>
		</div>
		</form>   
</body>
</html>

<?php

mysql_connect("localhost", "root", "");
mysql_select_db('login');

if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$psd = $_POST['password'];

	$query = "insert into loginpage (USERNAME,PASSWORD) values ('$user', '$psd')";
    if(mysql_query($query)){
    	
    }

}