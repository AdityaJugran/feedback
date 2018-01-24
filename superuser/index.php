<?php
session_start();
// if(empty($_SESSION['error']))
// {
//     $_SESSION['error']=0;
// }
if(!empty($_SESSION['faculty_id']))
{
    header('Location: profile.php ');
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
   
</head>

<body class="login-page">
    <!-- Navbar -->
    <!-- <nav class="navbar bg-primary fixed-top navbar-transparent " color-on-scroll="500">
        <div class="container">
            
           
        </div>
    </nav> -->
    <!-- End Navbar -->
    <div class="page-header" filter-color="orange">

        <div class="page-header-image" style="background-image:url(../assets/img/bbgg.jpg)"></div>
        <div class="container">
        
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="post" action="teach.php">
                    <!-- form method and action  -->
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="../assets/img/newlogo.png" alt="Feedback">
                            </div>
                        </div>
                        <div class="content">
                        <div class="input-group form-group-no-border input-lg">
                                <h2 style="text-align:center;">Welcome... </h2>
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" class="form-control" name="username" placeholder="Email...">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input type="password" name="password" placeholder="Password..." class="form-control" />
                            </div>
                        </div>
                        <div class="footer text-center">
                            <input type="submit" value="LOGIN" class="btn btn-primary btn-round btn-lg btn-block">
                        </div>
                        
                                              
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed and developed by
                    Aditya Jugran
                </div>
            </div>
        </footer>
    </div>
</body>


<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/now-ui-kit.js" type="text/javascript"></script>
<!-- custom scripts -->
<?php 
if(!empty($_SESSION['error']))
{
    echo "<script>alert('username or password incorrect')</script>";
    session_destroy();
}

?>
</html>