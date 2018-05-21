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

    <title>E-Challan</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	
  </head>

  <body>

    
	
	<?php
	
		include("menu.php");
		$disputestatus="";
		//if(isset($_GET[])
	?>
	
    <!-- Page Content -->
    <div class="container center"></br></br></br>




	<div class="row">
  <?php
  
 //print_r($_GET); 
 $formsubmit=false;
  $invalidSearch=true;
  
  if((isset($_GET["dviolationid"]))&&(isset($_GET["action"]))){
	  $disputestatus = savedispute($DBcon,$_GET["dviolationid"],$_GET["vdesc"]);
	  echo $disputestatus;
  }
 else if(isset($_GET["violationid"])){
	echo ".";
	$formsubmit=true;
	$ofid = $_GET["violationid"];
	$veid = "";//$_GET["vehicleid"];
	$offences=getOffcenceByOfidVeid( $DBcon, $ofid, $veid);
	echo  count($offences);
     if(count($offences)>0)
         $invalidSearch=false;
     else
         $invalidSearch=true;

 }else{
	$formsubmit=false;
 }

  ?>

  
        <div class="center-block" style="width:100%" >
		 <h1 class="mt-5"><center>E-Challan Payment</center></h1>
		  <div class="col-lg-10 col-lg-offset-3 text-center" style="width:100%">
              <center>Please enter Violation ID, which you received via sms or email.</center>
	  
		</div>
		
<?php
        if($disputestatus=="Success"){
        ?>
        <div class="alert alert-success">Record added successfully</div>

        <?php

        }else if(strlen($disputestatus)>4){
            ?>
            <div class="alert alert-danger"><?php echo $disputestatus; ?></div>
            <?php

        }
        ?>
	<form class="needs-validation" method="GET" action="echallan.php">
		<!--<form class="needs-validation" method="GET" action="payment/pay.php">-->
<br/>
<div class="mb-3">
<label for="email">Violation ID*</label>
<input class="form-control" id="violationid" name="violationid"value="<?php if($formsubmit==true) echo $ofid; ?>"  required>
<div class="invalid-feedback"><small class="form-text text-muted">
Enter the Violation ID</small>
</div>
</div>
<!--
<div class="mb-3">
<label for="email">Vehicle Number *</label>
<input class="form-control" id="vehicleid" name="vehicleid" value="<?php if($formsubmit==true) echo $veid; ?>" required>
<div class="invalid-feedback"><small class="form-text text-muted">
Enter Vehicle Number</small>
</div>
</div>
-->



<button class="btn btn-primary btn-lg btn-block" type="submit">Search Violation Tickets</button>
</form>

		</div>
    </div>
	<br/>
        <?php
        if($invalidSearch!=true) {
            ?>



            <h2>
                <small>List of Tickets</small>
            </h2>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Violation Type</th>
                    <th scope="col">Place</th>
                    <th scope="col">Description</th>
                    <th scope="col">View</th>
                    <th scope="col">Pay</th>
                    <th scope="col">Dispute?</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $offNumber=1;
                foreach ($offences as $offence) {
                   // $offence = new Offence();
                    ?>
                    <tr>
					
					<form  method="POST" accept-charset="utf-8" action="receipt.php">
					<!--
					<form  method="POST" accept-charset="utf-8" action="payment/pay.php">
					-->
                            <input type="hidden" name="off_id" value="<?php echo $offence->getOffense_ID(); ?>">
                            <input type="hidden" name="product_name" value="<?php echo $offence->getOffense_Type(); ?>">
                            <input type="hidden" name="product_price" value="<?php echo $offence->getChallan_amount(); ?>">
                            <input type="hidden" name="name" value="<?php echo $offence->getOwner_name(); ?>">
                            <input type="hidden" name="phone" value="<?php echo $offence->getContact_phone(); ?>">
                            <input type="hidden" name="email" value="<?php echo $offence->getContact_email(); ?>">
							 
                            <th scope="row"><?php echo $offNumber; ?></th>
                        <td><?php echo $offence->getOwner_name(); ?></td>
                        <td><?php echo $offence->getOffense_Date(); ?></td>
                        <td><?php echo $offence->getOffense_Status(); ?></td>
                        <td><?php echo $offence->getChallan_amount(); ?></td>
                        <td><?php echo $offence->getOffense_Type(); ?></td>
                        <td><?php echo $offence->getOffense_Place(); ?></td>
                        <td><?php echo $offence->getOffence_desc(); ?></td>
                        <td><a target='_blank' href="/profile/pages/<?php echo $offence->getImageurl1(); ?>">View Image</a></td>
                        <td>
						
                           <input type="submit" class="btn btn-success " value="Pay Rs:<?php echo  $offence->getChallan_amount(); ?> ">
							  </form>
                        </td>
						<td>
						<a class="btn btn-warning " id="displayText" href="javascript:toggle();">Raise Dispute.</a>
                           
                        </td>
                       
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
			
			<div id="toggleText" style="display: none">
			<div class="card card-primary ">
  <div class="card-header"><b>Please enter your Dispute comments in below form.</b></div>
  <div class="card-body">
			
			<form class="needs-validation" method="GET" action="echallan.php">
		<!--<form class="needs-validation" method="GET" action="payment/pay.php">-->
			<br/>
			<div class="mb-3">
			<label for="email">Violation ID</label>
			<input class="form-control" id="dviolationid" readonly name="dviolationid"value="<?php if($formsubmit==true) echo $ofid; ?>"  required>
			<input class="form-control" id="action" type="hidden" name="action"value="dispute"  required>
			<!--<div class="invalid-feedback"><small class="form-text text-muted">
			Enter the Violation ID</small>
			</div>-->
			</div>

			<div class="mb-3">
			<label for="email">Dispute Comments *</label>
			<textarea name="vdesc" id="vdesc" class="form-control" rows="3" required ></textarea>
			
			
			</div>
			</div>



<button class="btn btn-warning btn-lg btn-block" type="submit">Submit Dispute</button>
</form>
			</div>
			</div>
			
			</div>
			

            <?php
        }else {
            if(isset($_GET["violationid"])) {
                ?>
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    No Records Found.
                </div>

                <?php
            }
        }
        ?>
	
<br/>
     
	<br/>
    	
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "Raise Dispute.";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "Hide Dispute.";
	}
} 
</script>
  </body>

</html>
