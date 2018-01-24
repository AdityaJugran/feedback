<?php session_start();
include '../restServices/vendor1/common.php';
if(empty($_SESSION['id']))
{
    header('Location: ../index.php');
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
$data = $url.'profile/'.$_SESSION['id'].'/';
$profile = file_get_contents($data);

$arr= json_decode($profile, true);
$_SESSION['stream']=$arr['data']['stream'];
if($arr['data']['gender']=='male')
{
    $img = 'avatar2.png';
}
else
{
    $img = 'avatar1.png';
}

$feed = $url.'feedback/'.$_SESSION['id'].'/';
$feed_back = file_get_contents($feed);

$chk= json_decode($feed_back, true);
// print_r($chk);

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
                    <p class="category"><?php echo $arr['data']['stream']." ".$arr['data']['sem']." Semester";?></p>

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
                    <a href="index.php" class="btn btn-primary btn-round btn-lg">Profile</a>
                    <?php if($chk['success']==0){?>
                     <a href="feed_back.php" class="btn btn-primary btn-round btn-lg">Feedback</a><?php }else{?>
                        <a href="#" class="btn btn-primary btn-round btn-lg" >Feedback</a><?php }?>
                     <a href="logout.php" class="btn btn-primary btn-round btn-lg ">LOGOUT</a>
                      </div>
                <h3 class="title">WELCOME <?php echo $arr['data']['name'];?></h3>
                <h5 class="description" style="text-align:left;">
                    Roll Number         : <?php echo $arr['data']['roll_no'];?><br>
                    Registration Number : <?php echo $arr['data']['registration_id'];?><br>
                    Email : <?php echo $arr['data']['email'];?><br>
                    Year of Admission : <?php echo $arr['data']['year_of_admission'];?><br>
                    Feed Back :<?php if($chk['success']==0){ echo "Please provide Your Feedback";}else{echo "Your feedback has been Submitted";} ?>
                    
                </h5>
               
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