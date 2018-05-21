<?php
require("db_connect.php");
include("class_lib.php");
include("functions.php");

//print_r($_POST);

if(isset($_POST['email'])){
	$useremail=$_POST['email'];
    $password=$_POST['pwd'];
	
	
	if(loginCheck($useremail, $password,$DBcon)==true){
		$_SESSION['useremail']=$useremail;
		//echo 'successfully logged in';
    	header('location:/profile/pages/dashboard.php');
	}else{
		header('location:index.php?message=Invalid Login');
		
	}

}


?>