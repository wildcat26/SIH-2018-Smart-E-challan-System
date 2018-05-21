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
                        <h1 class="page-header">Upload Documents</h1>
						
						<div class="col-md-10 ">
				<div class="alert alert-success">
                                Please make all files ready with following format and size before going to file upload<br/>
1. Passport size Photo (Dimension 3.5cm X 5cm) (jpg, jpeg), Size <=1024 KB)<br/>
2. Signature (Dimension 5cm x 1.5cm )( format jpg, jpeg) each size <= 1024 KB)<br/>
3. Community Ceritficate if applicable (jpg, jpeg) each size <= 1024 KB)<br/>
4. Qualifiying Degree (jpg, jpeg) size <=1024 KB)</a>.
                            </div>
          <form class="needs-validation" action="apply.php">
            <br/>
			<div class="mb-3">
              <label for="email">Upload your Passport size photo *</label>
               <div class="form-group">
                                            
                                            <input type="file" name="photo">
											<div class="invalid-feedback"><small  class="form-text text-muted">
              Allowed extensions: jpg, jpeg, gif (Size < 1024kb))</small>
              </div>
                                        </div>
              
            </div>

			<div class="mb-3">
              <label for="email">Upload your Signature image *</label>
			  <div class="form-group">
               <input type="file" name="sign">
              <div class="invalid-feedback"><small  class="form-text text-muted">
               Allowed extensions: jpg, jpeg, gif, pdf (Size < 1024kb))</small>
              </div> </div>
            </div>

			
			
			
              <div class="mb-3">
                <label for="country">Upload your minimum eligible degree certificate image *</label>
				<div class="form-group">
                <input type="file" name="certificate">
                <div class="invalid-feedback"><small  class="form-text text-muted">
                Allowed extensions: jpg, jpeg, gif, pdf (Size < 1024kb))
                </div></small>
              </div> </div>
             <div class="mb-3">
                <label for="state">Upload your Community Certificate image *</label>
				<div class="form-group">
                   <input type="file" name="community">
                <div class="invalid-feedback"><small  class="form-text text-muted">
                 Allowed extensions: jpg, jpeg, gif, pdf (Size < 1024kb))
                </div></small>
              </div> </div>
             
			
			
			
			
			
			
			
			<button class="btn btn-primary btn-lg btn-block" type="submit">Upload and Continue</button>
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
		 $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap'
        });
    </script>  
</body>

</html>
