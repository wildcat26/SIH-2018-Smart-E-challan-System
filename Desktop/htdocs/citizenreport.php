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
    <link href="css/custom.css" rel="stylesheet">
	
	
	
	
    <!-- MetisMenu CSS -->
    <link href="profile/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="profile/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="profile/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	 <link href="css/gijgo.min.css" rel="stylesheet" type="text/css" />
	
  </head>

  <body>



  <br/>
  <br/>
	<?php

    //echo "Loading";
//    print_r($_POST);
    //print_r($_GET);
		include("menu.php");
		
		//if(isset($_GET[])
	?>
	
    <!-- Page Content -->
    <div class="container center">
	
	
	<div class="row">


        <div class="center-block" style="width:100%" ><br/><br/>
		 <h1 class="mt-5"><center>Report an Offence (Public Use)</center></h1>
		  <br/>
		
		
		<div class="card card-primary ">
  <div class="card-header">If you saw traffice violations, You can submit details with photo. Officials will check this and do approriate action.</div>
  <div class="card-body">

      <?php

      $addCReportStatus=false;
      // Check if the form was submitted
      if($_SERVER["REQUEST_METHOD"] == "POST"){
          //print_r($_POST);


echo "Before IF";
          // Check if file was uploaded without errors
          if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
              echo "Inside IF";
              $creport = new CReport();

              $creport->setRe_offencetype($_POST['offencetype']);
              $creport->setRe_vehnum($_POST['vehiclenumber']);

              $creport->setRe_desc(str_replace(","," ",$_POST['vdesc']));
              $creport->setRe_place($_POST['vplace']);
              $creport->setRe_place($_POST['vmobile']);

              $originalDate = $_POST['vdate'];
              $newDate = date("Y-m-d", strtotime($originalDate));
              //$string = str_replace("‐",",",$string);
              $creport->setRe_date($newDate);

              $returnValue = addCReport($creport,$DBcon);
              $addCReportStatus = true;
              if(strpos($returnValue, 'Error') === 0){
                  $addCReportStatus=false;
              }
              echo $returnValue;
              $savestatus="Record Saved.";
              if($addCReportStatus==true){
                  //echo getshortenurl($returnValue,$_POST['vehiclenumber']);
                  $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                  $filename = $_FILES["photo"]["name"];
                  $filetype = $_FILES["photo"]["type"];
                  $filesize = $_FILES["photo"]["size"];

                  // Verify file extension
                  $ext = pathinfo($filename, PATHINFO_EXTENSION);
                  echo $returnValue.".".$ext;
                  if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

                  // Verify file size - 5MB maximum
                  $maxsize = 5 * 1024 * 1024;
                  if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

                  // Verify MYME type of the file
                  if(in_array($filetype, $allowed)){
                      // Check whether file exists before uploading it
                      if(file_exists("cupload/" .  $returnValue.".".$ext )){
                          $savestatus = "File is already exists.";
                          $addCReportStatus=false;
                      } else{
                          move_uploaded_file($_FILES["photo"]["tmp_name"], "cupload/" . $returnValue.".".$ext);
                          $savestatus ="Record Saved";
                          updateCImageUrl($DBcon,$returnValue,"cupload/" . $returnValue.".".$ext);
                          //echo "Your file was uploaded successfully.";
                      }
                  } else{
                      $addCReportStatus=false;
                      $savestatus = "Error: There was a problem uploading your file. Please try again.";
                  }
              }
          } else{
             // if(isset($_FILES["photo"]))
                $savestatus= "Error: " . $_FILES["photo"]["error"];

          }
          if($addCReportStatus ==true){
              ?>
              <div class="alert alert-success">Record added successfully</div>

              <?php

          }else{
              ?>
              <div class="alert alert-danger"><?php echo $savestatus; ?></div>
              <?php

          }
      }





      ?>
		
<form class="needs-validation" method="post" action="citizenreport.php" enctype = "multipart/form-data">
<br/>


<div class="mb-3">
<label for="rank">Offence Type</label>
<select class="form-control" id="offencetype" name="offencetype" >
	  
        <option value="Over Speed">Over Speed</option>
        <option value="Using your phone while driving">Using your phone while driving</option>
        <option value="Not wearing a seatbelt">Not wearing a seatbelt</option>
        <option value="Failing to stop at a red light">Failing to stop at a red light</option>
        <option value="Dangerous driving">Dangerous driving</option>
        <option value="No Helmet">No Helmet</option>
        <option value="Unauthorised Parking">Unauthorised Parking</option>
        <option value="Incorrect Number Plate">Unauthorised Parking</option>
        <option value="Triple Riding 2-Wheeler">Triple Riding 2-Wheeler</option>
        <option value="Excess Passengers">Excess Passengers</option>
        <option value="Unfit Vehicle">Unfit Vehicle</option>
        <option value="Overdimensional Vehicle">Overdimensional Vehicle</option>
        <option value="Excessive Smoke">Excessive Smoke</option>
    <option value="Illegal Number">Illegal Number</option>

      </select>


	  







	  
	  
	  
	  
	  <div class="invalid-feedback"><small class="form-text text-muted">
Enter Offence Type</small>
</div>
</div>

<div class="mb-3">
<label for="email">Vehicle Number</label>
<input class="form-control" id="vehiclenumber" name="vehiclenumber" value="CG04DE1234" required>
<div class="invalid-feedback"><small class="form-text text-muted">
Enter the Vehicle Number</small>
</div>
</div>
<div class="mb-3">
<label for="pwd">Violation Date</label>
<?php

$date = date('m/d/Y');

?>
<input id="datepicker" name="vdate" width="270" size="16" type="text" value="<?php echo $date?>" readonly />
<div class="invalid-feedback"><small class="form-text text-muted">
Set an Violation Date (mm/dd/yyyy)</small>
</div>
</div>
<div class="mb-3">
<label for="pwd">Violation Description</label><textarea name="vdesc" id="vdesc" class="form-control" rows="3"></textarea>
<div class="invalid-feedback"><small class="form-text text-muted">
Violation Description</small>
</div>
</div>

<div class="mb-3">
<label for="email">Violation Place</label>
<input type="text" class="form-control" name="vplace" id="vplace" value="Raipur" required>
<div class="invalid-feedback"><small class="form-text text-muted">
Enter Violation Place</small>
</div>
</div>


<div class="mb-3">
<label for="email">Contact mobile</label>
<input type="text" class="form-control" name="vmobile" id="vmobile" value="9846302523" required>
<div class="invalid-feedback"><small class="form-text text-muted">
Enter Your Mobile.</small>
</div>
</div>



<div class="mb-3">
<label for="contact">Photo</label>
   <input type="file" name="photo" id="fileSelect">
<div class="invalid-feedback"><small class="form-text text-muted">
Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</small>
</div>
</div>

<hr class="mb-1">
<button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
</form>
		


   
   
   
  </div>
</div>
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		


		</div>
    </div>
	<br/>
       
<br/>
     
	<br/>
    	
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="profile/vendor/jquery/jquery.min.js"></script>
    <script src="profile/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="profile/vendor/metisMenu/metisMenu.min.js"></script>
<script src="profile/dist/js/sb-admin-2.js"></script>
<script src="js/gijgo.min.js"></script>
<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
    </script>
	
	
  </body>

</html>
