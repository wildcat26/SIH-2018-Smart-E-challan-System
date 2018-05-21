<?php

require("../../db_connect.php");
require("../../class_lib.php");
include("../../functions.php");

if(isset($_GET['export'])){

    $search=$_GET['search'];
    $searchType=$_GET['searchtype'];
    $fdate=$_GET['fdate'];
    $ldate=$_GET['ldate'];
    exportViolationsCSV($DBcon,$search,$searchType,$fdate,$ldate);
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Violations Report- E Challan</title>

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
//print_r($_GET);
$validSearch="no";
//echo $validSearch;
if((isset($_GET['search']))||((isset($_GET['fdate']))&&(isset($_GET['ldate'])))){
	//echo "submit";
    $search=$_GET['search'];
    $searchType=$_GET['searchtype'];
    $paidtype=$_GET['paidtype'];
    $fdate=$_GET['fdate'];
    $ldate=$_GET['ldate'];
	$violations = searchViolationsReport($DBcon,$search,$searchType,$fdate,$ldate,$paidtype);
	//echo count($violations);
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
<h1 class="page-header">Violations Report</h1>
<div class="col-md-10 ">
<small class="form-text text-muted"></small>



<form role="form">
    <!--
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
										-->
										<div class="row">
        <div class="col-md-6 mb-3">
		 <label>Enter Violations ID or Vehicle Number</label>
                                            <input name ="search" class="form-control">
                                            <p class="help-block">
                                               .</p>
		 </div>
		 <div class="col-md-3 mb-3">
		 <label>Type</label>
                                            <select  name="searchtype" class="form-control">
                                                <option value="all">All</option>
                                                <option value="id">By ID</option>
                                                <option value="vehnum">By Vehicle Number</option>
                                                
                                            </select>
		 </div>
		 <div class="col-md-3 mb-3">
		 <label>Paid Status</label>
                                            <select  name="paidtype" class="form-control">
                                                <option value="all">All</option>
                                                <option value="np">Not Paid</option>
                                                <option value="pa">Paid</option>
                                                
                                            </select>
		 </div>


    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="country">From Date</label>
            <input id="datepicker" name="fdate" width="270" size="16" type="text" value="" readonly />
            <div class="invalid-feedback"><small  class="form-text text-muted">
                    Give the starting date.
            </div></small>
        </div>
        <div class="col-md-3 mb-3">
            <label for="state">To Date</label>
            <input id="datepicker1" name="ldate" width="270" size="16" type="text" value="" readonly />
            <div class="invalid-feedback"><small  class="form-text text-muted">
                    Give the date end date.
            </div></small>
        </div>




    </div>
                                        
                                       <button type="submit" class="btn btn-success">Search</button>
                                        <button type="reset" class="btn btn-default">Reset</button>

                                    </form>

</br>

									
									<div class="row">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Search Result <?php if($validSearch=="yes")  echo count($violations) ." ". "Records."; ?>
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
                                          <!--  <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									//echo "Valid Search"  . $validSearch;
									if($validSearch=="yes"){
									    ?>
                                        <div class="btn-group">
                                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."&export=true"; ?>" class="btn btn-primary active">
                                                <i class="glyphicon glyphicon-floppy-save" aria-hidden="true"></i> Download
                                            </a>

                                        </div>
                                        <?php
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
                                              <!--  <td><a href="editviolation.php?id=<?php echo $id; ?>">Edit</a></td> -->
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
            $('#datepicker1').datepicker({
                uiLibrary: 'bootstrap'
            });
        </script>
</body>
</html>
