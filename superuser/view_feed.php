
<?php session_start();
$_SESSION['student']=NULL;
include '../restServices/vendor1/common.php';
$path=$url.'average/'.$_SESSION['faculty_id'].'/'.$_GET['sub_id'].'/1/'.$_GET['stream'].'/';
$faculty = file_get_contents($path);
$arr1= json_decode($faculty, true);
// print_r($arr1);
if($arr1['success']==1)
{
    $_SESSION['student']=$arr1['total_students'];
}
$total=0;
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


    <div class="self wrapper ">

       

         <form id="form" name="form">

          <div class="container-fluid">
          <br>
           <h2 style="text-align:center;color:red"><b>KIIT COLLEGE OF ENGINEERING</b></h2>
    <i><p style="text-align:left"><strong>Feedback Period : </strong><?php if(date('m')>='08' AND date('m')<='12'){echo 'August-December, ' .date('Y');} if(date('m')>='01' AND date('m')<='05'){echo 'January-May, ' .date('Y');}  ?><strong></strong></p>
        <p style="text-align:left"><strong>Feedback Name :</strong> End-Semester / Mid-Semester</p>
        <p style="text-align:left"><strong>Faculty Name :</strong><?php echo $_GET['faculty_name'];?></p>

        <p style="text-align:left"><strong>Class :  </strong><?php echo $_GET['stream']." ".$_GET['sem']?></p>
        <p style="text-align:left"><strong>Total Students :  </strong><?php echo $_SESSION['student'];?></p>
    </i><hr style="background-color:white">
  

<div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">1. The lectures are well organized & presented clearly.</p>
    </div>
    
	<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
     <b><input disabled type="number" min=0 max=4 value="<?php echo $arr1['average'];?>" class="form-control" onclick="changeColor()" required style="color:black;text-align:center" id="change"></b>
    </div>
	
 </div>

<div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">2. The lectures are interactive.</p>
    </div>
    <?php 
    $path=$url.'average/'.$_SESSION['faculty_id'].'/'.$_GET['sub_id'].'/2/'.$_GET['stream'].'/';
    $faculty = file_get_contents($path);
    $arr2= json_decode($faculty, true);
    $total=$total+$arr1['average']+$arr2['average'];
    ?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <b><input disabled type="number" min=0 max=4 value="<?php echo $arr2['average'];?>" class="form-control" onclick="changeColor()" required style="color:black;text-align:center" id="change"></b>

    </div>
    
 </div>
<div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">3. The concepts are linked properly to practical applications.</p>
    </div>
    <?php 
    $path=$url.'average/'.$_SESSION['faculty_id'].'/'.$_GET['sub_id'].'/3/'.$_GET['stream'].'/';
    $faculty = file_get_contents($path);
    $arr2= json_decode($faculty, true);
    $total=$total+$arr2['average'];
    ?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <b><input disabled type="number" min=0 max=4 value="<?php echo $arr2['average'];?>" class="form-control" onclick="changeColor()" required style="color:black;text-align:center" id="change"></b>
    </div>
   
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">4. The assignments, projects & quizzes are adequate & useful.</p>
    </div>
     <?php 
    $path=$url.'average/'.$_SESSION['faculty_id'].'/'.$_GET['sub_id'].'/4/'.$_GET['stream'].'/';
    $faculty = file_get_contents($path);
    $arr2= json_decode($faculty, true);
    $total=$total+$arr2['average'];
    ?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <b><input disabled type="number" min=0 max=4 value="<?php echo $arr2['average'];?>" class="form-control" onclick="changeColor()" required style="color:black;text-align:center" id="change"></b>
    </div>
    
 </div>
<div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">5. Querries & discussions are encouraging & answered satisfactorily.</p>
    </div>
     <?php 
    $path=$url.'average/'.$_SESSION['faculty_id'].'/'.$_GET['sub_id'].'/5/'.$_GET['stream'].'/';
    $faculty = file_get_contents($path);
    $arr2= json_decode($faculty, true);
    $total=$total+$arr2['average'];
    ?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <b><input disabled type="number" min=0 max=4 value="<?php echo $arr2['average'];?>" class="form-control" onclick="changeColor()" required style="color:black;text-align:center" id="change"></b>
    </div>
    
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">6. The recommended books & other reading material are available.</p>
    </div>
     <?php 
    $path=$url.'average/'.$_SESSION['faculty_id'].'/'.$_GET['sub_id'].'/6/'.$_GET['stream'].'/';
    $faculty = file_get_contents($path);
    $arr2= json_decode($faculty, true);
    $total=$total+$arr2['average'];
    ?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <b><input disabled type="number" min=0 max=4 value="<?php echo $arr2['average'];?>" class="form-control" onclick="changeColor()" required style="color:black;text-align:center" id="change"></b>
    </div>
    
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">7. Timeliness - lectures start & end at scheduled time.</p>
    </div>
     <?php 
    $path=$url.'average/'.$_SESSION['faculty_id'].'/'.$_GET['sub_id'].'/7/'.$_GET['stream'].'/';
    $faculty = file_get_contents($path);
    $arr2= json_decode($faculty, true);
    $total=$total+$arr2['average'];
    ?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <b><input disabled type="number" min=0 max=4 value="<?php echo $arr2['average'];?>" class="form-control" onclick="changeColor()" required style="color:black;text-align:center" id="change"></b>
    </div>
    
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">8. Faculty is concerned for student's understanding of the subjects.</p>
    </div>
     <?php 
    $path=$url.'average/'.$_SESSION['faculty_id'].'/'.$_GET['sub_id'].'/8/'.$_GET['stream'].'/';
    $faculty = file_get_contents($path);
    $arr2= json_decode($faculty, true);
    $total=$total+$arr2['average'];
    ?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <b><input disabled type="number" min=0 max=4 value="<?php echo $arr2['average'];?>" class="form-control" onclick="changeColor()" required style="color:black;text-align:center" id="change"></b>
    </div>
    
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">9. Timely evaluation of quizzes, assignments & class tests.</p>
    </div>
     <?php 
    $path=$url.'average/'.$_SESSION['faculty_id'].'/'.$_GET['sub_id'].'/9/'.$_GET['stream'].'/';
    $faculty = file_get_contents($path);
    $arr2= json_decode($faculty, true);
    $total=$total+$arr2['average'];
    ?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <b><input disabled type="number" min=0 max=4 value="<?php echo $arr2['average'];?>" class="form-control" onclick="changeColor()" required style="color:black;text-align:center" id="change"></b>
    </div>
    
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">10. Fairness in evaluation of quizzes, assignments & class tests.</p>
    </div>
     <?php 
    $path=$url.'average/'.$_SESSION['faculty_id'].'/'.$_GET['sub_id'].'/10/'.$_GET['stream'].'/';
    $faculty = file_get_contents($path);
    $arr2= json_decode($faculty, true);
    $total=$total+$arr2['average'];
    ?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <b><input disabled type="number" min=0 max=4 value="<?php echo $arr2['average'];?>" class="form-control" onclick="changeColor()" required style="color:black;text-align:center" id="change"></b>
    </div>
    
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">11. The aim & objective of course were fulfilled to maximum.</p>
    </div>
     <?php 
    $path=$url.'average/'.$_SESSION['faculty_id'].'/'.$_GET['sub_id'].'/11/'.$_GET['stream'].'/';
    $faculty = file_get_contents($path);
    $arr2= json_decode($faculty, true);
    $total=$total+$arr2['average'];
    ?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <b><input disabled type="number" min=0 max=4 value="<?php echo $arr2['average'];?>" class="form-control" onclick="changeColor()" required style="color:black;text-align:center" id="change"></b>
    </div>
    
 </div>
 <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:justify;font-size:18px">12. Syllabus cover- 60%(0), 70%(1), 80%(2), 90%(3), 90%-100%(4).</p>
    </div>
     <?php 
    $path=$url.'average/'.$_SESSION['faculty_id'].'/'.$_GET['sub_id'].'/12/'.$_GET['stream'].'/';
    $faculty = file_get_contents($path);
    $arr2= json_decode($faculty, true);
    $total=$total+$arr2['average'];
    ?>
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <b><input disabled type="number" min=0 max=4 value="<?php echo $arr2['average'];?>" class="form-control" onclick="changeColor()" required style="color:black;text-align:center" id="change"></b> 
    </div>
    
 </div>

    </form>
    <hr style="background-color:white">
    <div class="row">
    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
    <p style="text-align:right;font-size:18px">RATING:</p>
    </div>
     
    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <p style="text-align:left;font-size:18px"> <?php echo $total/(12*$_SESSION['student']);?></p>
    </div>
    
 </div>
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