<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title></title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- bootstrap 3.0.2 -->
	<!-- Stylesheets -->
	<!-- Bootstrap is included in its original form, unaltered -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Related styles of various icon packs and plugins -->
	<link rel="stylesheet" href="assets/css/plugins.css">
	<!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->
	<!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
	<link rel="stylesheet" href="assets/css/themes.css">
	<!-- END Stylesheets -->
	<script src="assets/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
</head>
<body class="page-loading" >
	<script>setTimeout(function() {$('body').removeClass('page-loading');}, 2000);</script>
	<div class="preloader themed-background">
		<h1 class="push-top-bottom text-light text-center"><strong>Please Wait </strong>a moment</h1>
		<div class="inner">
			<h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
			<br/>
			</br>
			<div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
		</div>
	</div>
	<div id="page-container"  class="sidebar-no-animations footer-fixed">
		<div id="main-container">
			<div id="page-content"  style="min-height: 689px;" >
				<div class="content-header">
					<div class="header-section">
						<div class="row">
							<div class="col-lg-10 col-md-10 col-sm-10">
								<h1>
								Online Recruitment
								</h1>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2">
								<img src="assets/img/logo.png" width="220px" align="right" style="float:right;margin-top:-17px"/>	
							</div>
						</div>	
					</div>
				</div>				
				<div class="block">
					<div class="block-title">
						<h3 style="font-size:24px;" ><strong>New Registration </strong></h3>
					</div>
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2">
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8">
							<div id="error" class="alert alert-info" >
								<h3 align="center" ><font color="red">Welcome to Recruitment! </font></h3> 
								<h4 align="center"><font color="red">Thank you for visiting us. Please Fill in allthe fields for registration and keep your registration ID for future reference. Please contact HR if you are unable to complete the application.</font></h4>
								<h4 align="center"><font color="red">All the Best!</font>
								</h4>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
						<?php
							if($evtDetails[0]->isRegComplete == 1){
						?>
								<a id="regNew" class="btn btn-lg btn-primary btn-block disabled" href="index.php?op=new">New Registration <i class="fa fa-arrow-right"></i></a>
						<?php
							}
							else{
						?>
								<a id="regNew" class="btn btn-lg btn-primary btn-block" href="index.php?op=new">New Registration <i class="fa fa-arrow-right"></i></a>
						<?php
							}
						?>	
							<a class="btn btn-lg btn-primary btn-block" href="index.php?op=search2">Status of Existing Application <i class="fa fa-arrow-right"></i></a>
							<a class="btn btn-lg btn-primary btn-block" href="index.php?op=login">Login (Admin only) <i class="fa fa-arrow-right"></i></a>
							<a class="btn btn-lg btn-primary btn-block" href="index.php?op=login1">Login (Staff only) <i class="fa fa-arrow-right"></i></a>
	 </div>
						<div class="col-lg-4 col-md-4 col-sm-4">
						</div>
					</div><br/>
				</div>
			</div>
			<footer class="clearfix">
				<!--div class="pull-right">
					Crafted with <i class="fa fa-heart text-danger"></i> by <a target="_blank" href="http://goo.gl/vNS3I">pixelcave</a>
				</div-->
				<div class="pull-left" style="background-color:#ffffff;padding:5px;font-size:11px;">
					<div>&copy; 2016 . All rights reserved.</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/vendor/bootstrap.min.js"></script>
	<script src="assets/js/plugins.js"></script>	
</body>
</html>
