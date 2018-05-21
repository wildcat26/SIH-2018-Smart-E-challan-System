<?php

require("db_connect.php");
require("class_lib.php");
include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us - Chhattisgarh government</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
  </head>

  <body>

<?php

   include("menu.php");
   ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Contact Us</h1>
        <p class="lead">For any queries and complaints kindlycontact with the given details</p>
		
        
      </header>

	  
	  
	  
<div class="container">
<div class="row">
<div class="col-sm-8">
<div class="col-md-8 order-md-1">
<hr class="mb-1">


<?php


if(isset($_POST['firstName'])){
	
	echo "We have Some Data";
	
	
	
	$contactusObj = new ContactUS();
	$contactusObj->setUname($_POST['firstName']);
	$contactusObj->setEmail($_POST['uemail']);
	$contactusObj->setTypeofquery($_POST['query']);
	$contactusObj->setMessagetext($_POST['umessage']);
	if(saveMessages($contactusObj,$DBcon)=="Success"){
		?>
		<div class="alert alert-success">message successfully stored</div>
		
		<?php
	
	}else{
		?>
	<div class="alert alert-danger">error in storing the message request</div>
		<?php
	
	}
	
}else{
	//echo "Simple open";
}

?>
<form id="registerForm" method="post" action="/contactus.php">
<div class="mb-3">
<label for="firstName">Name</label>
<input class="form-control" id="firstName" name="firstName" placeholder="Your name" value="" required>
<div class="invalid-feedback">
Valid first name is required.
</div>
</div>
<div class="mb-3">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" id="uemail" name="uemail" placeholder="you@example.com" required>

</div>

<div class="mb-3">
<label for="query">Type of Query</label>
<select class="form-control" name="query" style="width:100%">
	  
        <option value="Suggestion">Suggestion</option>
        <option value="Terms & Condition">Terms & Condition</option>
        <option value="Problems">Problems</option>
      </select>

</div>
<div class="mb-3">
<div class="form-group">
<label class="col-xs-3 control-label">Type your message here</label>
<div class="col-xs-5">
<textarea class="form-control textarea-contact" rows="5" id="comment" name="umessage" placeholder="Type Your Message/Feedback here..." required=""></textarea>
</div>
</div>
</div>
<hr class="mb-1">

<button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
</form>
<br>
</div>
</div>
<div class="col-sm-4 ">
<h3 class="mt-4">Contact Details</h3>
<address>
<strong>E-challan, Government of Chhattisgarh</strong>
<br>Office Address,
<br>Place,
<br>Distict, State
<br>Pin: 123456
<br>Phone: 04923 226 501/300
<br>website: https://echallan.cha.ac.in
</address>
</div>
</div>
<div class="row">
</div>
</div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Government of Chhattisgarh</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
