<?php

require("db_connect.php");
require("class_lib.php");
include("functions.php");

//print_r($_POST);
if((isset($_POST["payid"]))&&(strlen(trim($_POST["payid"]))>0)){
	$violation = searchViolationById($DBcon,$_POST["payid"]);
	challanpaid($DBcon,$violation[0]->getChallan_ID());
	vailationpaid($DBcon,$_POST["payid"]);
	?>
	<div class='form-row'>
                        <div class='col-md-12 form-group'>
						<center>
						<a class='form-control btn btn-default submit-button' href="echallan.php"> Payment is Success. Go back to E-Challan page</a>
                           </center>
                        </div>
                    </div>
					<?php
					die();
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Challan</title>

    <!-- Bootstrap core CSS -->
<link href="css/old/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/old/bootstrap.min.js"></script>
<script src="js/old/jquery-1.11.1.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	
  </head>

  <body>

    
	
	<?php
	
		//include("menu.php");
		
		//if(isset($_GET[])
	?>
	
    <!-- Page Content -->
    <div class="container center"></br></br></br>
	
	
	
	
	<?php
print_r($_POST);
?>


        <div class='row'>
            <div class='col-md-4'></div>
            <div class='col-md-4'>
			<h2>          Payment Gateway</h2>
               
                <form accept-charset="UTF-8" action="receipt.php" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="?" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
                    <div class='form-row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Name on Card</label>
                            <input class='form-control' size='4' type='text'>
                            <input class='form-control' size='4' type='hidden' name="payid" value="<?php 
							if(!(isset($_POST["payid"])))
								echo $_POST['off_id']; ?>">
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-xs-12 form-group card required'>
                            <label class='control-label'>Card Number</label>
                            <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-xs-4 form-group cvc required'>
                            <label class='control-label'>CVC</label>
                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'>Expiration</label>
                            <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'> </label>
                            <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-md-12'>
						
						<button class="btn btn-primary btn-lg btn-block" type="submit">Pay » 
						<?php
							if(!(isset($_POST["payid"])))
						echo $_POST['product_price']; ?></button>
                           
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-md-12 form-group'>
						<a class='form-control btn btn-default submit-button' href="echallan.php"> Go back to E-Challan page</a>
                           
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>
                                Please correct the errors and try again.
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class='col-md-4'></div>
        </div>
	
    	
    </div>
    <!-- /.container -->


  </body>

</html>
