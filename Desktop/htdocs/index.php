<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Challan - Chhattisgarh government</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

  </head>

  <body>

   
   <?php

   include("menu.php");
   ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8">
		
		
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		
		<!--
		
		
          <img class="img-fluid rounded" src="http://placehold.it/900x400" alt="">
		  -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
		
		
		
		<div class="card" >
  <div class="panel-heading">
  </div>
  <div class="card-body">
  <h5 class="card-title">Admin Login</h5>
   <?php
   if(isset($_GET["message"])){
   ?>
   
   <div class="alert alert-danger" role="alert">
			  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			  <span class="sr-only">Error:</span>
			<?php
		  echo $_GET["message"];
		  ?>
			</div>
			
			<?php
   }
   ?>
		  
         <!-- This form read user creadentails and send to authenticate page to validate -->
<form method="POST" action="/authenticate.php">
  <div class="form-group">
    <label for="email">Email-id:</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-default">Login</button>
</form> 
   
   
    
   
  </div>
</div>
		
		
		
		
		
		
		
		
		
		
		
          <h1></h1>
		  

        
        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->

      <!-- Call to Action Well -->
      <div class="card text-white bg-secondary my-3 text-center">
        <div class="card-body">
          <p class="text-white m-0"> Laws are for disciplined safe journey ,Penalty is to prevent as Life Is Precious. (24x7 Info-Helpline) Chhattisgarh TP call Toll Free No: 1800 123 4567 Email police@cgstate.gov.in</p>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">ABOUT US</h2>
              <p class="card-text">This palette is designed for containing the general info regarding the traffic system of government of Chhattisgarh and the required helpline details. </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">More Info</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">PAYEMENT OPTIONS</h2>
              <p class="card-text">Add all the payement option details here for user and customer convinience.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">More Info</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">CHALLAN STATISTICS</h2>
              <p class="card-text">Statistics for the challan article and payement cost.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">More Info</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->

      </div>
      <!-- /.row -->

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
