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

    <title>Search Violations - E Challan</title>

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
print_r($_GET);
$removestatus="";
if(isset($_GET['action'])){
    $removestatus=removeOffence($DBcon, $_GET['deid']);
    if($removestatus=="Success")
        echo "Record removed.";
    else
        echo $removestatus;
}
$validSearch="no";
//echo $validSearch;
if(isset($_GET['search'])){
	echo "submit";
	$search=$_GET['search'];
	$searchType=$_GET['searchtype'];
	$violations = searchViolations($DBcon,$search,$searchType);
	echo count($violations);
	if(count($violations)>0){
		$validSearch="yes";
}else
{
		echo "invalid search";
}
//echo "validSearch" . $validSearch;
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
<h1 class="page-header">Search Violations</h1>
<div class="col-md-10 ">
<small class="form-text text-muted">You can search Violation details here</small>



<form role="form">
                                        <div class="form-group">
                                            <label>Search</label>
                                            <input name ="search" class="form-control">
                                            <p class="help-block">Enter Violations ID or Vehicle Number.</p>
											<label>Selects</label>
                                            <select  name="searchtype" class="form-control">
                                                <option value="id">By ID</option>
                                                <option value="vehnum">By Vehicle Number</option>
                                                
                                            </select>
                                        </div>

										
                                        
                                       <button type="submit" class="btn btn-default">Search</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>

</br>

									
									<div class="row">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Search Result
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>

                                            <th>Violation ID</th>
                                            <th>Date</th>
                                            <th>Vehicle Number</th>
                                            <th>Offence Type</th>
                                            <th>Offence Place</th>
                                            <th>Offence Description</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									//echo "Valid Search"  . $validSearch;
									if($validSearch=="yes"){
										foreach($violations as $violation){
                                            //$violation= new Offence();
											$id = $violation->getOffense_ID();
											?>
											<tr>
                                            
                                            <td><?php  echo $id; ?> </td>
                                            <td><?php echo $violation->getOffense_Date(); ?> </td>
                                            <td><?php echo $violation->getVehicle_number(); ?> </td>
                                            <td><?php echo $violation->getOffense_Type(); ?> </td>
                                                <td><?php echo $violation->getOffense_Place(); ?> </td>
                                                <td><?php echo $violation->getOffence_desc(); ?> </td>
                                                <td><?php echo $violation->getChallan_amount(); ?> </td>
                                                <td><?php echo $violation->getOffense_Status(); ?> </td>
                                                <td><a target="_blank" href="<?php echo $violation->getImageurl1(); ?>">View Image</a></td>
                                                <td><a href="editviolation.php?id=<?php echo $id; ?>">Edit</a>
												<a class="text-warning" onclick="return confirm('Are you sure?');" href="searchviolation.php?action='remove'&deid=<?php echo $id; ?>"><b>Remove</b></a></td>
                                        </tr>
											<?php
										}
									}else {
                                        if (isset($_GET['search'])) {
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
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                
                <!-- /.col-lg-6 -->
                
            </div>

</div>
</div>
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
