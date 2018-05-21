<?php

require("../../db_connect.php");
require("../../class_lib.php");
include("../../functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add User - E Challan</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
print_r($_POST);

if(isset($_POST['uname'])){
	
	echo "We have Some Data";
	
	$ao = new Officer();
	
	$ofname = $ao->setOfname($_POST['uname']);
	$ofemail= $ao->setOfemail($_POST['uemail']);
	$ofpass=$ao->setOfpass($_POST['pwd']);
    $ofmobile=$ao->setOfmobile($_POST['contactnumber']);
	$cofpass=$ao->setCofpass($_POST['cpwd']);
	
	$returnValue = addOfficer($ao,$DBcon);
	if($returnValue =="pass"){
		?>
		<div class="alert alert-success">officer added successfully</div>
		
		<?php
	
	}else{
		?>
	<div class="alert alert-danger"><?php echo $returnValue; ?></div>
		<?php
	
	}
	
} else{
	echo "Simple open";	
}
?>

    <div id="wrapper">

        <?php
		include("pmenu.php");
		?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                   <div class="row">
<div class="col-lg-14">
<h1 class="page-header">Add User</h1>
<div class="col-md-10 ">
<small class="form-text text-muted">You can add new officer details here</small>
<form class="needs-validation" method="POST" action="adduser.php">
<br/>
<div class="mb-3">
<label for="email">User Name</label>
<input class="form-control" id="username" name="uname" required>
<div class="invalid-feedback"><small class="form-text text-muted">
Enter the username</small>
</div>
</div>
<div class="mb-3">
<label for="pwd">Password</label>
<input type="password" class="form-control" name="pwd" id="pwd">
<div class="invalid-feedback"><small class="form-text text-muted">
Set an account password</small>
</div>
</div>
<div class="mb-3">
<label for="pwd">Confirm Password</label>
<input type="password" class="form-control" name="cpwd" id="cpwd">
<div class="invalid-feedback"><small class="form-text text-muted">
Confirm your password</small>
</div>
</div>
<div class="mb-3">
<label for="email">Email-Id</label>
<input type="email" class="form-control" name="uemail" id="email" required>
<div class="invalid-feedback"><small class="form-text text-muted">
Enter a valid email-Id belonging to the user</small>
</div>
</div><div class="mb-3">
<label for="contact">Contact number</label>
<input class="form-control" name="contactnumber" id="contact" required>
<div class="invalid-feedback"><small class="form-text text-muted">
Enter phone number</small>
</div>
</div>
<div class="mb-3">
<label for="rank">Officer rank</label>
<select class="form-control" id="rank" name="role" style="width:100%">
	  
        <option value="Admin">Admin</option>
        <option value="Manager">Manager</option>
        <option value="Clerk">Clerk</option>
      </select>

<div class="invalid-feedback"><small class="form-text text-muted">
Enter the post of the officer</small>
</div>
</div>
<hr class="mb-1">
<button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
</form>
</div>
</div>
</div>
<h2 class="page-header">Qualifications</h2>
<div class="table-responsive table-bordered">
<table class="table">
<thead>
<tr>
<th>Examination Passed</th>
<th>Discipline</th>
<th>University/Institution</th>
<th>Marks/CGPA</th>
<th>Class/Division</th>
<th>Year of Passing</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
<td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/metisMenu/metisMenu.min.js"></script>
<script src="../dist/js/sb-admin-2.js"></script>
<script src="../../js/gijgo.min.js"></script>
<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
    </script>
</body>
</html>
