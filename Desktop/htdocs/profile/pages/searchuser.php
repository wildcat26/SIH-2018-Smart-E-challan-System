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

    <title>Search User - E Challan</title>

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
$validSearch="no";
echo $validSearch;
if(isset($_GET['search'])){
	echo "submit";
	$search=$_GET['search'];
	$searchType=$_GET['searchtype'];
	$users = searchUser($DBcon,$search,$searchType);
	echo empty($users);
	if(!empty($users)){
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
<h1 class="page-header">Search User</h1>
<div class="col-md-10 ">
<small class="form-text text-muted">You can search officer details here</small>



<form role="form">
                                        <div class="form-group">
                                            <label>Search</label>
                                            <input name ="search" class="form-control">
                                            <p class="help-block">Enter part of name or email.</p>
											<label>Selects</label>
                                            <select  name="searchtype" class="form-control">
                                                <option value="name">By Name</option>
                                                <option value="email">By Email</option>
                                                
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
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Rank</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
								
									
									
									
									<?php
									//echo "Valid Search"  . $validSearch;
									if($validSearch=="yes"){
										foreach($users as $user){
											$userid = $user->getUser_id(); 
											?>
											
											<tr>
                                            
                                            <td><?php  echo $userid; ?> </td>
                                            <td><?php echo $user->getUsername(); ?> </td>
                                            <td><?php echo $user->getEmail(); ?> </td>
                                            <td><?php echo $user->getOfficer_rank(); ?> </td>
                                            <td><?php echo $user->getMobile(); ?> </td>
											<td><a href="edituser.php?id=<?php echo $userid; ?>">Edit</a></td>
                                        </tr>
											
											
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
