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
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>
<body>
<div id="page-wrapper">
  <form id="form" name="form" method="POST">
  <div class="container">
    <h2 style="text-align:center"><b>KIIT COLLEGE OF ENGINEERING</b></h2>
    <h4 style="text-align:center">Feedback Form : <i>Poor(0), Fair(1), Average(2), Good(3), Excellent(4)</i></h4><br>
    <i><p><strong>Feedback Period : </strong><?php if(date('m')>='08' AND date('m')<='12'){echo 'August-December, ' .date('Y');} if(date('m')>='01' AND date('m')<='05'){echo 'January-May, ' .date('Y');}  ?><strong></strong></p>
      <input type="hidden" name="month" value="<?php echo date('m'); ?>" id="month">
      <input type="hidden" name="year" value="<?php echo date('Y'); ?>" id="year">
    <p><strong>Feedback Name :</strong> End-Semester / Mid-Semester</p>
    <input type="hidden" name="stream" value="<?php echo $query['id']; ?>" id="stream">
    <input type="hidden" name="reg_id" value="<?php echo $_SESSION['reg_id'];?>" id="reg_id">
    <input type="hidden" name="semester" value="<?php echo $sem ; ?>" id="semester">
    <input type="hidden" name="course" value="<?php echo $query['course_name'] ; ?>" id="course">
    <p><strong>Class :  </strong>CSE</p>
    
     <hr>

     <!-- FACULTY  -->
     <div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <p> <h4 style="text-align:right">Faculty :</h4></p>
  </div>
<!-- NEW FACULTY QUerry :- use it for use in feedback form to print using some api
SELECT `sub`.`subject_name`, `fd`.`name`
FROM `subjects` AS `sub` 
LEFT JOIN `assign_subject` AS `ass`
ON ass.`subject_id`=`sub`.`id`
LEFT JOIN `faculty_details` AS `fd`
ON `fd`.`id`=`ass`.`faculty_id`

WHERE `semester`='7'; -->





      <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
        <input type="hidden"  value="" id="f" name="f[]" >
        <p>CSE</p>
      </div>
  
</div>
<!-- FACULTY -->

<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <p> <h4 style="text-align:right">Course Title :</h4></p>
  </div>

      <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
        <input type="hidden"  value="" id="ct" name="ct[]" >
        <p>subject</p>
      </div>

</div>
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <p> <h4 style="text-align:right">Course Code :</h4></p>
  </div>

      <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
        <input type="hidden"  value="" id="cd" name="cd[]" >
        <p>Sample code</p>
      </div>
 </div>
<table class="table table-striped">
  <tbody>
 <div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <input type="hidden" name="q1id" value="1">
    <p> <h4>1. The lectures are well organized & presented clearly.</h4></p>
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q1[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q1[]" class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q1[]"   class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4  name="q1[]"   class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q1[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q1[]"  class="form-control" required id="t1">
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <input type="hidden" name="q2id" value="2">
    <p> <h4>2. The lectures are interactive.</h4></p>
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4  name="q2[]" class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4  name="q2[]" class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q2[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q2[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4  name="q2[]" class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q2[]"  class="form-control" required id="t1">
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <input type="hidden" name="q3id" value="3">
    <p> <h4>3. The concepts are linked properly to practical applications.</h4></p>
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q3[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q3[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4  name="q3[]" class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q3[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q3[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q3[]"  class="form-control" required id="t1">
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <input type="hidden" name="q4id" value="4">
    <p> <h4>4. The assignments, projects & quizzes are adequate & useful.</h4></p>
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4  name="q4[]" class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q4[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q4[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q4[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q4[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q4[]"  class="form-control" required id="t1">
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <input type="hidden" name="q5id" value="5">
    <p> <h4>5. Querries & discussions are encouraging & answered satisfactorily.</h4></p>
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q5[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q5[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4  name="q5[]" class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q5[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q5[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4  name="q5[]" class="form-control" required id="t1">
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <input type="hidden" name="q6id" value="6">
    <p> <h4>6. The recommended books & other reading material are available.</h4></p>
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q6[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q6[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q6[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q6[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q6[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q6[]"  class="form-control" required id="t1">
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <input type="hidden" name="q7id" value="7">
    <p> <h4>7. Timeliness - lectures start & end at scheduled time.</h4></p>
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q7[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q7[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q7[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q7[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q7[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q7[]"  class="form-control" required id="t1">
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
   <input type="hidden" name="q8id" value="8">
    <p> <h4>8. Faculty is concerned for student's understanding of the subjects.</h4></p>
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q8[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q8[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q8[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q8[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q8[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q8[]"  class="form-control" required id="t1">
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <input type="hidden" name="q9id" value="9">
    <p> <h4>9. Timely evaluation of quizzes, assignments & class tests.</h4></p>
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q9[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q9[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q9[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q9[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q9[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q9[]"  class="form-control" required id="t1">
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <input type="hidden" name="q10id" value="10">
    <p> <h4>10. Fairness in evaluation of quizzes, assignments & class tests.</h4></p>
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q10[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q10[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q10[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q10[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q10[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q10[]"  class="form-control" required id="t1">
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <input type="hidden" name="q11id" value="11">
    <p> <h4>11. The aim & objective of course were fulfilled to maximum.</h4></p>
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q11[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q11[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4  name="q11[]" class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q11[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q11[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q11[]"  class="form-control" required id="t1">
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <input type="hidden" name="q12id" value="12">
    <p> <h4>12. Syllabus cover- 60%(0), 70%(1), 80%(2), 90%(3), 90%-100%(4).</h4></p>
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q12[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q12[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q12[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q12[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q12[]"  class="form-control" required id="t1">
  </div>
  <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
    <input type="number" min=0 max=4 name="q12[]"  class="form-control" required id="t1">
  </div>
</div>
</tbody>
</table>
<hr>


         <div class="row">
            <div class="form-group" style=" width: 20%; margin-left: auto; margin-right: auto;">
              <input type="submit" class="btn btn-primary" name="feedBack" value="Submit" style="width:54%;">
            </div>
         </div>
 
 </div>
 </form>
</div>


            <footer class="footer footer-default">
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