<?php session_start();
include '../restServices/vendor1/common.php';
if(empty($_SESSION['faculty_id']))
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
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body class="profile-page">

<!-- data fetching -->
<?php
$data = $url.'profile1/'.$_SESSION['faculty_id'].'/';
$profile = file_get_contents($data);

$arr= json_decode($profile, true);
if($arr['data']['gender']=='male')
{
    $img = 'malea.png';
}
else
{
    $img = 'femalea.png';
}

$rst= $url.'teacher_results/'.$_SESSION['faculty_id'].'/';
$result = file_get_contents($rst);

$arr1= json_decode($result, true);
// print_r(count($arr1['data']));
?>
<!-- end -->
    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/header.jpg');">
            </div>
            <div class="container">                



                <div class="content-center">

                    <div class="photo-container">
                        <img src="../assets/img/<?php echo $img;?>" alt="">
                    </div>

                    <h3 class="title"><?php echo $arr['data']['name'];?></h3>
                    <h3 class="title"><?php echo $arr['data']['email'];?></h3>

                    <div class="content">
                        <!-- <div class="social-description">
                            <h2>26</h2>
                            <p>Comments</p>
                        </div>
                        <div class="social-description">
                            <h2>26</h2>
                            <p>Comments</p>
                        </div>
                        <div class="social-description">
                            <h2>48</h2>
                            <p>Bookmarks</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="button-container">
                    <a href="profile.php" class="btn btn-primary btn-round btn-lg">Feedbacks</a>
                   
                     <a href="logout.php" class="btn btn-primary btn-round btn-lg ">LOGOUT</a>
                      </div>
                <h3 class="title"> <?php echo $arr['data']['name'];?>, your feedbacks results are :  </h3>
                <table class="table table-bordered table-striped">

                <tr>
                    <th>S no.</th>
                    <th colspan="2">Subjects(s)</th>
                    <th>Results</th>
                </tr>
                <?php 
                $count =0;
                while($count < count($arr1['data'])){
                ?>
                <tr>
                <td><?php echo $count+1;?></td>
                <td colspan="2"><?php echo $arr1['data'][$count]['subject_name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$arr1['data'][$count]['stream']."&nbsp;".$arr1['data'][$count]['semester'];?></td>
                <td><a href="view_feed.php?faculty_id=<?php echo $_SESSION['faculty_id'];?>&faculty_name=<?php echo $arr['data']['name'];?>&stream=<?php echo $arr1['data'][$count]['stream'];?>&sem=<?php echo $arr1['data'][$count]['semester'];?>&sub_id=<?php echo $arr1['data'][$count]['subject_id'];?>&sub_name=<?php echo $arr1['data'][$count]['subject_name'];?>">Views</a></td>
                </tr>
                <?php $count++;} ?>
                </table>
               
        </div>

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