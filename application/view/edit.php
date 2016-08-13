<!DOCTYPE html>
<?php

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<title><?php print htmlentities($title) ?></title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>	
	<!-- Bootstrap is included in its original form, unaltered -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Related styles of various icon packs and plugins -->
	<link rel="stylesheet" href="assets/css/plugins.css">
	<!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/themes.css">
	<!-- END Stylesheets -->
	<script src="assets/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
	<script type="text/javascript">
	
	function yesnoCheck()
	{
		if(document.getElementById('inter').checked)
		{
			document.getElementById('ifYes').style.visibility='visible';
		}
		else{
			document.getElementById('ifYes').style.visibility='hidden';
		}
	}
	
	function changeProgressBar() {
		var barValue = 0;
        
		if (document.getElementById("fname").value != "" && document.getElementById("fname").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
		}
		if (document.getElementById("lname").value != "" && document.getElementById("lname").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
		}
		if (document.getElementById("l_email").value != "" && document.getElementById("l_email").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
		}
		if (document.getElementById("mobile").value != "" && document.getElementById("mobile").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
		}
		if (document.getElementById("dob").value != "" && document.getElementById("dob").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
		}
		if (document.getElementById("gender").value != "" && document.getElementById("gender").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
		}
		if (document.getElementById("college").value != "" && document.getElementById("college").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
		}
		if (document.getElementById("qualification").value != "" && document.getElementById("qualification").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
			if(document.getElementById("qualification").value == "2")
			{
				barValue++;
			}
		}
		if (document.getElementById("stream").value != "" && document.getElementById("stream").parentNode.parentNode.parentNode.className=="form-group" && document.getElementById("qualification").value != "2" ) {				
			barValue++;
		}
		if (document.getElementById("ssc").value != "" && document.getElementById("ssc").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
		}
		if (document.getElementById("inter").value != "" && document.getElementById("inter").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
		}
		if (document.getElementById("yes").value != "" && document.getElementById("yes").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
		}
	if (document.getElementById("yearPassed").value != "" && document.getElementById("yearPassed").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
		}
		if (document.getElementById("source").value != "" && document.getElementById("source").parentNode.parentNode.parentNode.className=="form-group" ) {				
			barValue++;
		}
		var totalValue=0;
		var diffValue = 0.33;
		if(barValue != 0){
			totalValue = barValue/14;
			if(totalValue > 0 && totalValue < diffValue){
				document.getElementById("progress-bar-wizard").className="progress-bar progress-bar-danger"
			}
			else if(totalValue >= diffValue && totalValue <= 0.75){
				document.getElementById("progress-bar-wizard").className="progress-bar progress-bar-warning"
			}
			else{
				document.getElementById("progress-bar-wizard").className="progress-bar progress-bar-success"
			}
		}	
		var progressBar = $('#progress-bar-wizard');
		progressBar
			.css('width', (totalValue*100)+'%')
			.attr('aria-valuenow', totalValue*100);
		document.getElementById("progress-bar-wizard").style.width = totalValue * 100 + "%";
		if(barValue>=14){
			$("#registerBtn1").removeClass("disabled");
		}else{
			$("#registerBtn1").addClass("disabled");
		}
	}
	</script>
</head>
<body class="page-loading" >
	<script>setTimeout(function() {$('body').removeClass('page-loading');}, 1000);</script>
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
			<div id="page-content"  style="min-height: 780px;" >
				<div class="content-header">
					<div class="header-section">
						<div class="row">
							<div class="col-lg-10 col-md-10 col-sm-10">
								<h1>Recruitment Drive</h1>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2">
								<img src="assets/img/logo.png" width="220px" align="right" style="float:right;margin-top:-17px"/>	
							</div>
						</div>	
					</div>
				</div>				
				<div class="block">
					<div class="block-title">
					   <h3 style="font-size:24px;" ><strong>Edit Existing Registration</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
					   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					   <a class="btn btn-lg btn-primary" href="index.php" align="right-corner">Home</a></h3>
					</div>
					<div class="row">
						<div id="error" class="alert alert-danger alert-dismissable" style="display:none">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <h4><i class="fa fa-times-circle"></i> Error</h4> 
									<?php
										if ( $errors ) {
											print '<ul class="errors">';
											foreach ( $errors as $field => $error ) {
												print '<li>'.htmlentities($error).'</li>';
											}
											print '</ul>';
										}
									?>
                        </div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="progress progress-striped active">
								<div style="width: 33%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger" id="progress-bar-wizard">
								</div>
							</div>
							<br/>
							<form id="progress-wizard"  role="form" method="POST" action="">
							<div align="center"><table align="center">
							
							<div class="input-group">
							<tr> <td> <input style="font-size:20px" type="text" value="<?php echo $prefixEve; ?>">
													<input type="" style="font-size:20px" placeholder="Re-Confirm ID"  name="rID" id="rID" value="" /></td></tr>
												</div>
												</tr><tr><td></td></tr><td><input type="hidden" name="searchForm" value="1" />
								<div class="row">
									<div class= "col-lg-4  col-sm-4 col-ms-4">
									</div>
									<div class = "col-lg-4 col-lg-4 col-lg-4" style="align:center">			
										<button  type="submit">Show Status  <i class="fa fa-arrow-right"></i></button>
											</div>
									<div class= "col-lg-4  col-sm-4 col-ms-4">
									</div>
								</div></td></tr>
								</table></div>
								<?php if ( isset($_POST['searchForm']) ) {?>
							
								<div id="progress-first" class="step">							
									<div class="row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group">													
														<span class="input-group-addon"><i class="gi gi-user"></i></span>
														<input type="text" style="font-size:20px" placeholder="First Name" class="form-control input-lg input-lg" name="fname" id="fname" value="<?php echo $edit[0]->fname;?>" onchange="changeProgressBar()" />
										</div>
												</div>
											</div>
										</div>				
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group">
														<span class="input-group-addon"><i class="gi gi-user"></i></span>
														<input type="text" style="font-size:20px" placeholder="Last Name" class="form-control input-lg" name="lname" id="lname" value="<?php echo $edit[0]->lname;?>" onchange="changeProgressBar()"/>
													</div>
												</div>
											</div>
										</div>				
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group">
														<span class="input-group-addon"><i class="gi gi-envelope"></i></span>
														<input type="email" style="font-size:20px" placeholder="Email" class="form-control input-lg" name="l_email" id="l_email" value="<?php echo $edit[0]->email;?>" onchange="changeProgressBar()"/>
														<input type="hidden" name="l_id" value="<?php echo $edit[0]->regId;?>" >
													</div>
												</div>
											</div>			
										</div>	
										
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group"> 
														<span class="input-group-addon"><i class="gi gi-iphone"></i></span>
														<input type="text" style="font-size:20px" placeholder="Phone Number (xxx-xxx-xxxx)" class="form-control input-lg" id="mobile" name="mobile" value="<?php echo $edit[0]->mobile;?>" onchange="changeProgressBar()"/>
													</div>
												</div>
											</div>
										</div>				
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group">
														<span class="input-group-addon"><i class="gi gi-calendar"></i></span>
														<input type="text" style="font-size:20px" placeholder="Date of Birth (mm/dd/yyyy)"class="form-control input-lg" id="dob" name="dob"  value="<?php echo $edit[0]->dob;?>" onchange="changeProgressBar()"/>
													</div>
												</div>
											</div>
										</div>				
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group">
														<span class="input-group-addon"><i class="gi gi-parents"></i></span>
														<select class="form-control input-lg" style="font-size:20px" placeholder="Select your gender" id ="gender" name="gender"  onchange="changeProgressBar()"style="padding-top:12px;opacity:0.8"><option value="<?php  if(($edit[0]->gender)==1){ echo Female;} else if (($edit[0]->gender)==2) { echo Male;}?>" disabled selected style='display:none;' >Select your Gender</option>
														<?php foreach($genders as $row){ 
														/*** create the options ***/
														echo '<option value="'.$row->id.'"';
														if($row->id==42)
														{
															echo ' selected';
														}
															echo '>'. $row->name . '</option>'."\n";
														}?>
														</select>
													</div>
												</div>
											</div>			
										</div>				
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group">
														<span class="input-group-addon"><i class="gi gi-cargo"></i></span>								
														<input type="text"  style="font-size:20px" placeholder="Most Recent College" class="form-control input-lg searchCollege"  value="<?php echo $edit[0]->college;?>" id="college" name="college" data-provide="typeahead" autocomplete="off" value="<?php print htmlentities($college) ?>" onchange="changeProgressBar()"/>
													</div>
												</div>
											</div>
										</div>				
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group"> 
														<span class="input-group-addon"><i class="gi gi-book_open"></i></span>
														<select class="form-control input-lg" style="font-size:20px" id="qualification" name="qualification" onchange="changeProgressBar()" style="padding-top:12px;opacity:0.8"><option value="" disabled selected style='display:none;' >Select your Degree</option>
														<?php foreach($qualifications as $row){ 
														/*** create the options ***/
														echo '<option value="'.$row->id.'"';
														if($row->id==42)
														{
															echo ' selected';
														}
															echo '>'. $row->name . '</option>'."\n";
														}?>
														</select>
													</div>
												</div>
											</div>
										</div>		
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group"> 
														<span class="input-group-addon"><i class="si si-myspace"></i></span>
														<select class="form-control input-lg" style="font-size:20px" placeholder="Major" size="1" id="stream" name="stream" onchange="changeProgressBar()" style="padding-top:12px;opacity:0.8"><option value=""  disabled selected style='display:none;' >Major</option>
														<?php foreach($streams as $row){ 
														/*** create the options ***/
														echo '<option value="'.$row->id.'"';
														if($row->id==42)
														{
															echo ' selected';
														}
															echo '>'. $row->name . '</option>'."\n";
														}?>
														</select>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group">
														<span class="input-group-addon"><i class="gi gi-podium"></i></span>
														<input type="number" min='0' max='4' step="any" style="font-size:20px"  placeholder="GPA" data-mask="" data-inputmask="'mask': ['99.99', '99.99']" class="form-control input-lg" name="ssc" id="ssc" value="" onchange="changeProgressBar()"/>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12" >
											<div class="form-group" >
												<div>
													<div class="input-group" >
													 <span class="input-group-addon" ><i class="gi gi-book_open" ></i></span>
													<font  class="form-control input-lg"> <h4>Enter Other Degree: &nbsp&nbsp&nbsp&nbsp <input size="20" type="radio" onClick="javascript:yesnoCheck();" name="inter" id="inter"/ > Yes &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input  type="radio" onClick="javascript:yesnoCheck();" name="inter" id="inter"/> No
														</h4></font>
													</div>
											   </div>
										   </div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group"> 
														
															<span class="input-group-addon" ><i class="gi gi-book_open" ></i></span><div id="ifYes" style="visibility:hidden">
															<font size="20" class="form-control input-lg"> 	<input type='text'  style="border:none; font-size:20px" size="50" style="width:5" id="degree"  placeholder="Enter Other Degree"  class="form-control input-sm" name='degree'>
														</font>
													</div>	
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group"> 
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input type="text" style="font-size:20px" placeholder="Graduation Date (mm/yyyy) or Expected" data-mask="" data-inputmask="'mask': ['9999', '9999']" class="form-control input-lg" name="yearPassed" id="yearPassed" value="<?php echo $edit[0]->yearPassed?>" onchange="changeProgressBar()"/>
													</div>
												</div>
											</div>
										</div>
									<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
														<input type="text"  style="font-size:20px" placeholder="Current Employer (N/A if Umemployed)" class="form-control input-lg" name="currentCompany" value="<?php echo $edit[0]->currentCompany?>" />
													</div>	
												</div>
											</div>											
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<div>
													<div class="input-group"> 
														<span class="input-group-addon"><i class="gi gi-tie"></i></span>
														<input type="number" min='0' style="font-size:20px" placeholder="How Many Months of Experience" data-mask="" data-inputmask="'mask': ['9.9', '9.9']" class="form-control input-lg" name="yearsOfExp" value="<?php echo $edit[0]->yearsOfExperience?>"/>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12  col-md-12 col-sm-12 ">
											<div class="form-group">
												<div>
													<div class="input-group"> 
														<span class="input-group-addon"><i class="fa fa-info"></i></span>
														<input type="text" style="font-size:20px" id="source" name="source" placeholder="How did you know about us?" class="form-control input-lg" name="source" onchange="changeProgressBar()" value="<?php echo $edit[0]->source?>" />
													</div>
												</div>
											</div>
										</div>										
										
								
									</div>									
									
									
									<div class="row">
										<div class= "col-lg-4">
										</div>
										<div class = "col-lg-4 has-error" style="align:center">										
											<span class="help-block animation-slideDown text-center">Please re-check your contact information before registering.</span>
										</div>
										<div class= "col-lg-4">
										</div>
									</div>
									<div class="row">
										<div class= "col-lg-4">
											<input type="hidden" name="form-submitted" value="1" />	
										</div>
										<div class = "col-lg-4" style="align:center">	
											<button id='registerBtn1' class="btn btn-lg btn-primary btn-block">Update  <i class="fa fa-arrow-right"></i></button>
										</div>
										<div class= "col-lg-4">
										</div>
									</div></br>
									<?php }
								?>
								</div>
							</form>
						</div>
					</div>
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
<!--script src="assets/js/vendor/jquery.form.wizard.js"></script-->
<script src="assets/js/pages/formsWizard.js"></script>
<script type="text/javascript" src="assets/js/plugins/input-mask/jquery.inputmask.js"></script>
<script type="text/javascript" src="assets/js/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script type="text/javascript" src="assets/js/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script type="text/javascript" src="assets/js/bootstrap3-typeahead.js"></script>
<script type="text/javascript">
	
$(function(){ FormsWizard.init(); });
$(function() {
	$("#dob").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
	$("#yearPassed").inputmask("mm/yyyy", {"placeholder": "mm/yyyy"});
	
});
var allErrors=<?php echo count($errors);?>;
if(allErrors>0){
	document.getElementById("error").style.display="block";
}
/*$("#qualification").change(function (){
	$("#stream").children().remove();
	var qual=document.getElementById("qualification").value;
	var streams=<?php echo json_encode($streams); ?>;
	if(qual == 1){
		$("#stream").append("<option value='' disabled selected style='display:none;' >Select your Stream</option>");
		$.each(streams, function(i,v){
			if(v.name!="MCA"){
			$("#stream").append("<option value='"+v.id+"'>"+v.name+"</option>");
			}
		});
	}
	else{
		$.each(streams, function(i,v){
			if(v.name=="MCA"){
				$("#stream").append("<option value='"+v.id+"' selected>"+v.name+"</option>");
			}	
		});
	}
});*/
</script>
<script>
$('#college').typeahead( {
	source: function( query, process ) {
		$.post("index.php?op=getCollege", {query: query},
			function( data ) {
				var arr=data.split("-----");
				process(arr);
				jQuery(".typeahead").addClass("col-lg-9 col-md-9 col-sm-9");
			}
		);
	},
});
/*$(document).ready(function(){
$("#registerBtn1").addClass("disabled");

	$("#registerBtn1").bind("click",function(e){
		document.forms['progress-wizard'].submit();
		$(this).attr("disabled",true);
	});
	$("input[type='text']").change(function(){
		$("#registerBtn1").prop("disabled",false);
	});
	$('select').change(function(){
		$("#registerBtn1").prop("disabled",false);
	});
});	*/
</script>
<script src="assets/js/pages/formsValidation.js"></script>
<!--script>$(function(){ FormsValidation.init(); });</script-->
</body>
</html>