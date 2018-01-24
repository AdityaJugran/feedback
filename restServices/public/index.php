<?php 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once '../vendor/autoload.php';
require_once '../action/controller.php';

		

$app = new \Slim\App;

$app->get('/Login/{email}/{password}/',\controller::class . ':login');
$app->get('/profile/{id}/',\controller::class . ':profile');
$app->get('/signup/{name}/{email}/{phone}/{password}/{yoa}/{late}/{sem}/{reg_id}/{college_id}/{roll_no}/{stream}/{gender}/',\controller::class . ':signup');
$app->get('/feedback/{id}/',\controller::class . ':feedback');
$app->get('/fbdrow/{sem}/{stream}/',\controller::class . ':fbdrow');
$app->get('/result/{student_id}/{ques_id}/{faculty}/{subject}/{value}/',\controller::class . ':result');
$app->get('/chk/{student_id}/',\controller::class . ':chk');

$app->get('/Login1/{email}/{password}/',\controller::class . ':login1');
$app->get('/profile1/{id}/',\controller::class . ':profile1');
$app->get('/teacher_results/{id}/',\controller::class . ':teacher_results');
$app->get('/average/{faculty_id}/{subject_id}/{ques_id}/{stream}/',\controller::class . ':average');
$app->get('/addfac/{name}/{email}/{password}/{gender}/',\controller::class . ':addfaculty');
$app->get('/viewfac/',\controller::class . ':viewfac');
$app->get('/removef/{id}/',\controller::class . ':removef');
$app->get('/viewsub/',\controller::class . ':viewsub');
$app->get('/removes/{id}/',\controller::class . ':removes');
$app->get('/addsub/{name}/{code}/{sem}/',\controller::class . ':addsub');
$app->get('/asign/{sub_id}/{faculty_id}/{sem}/{stream}/',\controller::class . ':asign');
$app->get('/assignview/',\controller::class . ':assignview');
$app->get('/unassign/{id}/',\controller::class . ':unassign');
$app->get('/viewstudent/{sem}/{stream}/',\controller::class . ':viewstudent');




$app->run();

?>