<?php 
session_start();
require("sidebar.php");
include '../restServices/vendor1/common.php';



$log = $url.'viewfac/';

$try_json = file_get_contents($log);
// echo $try_json;
$arr= json_decode($try_json, true);
$count=0;
for($i=0;$i<9;$i++)
{
if($_GET['sem']==$i)
{
  $sem=$i;
}
}
?>
<script type="text/javascript">
    function sem_id(obj){
      window.location.href ='assign.php?sem='+obj;
    }
</script>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Assign Subjects</h3>
              </div>

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Assign Subjects- Faculty<small></small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="direction/assign.php">
                   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="sem">Semester<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="sem" name="sem" class="form-control" onchange="sem_id(this.value)" required>
                        <option value="">Choose..</option>
                        <?php for($i=1;$i<=8;$i++){ ?>
                        <option value="<?php echo $i;?>" <?php if($i==$sem)echo 'selected'; ?>  ><?php echo $i; ?></option>
                       <?php }?>
                      </select>                       
                     </div>
                      </div>

                                                
			                         

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" name="subject" for="sub">Subjects <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" id="sub">
                        <select name="subjects" class="form-control" required>
                        <option value="">Choose..</option>
                        <?php 
                      
                                                      $log = $url.'viewsub/';
                                                      
                                                      $try_json = file_get_contents($log);
                                                      // echo $try_json;
                                                      $arr1= json_decode($try_json, true);
                                                      $c=0;
                                                      // print_r(count($arr['data']));
                                                      while($c<count($arr1['data']))
                                                      {
                                                        if($sem==$arr1['data'][$c]['sem'])
                                                        {
                                                    ?>
			                                              <option value="<?php echo $arr1['data'][$c]['id'];?>"><?php echo $arr1['data'][$c]['name']."-".$arr1['data'][$c]['code'];?></option>
                                                        <?php } $c++;}?>
                       

                      </select>   
                        </div>
                      </div>
                      
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" name="faculty" for="fac">Faculty <aspan class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="fac"name="faculty" class="form-control" required>
                        <option value="">Choose..</option>
                        <?php  if($arr['success']==1)
                      {
                        while($count<count($arr['data']))
                        {
                    ?>
                        <option value="<?php echo $arr['data'][$count]['id'];?>"><?php echo $arr['data'][$count]['name']; ?></option>
                      <?php $count++;}}?> 
                        
                      
                      </select>   
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" name="faculty" for="fac">Stream <aspan class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="stream" name="stream" class="form-control" required>
                        <option value="">Choose..</option>
                       
                        <option value="1">C.S.E.</option>
                        <option value="2">Civil</option>
                        <option value="3">Mechanical</option>
                        <option value="4">E.C.E.</option>
                        <option value="5">E.E.E.</option>
                        <option value="6">B.C.A.</option>
                        <option value="7">B.Ed</option>

                      </select>   
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" class="btn btn-success pull-right">Assign</button>
                        </div>
                      </div>

                    </form>
                    <?php
                    if(!empty($_SESSION['error']))
                    {
                      echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true's>×</span>
                      </button>
                      <strong>ALERT!!</strong>".$_SESSION['message'].".
                    </div>";
                    
                    }
                    session_destroy();
                    

        
                  ?>
                       
                     </div>
               
                     <br />
                    <br />
                    <br />
                    <br />
                    <br />
                       <br />
                    <br />
                    <br />
                    <br />
                    <br />      <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                   
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                  </div>
                </div>
              </div>
            </div>

            <?php require("footer.php")?>
