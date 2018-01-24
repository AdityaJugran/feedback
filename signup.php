<?php
session_start();
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="asset/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/logo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Feedback</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet" />
	<link href="asset/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="asset/css/demo.css" rel="stylesheet" />
</head>

<body>
		<div class="image-container set-full-height" style="background-image: url('assets/img/bbgg.jpg')" >
    
        	    <a href="#" class="made-with-mk">
			      <div class="brand">AJ</div>
			      <div class="made-with">Developed by <strong>Aditya</strong></div>
			    </a>    
				

			    <!--   Big container   -->
			    
			    <div class="container" >
			        <div class="row">
			        <div class="col-sm-8 col-sm-offset-2">

			            <!--      Wizard container        -->
			            <div class="wizard-container">

			                <div class="card wizard-card" data-color="orange" id="wizardProfile">
			                    <form action="signupl.php" method="POST">
			                    <!-- change the url of action -->
			                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

			                    	<div class="wizard-header">
			                        	<h3>
			                        	   <b>BUILD</b> YOUR PROFILE <br>
			                        	   <small>This information will let us know more about you.</small>
			                        	</h3>
			                    	</div>

									<div class="wizard-navigation">
										<ul>
				                            <li><a href="#about" data-toggle="tab">About</a></li>
				                            <li><a href="#account" data-toggle="tab">Academic Details</a></li>
				                            <li><a href="#address" data-toggle="tab">Personal Details</a></li>
				                        </ul>

									</div>

			                        <div class="tab-content">
			                            <div class="tab-pane" id="about">
			                              <div class="row">
			                                  <h4 class="info-text"> Let's start with the basic information</h4>
			                                  <div class="col-sm-4 col-sm-offset-1">
			                                     <div class="picture-container">
			                                          <div class="picture">
			                                              <img src="asset/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
			                                              <input type="file disabled" id="wizard-picture">
			                                          </div>
			                                          <h6>Choose Picture(Restricted)</h6>
			                                      </div>
			                                  </div>
			                                  <div class="col-sm-6">
			                                      <div class="form-group">
			                                        <label>First Name <small>(required)</small></label>
			                                        <input name="firstname" type="text" class="form-control" placeholder="First Name...">
			                                      </div>
			                                      <div class="form-group">
			                                        <label>Last Name <small>(required)</small></label>
			                                        <input name="lastname" type="text" class="form-control" placeholder="Second Name...">
			                                      </div>
			                                  </div>
			                                  <div class="col-sm-10 col-sm-offset-1">
			                                      <div class="form-group">
			                                          <label>Email <small>(required)</small></label>
			                                          <input name="email" type="email" class="form-control" placeholder="aditya@example.com">
			                                      </div>
			                                  </div>
			                                  <div class="col-sm-10 col-sm-offset-1">
			                                      <div class="form-group">
			                                          <label>password <small>(required)</small></label>
			                                          <input name="password" type="password" class="form-control" placeholder="*******" required>
			                                      </div>
			                                  </div>
			                              </div>
			                            </div>
			                            <div class="tab-pane" id="account">
			                                <h4 class="info-text"> Provide your academic details </h4>
			                                <div class="row">
			                                    <div class="col-sm-6">
			                                          <div class="col-sm-10 col-sm-offset-1">
			                                            <div class="form-group">
			                                              <label>Branch <small>(required)</small></label>
			                                              <select class="form-control" name="branch" onchange="functionx()" id="branch" required>
			                                              <!-- change values according to the database -->
			                                              <option>---------</option>
			                                              <option value="1">B.Tech</option>
			                                              <option value="2">B.Ed</option>
			                                              <option value="3">B.C.A</option>                                     
			                                              </select>
			                                            </div>
			                                          </div>
			                                          <script type="text/javascript">
			                                            function functionx(){
			                                              var x = document.getElementById("branch").value;
			                                              if(x==1)
			                                              {
			                                                var y ="<label>Stream <small>(required)</small></label><select class='form-control' name='stream' required> <option value='C.S.E'>C.S.E.</option><option value='Civil'>Civil</option>     <option value='Mechanical'>Mechanical</option><option value='E.C.E'>E.C.E</option><option value='E.E.E.'>E.E.E.</option></select>"
			                                                document.getElementById("stream").innerHTML = y;
			                                                document.getElementById("stream").style.display = 'block';
			                                              }
			                                              else
			                                              {
			                                                document.getElementById("stream").style.display = 'none';
			                                              }
			                                            }
			                                          </script>
			                                          <div class="col-sm-10 col-sm-offset-1" id="stream">
			                                            <div class="form-group">
			                                             
			                                            </div>
			                                          </div>
			                                          <div class="col-sm-10 col-sm-offset-1">
			                                           <div class="form-group">
			                                             <br> <label>Semester <small>(required)</small></label>
			                                              <input name="semester" type="number" min="1" max="8">
			                                           </div>
			                                          </div>
			                                          <div class="col-sm-10 col-sm-offset-1">
			                                           <div class="form-group">
			                                              <label>Year Of Admission <small>(required)</small></label>
			                                              <input name="year" type="number" min=<?php echo (date('Y')-3); ?> max=<?php echo date('Y')?>>
			                                         </div>
			                                          </div>
			                                          <div class="col-sm-10 col-sm-offset-1">
			                                           <div class="form-group">
			                                              <label>Lateral Entry <small>(required)</small></label><br>
			                                              <input name="late" type="radio" value='1'>Yes&nbsp;&nbsp;
			                                              <input name="late" type="radio" value='2'>
			                                              <!-- don't give value 0 bcz it won't work in api -->
			                                              No
			                                           </div>
			                                          </div>

			                                          <div class="col-sm-10 col-sm-offset-1">
			                                           <div class="form-group">
			                                              <label>Gender <small>(required)</small></label><br>
			                                              <input name="gender" type="radio" value='male'>MALE&nbsp;&nbsp;
			                                              <input name="gender" type="radio" value='female'>FEMALE
			                                           </div>
			                                          </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="tab-pane" id="address">
			                                <div class="row">
			                                    <div class="col-sm-12">
			                                        <h4 class="info-text">HELP US TO CONNECT WITH YOU </h4>
			                                    </div>
			                                    <div class="col-sm-7 col-sm-offset-1">
			                                         <div class="form-group">
			                                            <label>Phone Number</label>
			                                            <input type="text" class="form-control" name="phone" placeholder="9876543210">
			                                          </div>
			                                    </div>
			                                    <div class="col-sm-7 col-sm-offset-1">
			                                         <div class="form-group">
			                                            <label>Roll Number</label>
			                                            <input type="text" name="roll_number" class="form-control" name="roll_no" placeholder="91***" required>
			                                          </div>
			                                    </div>
			                                    
			                                    <div class="col-sm-7 col-sm-offset-1">
			                                         <div class="form-group">
			                                            <label>Registration Number</label>
			                                            <input type="text" name="reg_number" class="form-control" placeholder="67/25***" required>
			                                          </div>
			                                    </div>
			                                  </div>
			                            </div>
			                        </div>
			                        <div class="wizard-footer height-wizard">
			                            <div class="pull-right">
			                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
			                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

			                            </div>

			                            <div class="pull-left">
			                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
			                            </div>
			                            <div class="clearfix"></div>
			                        </div>

			                    </form>
			                </div>
			            </div> <!-- wizard container -->
			        </div>

			        </div><!-- end row -->
			        <!-- <div class="row">
			          <div class="col-sm-8 col-sm-offset-2">
			          <br>
			          <br>
			          <a href="#pablo" class="btn btn-warning btn-round btn-fill btn-lg btn-block">Back toLogin</a>
			          
			          </div>
			        </div> -->
			    </div> <!--  big container -->
	    
		</div>


</body>

	<!--   Core JS Files   -->
	<script src="asset/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="asset/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="asset/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="asset/js/gsdk-bootstrap-wizard.js"></script>

	
	<script src="asset/js/jquery.validate.min.js"></script>
<?php 
if(!empty($_SESSION['error']))
{
    echo "<script>alert('Some error has occured try again')</script>";
    session_destroy();
}

?>

</html>
