<?php require("sidebar.php");
include '../restServices/vendor1/common.php';
?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>View Faculty</h3>
              </div>

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Faculty Details <small></small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Faculty Name</th>
                          <th>Email</th>
                          <th></th>
                         
                        </tr>
                      </thead>
                      <tbody>

                    <?php 
                      
                      $log = $url.'viewfac/';
                      
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
                          <td><?php echo $arr['data'][$count]['name']?></td>
                          <td><?php echo $arr['data'][$count]['email']?></td>
                          <td><a href="direction/removef.php?id=<?php echo $arr['data'][$count]['id'];?>&sub=0" <button type="submit" class="btn btn-danger fluid" >Remove</button></td>
                          
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
