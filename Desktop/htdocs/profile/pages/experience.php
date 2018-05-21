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
                        <h1 class="page-header">Add Experience</h1>
						
						<div class="col-md-10 ">
						<small  class="form-text text-muted">You can add your Experience for each organisation/Company.</small>
        
          <form class="needs-validation" action="upload.php">
            <br/>
			<div class="mb-3">
              <label for="email">Name of the Organisation *</label>
              <input type="text" class="form-control" id="username" required>
              <div class="invalid-feedback"><small  class="form-text text-muted">
               Enter the brief name of your employer</small>
              </div>
            </div>

			<div class="mb-3">
              <label for="email">Designation *</label>
              <input type="text" class="form-control" id="username" required>
              <div class="invalid-feedback"><small  class="form-text text-muted">
               Enter your Designatin.</small>
              </div>
            </div>

			
			
			
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="country">From Date *</label>
                <input id="datepicker" name="fdate" width="270" size="16" type="text" value="" readonly />
                <div class="invalid-feedback"><small  class="form-text text-muted">
                Give the starting date of your experience.
                </div></small>
              </div>
              <div class="col-md-3 mb-3">
                <label for="state">To Date *</label>
                  <input id="datepicker1" name="ldate" width="270" size="16" type="text" value="" readonly />
                <div class="invalid-feedback"><small  class="form-text text-muted">
                 Give the date ending date of experience.
                </div></small>
              </div>
             
			
            </div>
			
			
			<div class="mb-3">
              <label for="email">Pay Drawn *</label>
              <input type="text" class="form-control" id="username" required>
              <div class="invalid-feedback"><small  class="form-text text-muted">
               Enter the your monthly pay in Rs.</small>
              </div>
            </div>

			
			
			
			
			
			<div ><label for="credit">Do you want to add another Experience</label>
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" checked="checked" class="custom-control-input"  required>
                <label class="custom-control-label" for="credit">Yes</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">No</label>
              </div>
            
            </div>
			
			<button class="btn btn-primary btn-lg btn-block" type="submit">Save and Continue</button>
          </form>
        </div>
		
		
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				 <h2 class="page-header">Experience</h2>
				<div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Organisation</th>
                                            <th>Designation</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Pay</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Mark</td>
                                            <td>@mdo</td>
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
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
		 $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap'
        });
    </script>  
</body>

</html>
