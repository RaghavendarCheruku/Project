<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
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
<body>
	<!-- Login Full Background -->
	<!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
	<!-- END Login Full Background -->
	<!-- Login Container -->
	
	<div id="page-container" >
	<!-- Login Title -->
	<div id="main-container">
			<div id="page-content"  style="min-height: 689px;" >
			
		<div class="content-header">
					<div class="header-section">
						<div class="row">
							<div class="col-lg-10 col-md-10 col-sm-10">
								<h1>
								Recruitment Drive
								</h1>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2">
								<img src="assets/img/logo.png" width="220px" align="right" style="float:right;margin-top:-17px"/>	
							</div>
						</div>	
					</div>
				</div>				
				<!-- END Login Title -->
		<!-- Login Block -->
		<div class="block" align="center">
		<div  class="animation-fadeIn"  style="min-height: 100px; width:500px; " >
		
					<div class="block-title" >
						<h3 style="font-size:24px;" ><strong>Login (Staff Only)</strong></h3>
				
			<!-- Login Form -->
			<form action="index.php?op=login" method="post" id="form-login" class="form-horizontal">
				<div class="form-group">
					<div class="col-xs-12 text-danger">
					<?php echo $error; ?>
					</div>
				</div>
				<div class="row">
				<div class="form-group" align="center">
					<div class="col-xs-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="gi gi-envelope"></i></span>
							<input type="text" align="center" style="font-size:20px" id="login-email" name="login-email" class="form-control input-lg"  placeholder="Email" style="width:525px " >
						</div>
					</div>
				</div>
				<div class="form-group" align="center">
					<div class="col-xs-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
							<input type="password" id="login-password" style="font-size:20px" name="login-password" class="form-control input-lg" placeholder="Password" style="width:525px ">
						</div>
					</div>
				</div>
				<div class="form-group form-actions" align="center">
					<div class="col-xs-4">
						<input type="hidden" name="form-submitted" value="1" />	
						<!--label class="switch switch-primary" data-toggle="tooltip" title="Remember Me?">
							<input type="checkbox" id="login-remember-me" name="login-remember-me" checked>
							<input type="hidden" name="form-submitted" value="1" />	
							<span></span>
						</label-->
					</div>
					<div class="col-xs-8 text-right">
						<table>
					<tr>
						<td>
							<a class="btn btn-sm btn-primary" href="index.php"><i   style="font-size:20px" class="fa fa-angle-right"></i> <font  style="font-size:20px"> Home</font></a> &nbsp&nbsp&nbsp&nbsp
						</td>
						<td>
							<button type="submit" style="font-size:20px" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login</button>
					</td></tr></table>
					</div>
				</div>
			</form>
			<!-- END Login Form -->
		</div>
		<div class="text-centered" style="background-color:#ffffff;padding:5px;font-size:11px;">
            <div></div>
        </div>
        <!-- END Login Block -->
    </div>
	</div>
    <!-- END Login Container -->
    <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/vendor/bootstrap.min.js"></script>
	<script src="assets/js/plugins.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- Load and execute javascript code used only in this page -->
	<script src="assets/js/pages/login.js"></script>
	<script>$(function(){ Login.init(); });</script>
</body>
</html>