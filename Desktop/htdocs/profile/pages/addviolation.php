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

    <title>Add Violation - E Challan</title>

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

<?php
//print_r($_POST);

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
<h1 class="page-header">Add Violation</h1>
<div class="col-md-10 ">
<?php

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	//print_r($_POST);
	
	
	
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
		
		
		
	    $off = new Offence();

        $off->setOffense_Type($_POST['offencetype']);
        $off->setVehicle_number($_POST['vehiclenumber']);
		$originalDate = $_POST['vdate'];
		$newDate = date("Y-m-d", strtotime($originalDate));
        //$string = str_replace("‐",",",$string);
        $off->setOffense_Date($newDate);
        $off->setOffence_desc(str_replace(","," ",$_POST['vdesc']));
        $off->setOffense_Place($_POST['vplace']);
	
	    $returnValue = addOffense($off,$DBcon);
	    $addOffenceStatus = true;
	    if(strpos($returnValue, 'Error') === 0){
            $addOffenceStatus=false;
        }
	    //echo $returnValue;
        $savestatus="Record Saved.";
		if($addOffenceStatus==true){
			echo getshortenurl($returnValue,$_POST['vehiclenumber']);
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
                if(file_exists("upload/" .  $returnValue.".".$ext )){
                    $savestatus = "File is already exists.";
                    $addOffenceStatus=false;
                } else{
                    move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $returnValue.".".$ext);
                    $savestatus ="Record Saved";
                    updateImageUrl($DBcon,$returnValue,"upload/" . $returnValue.".".$ext);
                    //echo "Your file was uploaded successfully.";
                }
            } else{
                $addOffenceStatus=false;
                $savestatus = "Error: There was a problem uploading your file. Please try again.";
            }
        }
    } else{
        $savestatus= "Error: " . $_FILES["photo"]["error"];
    }
    if($addOffenceStatus ==true){
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
<small class="form-text text-muted">You can add new User details here</small>
<form class="needs-validation" method="POST" action="addviolation.php" enctype = "multipart/form-data">
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
<input class="form-control" id="vehiclenumber" name="vehiclenumber" required>
<div class="invalid-feedback"><small class="form-text text-muted">
Enter the Vehicle Number</small>
</div>
</div>
<div class="mb-3">
<label for="pwd">Violation Date</label>
<input id="datepicker" name="vdate" width="270" size="16" type="text" value="" readonly />
<div class="invalid-feedback"><small class="form-text text-muted">
Set an Violation Date</small>
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
<input type="text" class="form-control" name="vplace" id="vplace" required>
<div class="invalid-feedback"><small class="form-text text-muted">
Enter Violation Place</small>
</div>
</div><div class="mb-3">
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


<br/>

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
