<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Staff Recruitment Portal | Staff Recruitment Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	
    <link href="../../css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">IIT Palakkad | Staff Portal</a>
            </div>
            <!-- /.navbar-header -->

			<?php include("pmenu.php"); ?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <?php include("sidemenu.php"); ?>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-14">
                        <h1 class="page-header">Basic Profile</h1>
						
						<div class="col-md-10 ">
						<small  class="form-text text-muted">Information entered here is to create your application form. Please ensure that the options provided here are correct. You can edit this form until the closure date. Items with a * symbol are compulsory.</small>
        
          <form class="needs-validation" action="/profile/pages/qualification.php" method="post">
            <br/>
			<div class="mb-3">
              <label for="email">1) Name in Full (As in 10th Std / SSLC Certificate ) *</label>
              <input type="text" class="form-control" id="username" required>
              <div class="invalid-feedback"><small  class="form-text text-muted">
               Enter your full name here.</small>
              </div>
            </div>

			 <div class="mb-3">
              <label for="address">2) Date of Birth *</label>
			 				<input id="datepicker" width="270" size="16" type="text" value="" readonly />
              <div class="invalid-feedback"><small  class="form-text text-muted">
                Please enter your Date of Birth.</small>
              </div>
            </div>
			
			
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="country">3) Gender *</label>
                <select class="form-control" id="country" >
                  <option value="">Male</option>
                  <option>Female</option>
                  <option>Other</option>
                </select>
                <div class="invalid-feedback"><small  class="form-text text-muted">
                 Select the gender.
                </div></small>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">4) Citizenship Status *</label>
                <select class="form-control" id="state" >
                  <option value="">By Birth</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Select the category of your nationality.
                </div></small>
              </div>
              <div class="col-md-5 mb-3">
                <label for="zip">5) Category of Reservation *</label>
                <select class="form-control" id="state" >
				
                  <option>Unreserved</option>
                  <option value="">OBC</option>
                </select>
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Category of Reservation.
                </div></small>
              </div>
            </div>
			
			<div ><label for="credit">6) Are you serving employee (Regular) of IIT Palakkad *</label>
              <div class="custom-control custom-radio">
                <input id="credit" name="empiit" type="radio" checked="checked" class="custom-control-input"  required>
                <label class="custom-control-label" for="credit">Yes</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="empiit" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">No</label>
              </div>
             <small  class="form-text text-muted">.</small>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">7) I am Ex. Serviceman</label>
			  
            </div>
			 <small  class="form-text text-muted">.</small>
			
			<div ><label for="credit">8) Are you working in Central/State /Semi-Govt./PSU/Autonomous bodies of the Governement *</label>
              <div class="custom-control custom-radio">
                <input id="credit" name="empgovt" type="radio" checked="checked" class="custom-control-input"  required>
                <label class="custom-control-label" for="credit">Yes</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="empgovt" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">No</label>
              </div>
             <small  class="form-text text-muted">If yes, The application should be forwarded through the current employer or NOC from the current employer is to be enclosed.</small>
            </div>
			
			
			
			<div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">9) Phone number</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" >
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Phone number is required.</small>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">10) Mobile number *</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" >
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Mobile number is required.</small>
                </div>
              </div>
            </div>
			
			
			
            <div class="mb-3">
              
				<label for="email">11) Address for Communication *</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			 
              <div class="invalid-feedback"><small  class="form-text text-muted">
                Address for communication. Give complete details including PIN code and Country.</small>
              </div>
            </div>

               <div class="mb-3">
              <label for="email">12) Alternate email *</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback"><small  class="form-text text-muted">
                Alternate email address to reach you.</small>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="email">13) Name of Father/Husband *</label>
              <input type="text" class="form-control" id="userfhname" required>
              <div class="invalid-feedback"><small  class="form-text text-muted">
               Enter Father/Husband Name.</small>
              </div>
            </div>
			
			
			 <div class="mb-3">
              
				<label for="email">14) Permanent Home Address</label>
				<textarea class="form-control" id="phaddress" rows="3"></textarea>
			 
              <div class="invalid-feedback"><small  class="form-text text-muted">
                Permanet Address. Give complete details including PIN code and Country.</small>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="address2">15) Phone number </label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
			   <div class="invalid-feedback"><small  class="form-text text-muted">
               Permanent Home phone number complete with ISD/STD dialing code.</small>
              </div>
            </div>

			<div class="mb-3">
              <label for="address2">16) Time required to join (in Months) </label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
			   <div class="invalid-feedback"><small  class="form-text text-muted">
               Time required to join if offfered the post.</small>
              </div>
            </div>

			
			
			
            <div class="mb-3">
              
				<label for="email">17) Any other relevant information if any</label>
				<textarea class="form-control" id="phaddress" rows="3"></textarea>
			 
              <div class="invalid-feedback"><small  class="form-text text-muted">
               Other inofrmation cant exceed maximun of 250 character.</small>
              </div>
            </div>
			
			
			<div class="mb-3">
              <label for="address2">18) Place</label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
			   <div class="invalid-feedback"><small  class="form-text text-muted">
               Enter your Place.</small>
              </div>
            </div>

			
			<!--

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
			   <div class="invalid-feedback"><small  class="form-text text-muted">
               Other inofrmation cant exceed maximun of 250 character.</small>
              </div>
            </div>

			
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
			-->
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Save and Continue</button>
          </form>
        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

	  <script src="../../js/gijgo.min.js" type="text/javascript"></script>

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
    </script>  
</body>

</html>
