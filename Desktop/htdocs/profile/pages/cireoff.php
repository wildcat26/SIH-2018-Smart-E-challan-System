<?php

require("../../db_connect.php");
require("../../class_lib.php");
include("../../functions.php");

$disputestatus="";
if(isset($_GET['export'])){

    $search=$_GET['search'];
    $searchType=$_GET['searchtype'];
    $fdate=$_GET['fdate'];
    $ldate=$_GET['ldate'];
    exportViolationsCSV($DBcon,$search,$searchType,$fdate,$ldate);
    exit();

}
else if(isset($_POST['disputes'])){
print_r($_POST['disputes']);
if(count($_POST['disputes'])>0){
    $disputestatus=resolveDisputes($DBcon,$_POST['disputes']);
}
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

    <title>Public Reported Traffic Offences - E Challan</title>

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
if((isset($_GET['searchtype']))){
	//echo "submit";
    //$search=$_GET['search'];
    $searchType=$_GET['searchtype'];
    //$paidtype=$_GET['paidtype'];
    //$fdate=$_GET['fdate'];
    //$ldate=$_GET['ldate'];
	$citizenreports = searchCIREOFF($DBcon,$searchType);
	echo count($violations);
	if(count($citizenreports)>0){
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
<?php
                        if(strlen($disputestatus)>0)
                       if($disputestatus =="Success"){
                       ?>
                       <div class="alert alert-success">Disputes are resolved.</div>

                       <?php

                       }else{
                           ?>
                           <div class="alert alert-danger"><?php echo $disputestatus; ?></div>
                           <?php

                       }
                       ?>

<div class="col-lg-14">
<h1 class="page-header">Public Submitted Offences Review</h1>
<div class="col-md-10 ">
<small class="form-text text-muted"></small>



<form role="form">
  
										<div class="row">
        
		 <div class="col-md-3 mb-3">
		 <label>Type</label>
                                            <select  name="searchtype" class="form-control">
                                                <option value="all">All</option>
                                                <option value="RESOLVED">Resolved</option>
                                                <option value="RAISED">Raised</option>
                                                
                                            </select>
		 </div>
		 


    </div>
    
                                        <br/>
                                       <button type="submit" class="btn btn-success">Search</button>
                                        

                                    </form>

									

</br>

									
									<div class="row">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Search Result <?php if($validSearch=="yes")  echo count($citizenreports) ." ". "Records."; ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Violation ID</th>
                                            <th>Offence Date</th>
                                            <th>Vehicle Number</th>
                                            <th>Offence Type</th>
                                            <th>Offence Place</th>
                                            <th>Offence Description</th>
                                            <th>Offence Status</th>
                                            <th>Dispute Comments</th>
                                            <th>Dispute Status</th>
                                            <th>Photo</th>
                                          <!--  <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									//echo "Valid Search"  . $validSearch;
									if($validSearch=="yes"){
									    ?>
										<form action="cireoff.php" method="post" >
                                        <div class="btn-group">
                                            
											<button class="btn btn-primary active" type="submit">
											 <span class="glyphicon glyphicon-ok"></span> Approve selected offences.
											</button>

                                        </div>
                                        <?php
										foreach($citizenreports as $dispute){
										    //$dispute = new Dispute();
                                            //$violation= new Offence();
                                            $violation = $dispute->getOffence();
											$id = $violation->getOffense_ID();
											?>
											<tr>

                                            <td>
                                                <input type='checkbox' name="disputes[]" value='<?php echo $dispute->getDi_id(); ?>' />
                                            </td><td>
                                                <a href="editviolation.php?id=<?php echo $id; ?>"><?php echo $id; ?></a></td>
                                            <td><?php echo $violation->getOffense_Date(); ?> </td>
                                            <td><?php echo $violation->getVehicle_number(); ?> </td>
                                            <td><?php echo $violation->getOffense_Type(); ?> </td>
                                                <td><?php echo $violation->getOffense_Place(); ?> </td>
                                                <td><?php echo $violation->getOffence_desc(); ?> </td>
                                                <td><?php echo $violation->getOffense_Status(); ?> </td>
                                                <td><?php echo $dispute->getDi_comments(); ?> </td>
                                                <td><?php echo $dispute->getDi_status(); ?> </td>
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
									</form>
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
