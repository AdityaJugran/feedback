<?php session_start();
include '../restServices/vendor1/common.php';
if(empty($_SESSION['id']))
{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Feedback</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" >
    <script>

</script>
    </head>
<body style="background-image:url(../assets/img/NEWBG.JPG);color: white;width: 100%;height: 100%;">

<?php
$data = $url.'profile/'.$_SESSION['id'].'/';
$profile = file_get_contents($data);

$arr= json_decode($profile, true);


?>
    <div class="self wrapper ">

       

         <form id="form" name="form" method="POST" action="results.php">

          <div class="container-fluid">
           <h2 style="text-align:center;color:red"><b>KIIT COLLEGE OF ENGINEERING</b></h2>
           <h4 style="text-align:center">Feedback Form : <i>Poor(0), Fair(1), Average(2), Good(3), Excellent(4)</i></h4><br>
    <i><p style="text-align:left"><strong>Feedback Period : </strong><?php if(date('m')>='08' AND date('m')<='12'){echo 'August-December, ' .date('Y');} if(date('m')>='01' AND date('m')<='05'){echo 'January-May, ' .date('Y');}  ?><strong></strong></p>
        <p style="text-align:left"><strong>Feedback Name :</strong> End-Semester / Mid-Semester</p>
        <p style="text-align:left"><strong>Class :  </strong><?php echo $arr['data']['stream']." ".$arr['data']['sem']?></p>
    </i><hr style="background-color:white">
    <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <h5 style="text-align:right">Faculty :</h5>
    </div>
    <?php 
    $data = $url.'fbdrow/'.$arr['data']['sem'].'/'.$_SESSION['stream'].'/';
	$faculty = file_get_contents($data);
	$arr1= json_decode($faculty, true);
    $count=count($arr1['data']);
    // print_r($arr1);
	for($i=0;$i<$count;$i++)
	{?>
		<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <p><?php echo $arr1['data'][$i]['faculty'];?></p>
    </div>
	<?php }
    ?>
      </div>

<div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <h5 style="text-align:right">Subject :</h5>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
	{?>
		<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <p><?php echo $arr1['data'][$i]['subject_name'];?></p>
    </div>
	<?php }
    ?>
      </div>

<div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">1. The lectures are well organized & presented clearly.</p>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
	{?>
	<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input type="number" min=0 max=4 name="<?php echo "1/".$arr1['data'][$i]['faculty_id']."/".$arr1['data'][$i]['subject_id'];?>" class="form-control" onclick="changeColor()" required style="color:white;text-align:center" id="change"></b>
    </div>
	<?php }
    ?>
 </div>

<div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">2. The lectures are interactive.</p>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
    {?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input type="number" min=0 max=4 name="<?php echo "2/".$arr1['data'][$i]['faculty_id']."/".$arr1['data'][$i]['subject_id'];?>" class="form-control" required style="color:white;text-align:center"></b>
    </div>
    <?php }
    ?>
 </div>
<div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">3. The concepts are linked properly to practical applications.</p>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
    {?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input type="number" min=0 max=4 name="<?php echo "3/".$arr1['data'][$i]['faculty_id']."/".$arr1['data'][$i]['subject_id'];?>" class="form-control" required style="color:white;text-align:center"></b>
    </div>
    <?php }
    ?>
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">4. The assignments, projects & quizzes are adequate & useful.</p>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
    {?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input type="number" min=0 max=4 name="<?php echo "4/".$arr1['data'][$i]['faculty_id']."/".$arr1['data'][$i]['subject_id'];?>" class="form-control" required style="color:white;text-align:center"></b>
    </div>
    <?php }
    ?>
 </div>
<div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">5. Querries & discussions are encouraging & answered satisfactorily.</p>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
    {?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input type="number" min=0 max=4 name="<?php echo "5/".$arr1['data'][$i]['faculty_id']."/".$arr1['data'][$i]['subject_id'];?>" class="form-control" required style="color:white;text-align:center"></b>
    </div>
    <?php }
    ?>
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">6. The recommended books & other reading material are available.</p>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
    {?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input type="number" min=0 max=4 name="<?php echo "6/".$arr1['data'][$i]['faculty_id']."/".$arr1['data'][$i]['subject_id'];?>" class="form-control" required style="color:white;text-align:center"></b>
    </div>
    <?php }
    ?>
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">7. Timeliness - lectures start & end at scheduled time.</p>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
    {?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input type="number" min=0 max=4 name="<?php echo "7/".$arr1['data'][$i]['faculty_id']."/".$arr1['data'][$i]['subject_id'];?>" class="form-control" required style="color:white;text-align:center"></b>
    </div>
    <?php }
    ?>
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">8. Faculty is concerned for student's understanding of the subjects.</p>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
    {?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input type="number" min=0 max=4 name="<?php echo "8/".$arr1['data'][$i]['faculty_id']."/".$arr1['data'][$i]['subject_id'];?>" class="form-control" required style="color:white;text-align:center"></b>
    </div>
    <?php }
    ?>
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">9. Timely evaluation of quizzes, assignments & class tests.</p>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
    {?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input type="number" min=0 max=4 name="<?php echo "9/".$arr1['data'][$i]['faculty_id']."/".$arr1['data'][$i]['subject_id'];?>" class="form-control" required style="color:white;text-align:center"></b>
    </div>
    <?php }
    ?>
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">10. Fairness in evaluation of quizzes, assignments & class tests.</p>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
    {?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input type="number" min=0 max=4 name="<?php echo "10/".$arr1['data'][$i]['faculty_id']."/".$arr1['data'][$i]['subject_id'];?>" class="form-control" required style="color:white;text-align:center"></b>
    </div>
    <?php }
    ?>
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">11. The aim & objective of course were fulfilled to maximum.</p>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
    {?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input type="number" min=0 max=4 name="<?php echo "11/".$arr1['data'][$i]['faculty_id']."/".$arr1['data'][$i]['subject_id'];?>" class="form-control" required style="color:white;text-align:center"></b>
    </div>
    <?php }
    ?>
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">12. Syllabus cover- 60%(0), 70%(1), 80%(2), 90%(3), 90%-100%(4).</p>
    </div>
    <?php 
    for($i=0;$i<$count;$i++)
    {?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input type="number" min=0 max=4 name="<?php echo "12/".$arr1['data'][$i]['faculty_id']."/".$arr1['data'][$i]['subject_id'];?>" class="form-control" required style="color:white;text-align:center;"></b>
    </div>
    <?php }
    ?>
 </div>
<div class="button-container">
       <center><input type="submit" value="SUBMIT"  class="btn btn-primary btn-round btn-lg"></center>
                    


    </div>
    </form>

     <footer class="footer">
            <div class="container">
                  <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    Coded by
                    Aditya Jugran.
                </div>
            </div>
        </footer>
    </div>

</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js" type="text/javascript"></script>

</html>