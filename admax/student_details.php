<?php session_start();
include '../restServices/vendor1/common.php';
require("sidebar.php");?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Student Details</h3>
              </div>

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Search the class you are looking for<small></small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="direction/coustom.php">
                    <!-- <label for="heard">Heard us by *:</label>
                          <select id="heard" class="form-control" required>
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                          </select> -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" name="semester" for="sem">Semester<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="sem" name="sem" class="form-control" required>
                        <option value="">Choose..</option>
                        <?php $sem=1;
                        for($sem=1;$sem<=8;$sem++){?>
                        <option value="<?php echo $sem;?>"><?php echo $sem;?></option>
                        <?php }?>
                      </select>                       
                     </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" name="stream" for="sub">Stream <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="stream" name="stream" class="form-control" required>
                        <option value="">Choose..</option>
                       
                        <option value="C.S.E.">C.S.E.</option>
                        <option value="Civil">Civil</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="E.C.E.">E.C.E.</option>
                        <option value="E.E.E.">E.E.E.</option>
                        <option value="B.C.A.">B.C.A.</option>
                        <option value="B.Ed">B.Ed</option>

                      </select>     
                        </div>
                      </div>
                      
                     
                    
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" class="btn btn-success pull-right"><span class="fa fa-search"></span>&nbsp;&nbsp;Search</button>
                        </div>
                      </div>

                    </form>
                    <div class="ln_solid"></div>

                      <div class="col-md-12 col-sm-12 col-xs-12">
                         
                           <div class="x_title">
                            <h2>Class Detailsy<small></small></h2>
                   
                           <div class="clearfix"></div>
                      </div>
                      <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        <th>S.NO</th>
                          <th>Student_id</th>
                          <th>Student Name</th>
                          <th>Email</th>
                          <th>Registration number</th>
                          <th>Year Of Admission</th>
                          </tr>
                      </thead>
                       

                      <tbody>
                      <?php if(!empty($_SESSION['activate'])){

                         
                      $log = $url.'viewstudent/'.$_SESSION['sem'].'/'.$_SESSION['stream'].'/';
                      
                      $try_json = file_get_contents($log);
                      // echo $try_json;
                      $arr= json_decode($try_json, true);
                      $count=0;
                      // print_r(count($arr['data']));
                      if($arr['success']==1)
                      {
                        while($count<count($arr['data']))
                        {
                    ?>

                        <tr>
                          <td><?php echo $count+1;?></td>
                          <td><?php echo $arr['data'][$count]['id']?></td>
                          <td><?php echo $arr['data'][$count]['name']?></td>
                          <td><?php echo $arr['data'][$count]['email']?></td>
                          <td><?php echo $arr['data'][$count]['registration_id']?></td>
                          <td><?php echo $arr['data'][$count]['admission_year']?></td>
                          
                          
                        </tr>
                      <?php $count++;
                    } 
                    }


                      }
                      session_destroy();
                      ?>
                      </tbody>

                    </table>
                       
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
