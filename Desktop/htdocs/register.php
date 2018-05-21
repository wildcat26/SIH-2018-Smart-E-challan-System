<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Staff Recruitment Portal | Staff Recruitment Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body>
<?php include("menu.php"); ?>

    <!-- Header with Background Image -->
    <header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
           <!-- <h4 class="text-center text-black mt-4">
Staff Recruitment Portal<br>

Indian Institute of Technology Palakkad | भारतीय प्रौद्योगिकी संस्थान पालक्काड</h4>-->
          </div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <div class="row" style="padding:4px">
        <div class="col-sm-8">
		
		<div class="card  border-light mb-3" >
  <div class="card-header"><strong><h4>Register</h4></strong></div>
  <div class="card-body">
  <small class="text-muted">New user can register here. Existing user <a href="/">click here to login.</a></small>
  
  <form id="registerForm" method="post" >
              <div class="mb-3">
                <label for="firstName">Full Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" id="uemail" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
			  <div class="mb-3">
	<div class="form-group">
        <label class="col-xs-3 control-label">Password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="password" required/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Retype password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="confirmPassword" required />
        </div>
    </div>
           
            </div>
            
			
            <hr class="mb-1">
			
            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
          </form>
    <p class="card-text"><small class="text-muted">Once Registeration completes, Please check inbox/spam for verfication link.</small></p>
  </div>
</div>
		
		
        </div>
        
		<div class="card border-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Contact Us</div>
  <div class="card-body">
    <p class="card-text">
	<address>
				  
		<strong>Indian Institute of Technology Palakkad,</strong>
		<br>Ahalia Integrated Campus,
		<br>Kozhippara P. O,
		<br>Palakkad, Kerala
		<br>Pin: 678557
		<br>Phone: 04923 226 501/300
		<br>website: https://iitpkd.ac.in
          </address>
	</p>
  </div>
</div>
		
		<!--
		<div class="col-sm-4 border border-info" style="height:auto;" >
		


          <h2 class="mt-4">Contact Us</h2>
          
    
    </div>
	
	-->
      </div>
      <!-- /.row -->

      <div class="row">
	  <!--
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
			  
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card"><!-- 300x200 --><!--
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
-->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	


  </body>
</html>
