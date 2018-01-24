<?php require("sidebar.php");
include '../restServices/vendor1/common.php';
$log = $url.'assignview/';

$try_json = file_get_contents($log);
// echo $try_json;
$arr= json_decode($try_json, true);
$count=0;
?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Unassign Subjects</h3>
              </div>

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Unassign Subjects-Details <small></small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>subject</th>
                          <th>Faculty</th>
                          <th>Semester</th>
                          <th>Stream</th>
                          <th></th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php
                      if($arr['success']==1)
                      {
                        while($count<count($arr['data']))
                        {
                    ?>

                        <tr>
                          <td><?php echo $count+1;?></td>
                          <td><?php echo $arr['data'][$count]['name']."  ". $arr['data'][$count]['code'];?></td>
                          <td><?php echo $arr['data'][$count]['faculty'];?></td>
                          <td><?php echo $arr['data'][$count]['sem'];?></td>
                          <td><?php echo $arr['data'][$count]['stream'];?></td>
                          
                          <td><a href="direction/removef.php?id=<?php echo $arr['data'][$count]['id']?>&sub=2" <button type="submit" class="btn btn-danger fluid" >Remove</button></td>
                          
                        </tr>
                      <?php $count++;
                    } 
                    }?>
                      </tbody>
                    </table>
                  <!-- <table class="table table-bordered table-striped">

                <tr>
                    <th>S no.</th>
                    <th colspan="2">Faculty Name</th>
                    <th>Email</th>
                </tr>
                
                <tr>
                <td>1</td>
                <td colspan="2"><ss</td>
                <td>ff</td>
                </tr>
               
                </table> -->
               
                  <div class="x_content">
                 
             
                    
               
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
