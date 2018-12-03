<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/build/css/custom.min.css" rel="stylesheet">

    <!-- datatables -->
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">


  </head>

  <body>
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="clearfix"></div>
    <div class="row">

      <?php
        $numreq=$this->db->query('SELECT * FROM po_request')->num_rows();
        // if($numreq == 0){$r='0';}
        // elseif($numreq <= 99){$r=$numreq;}
        // elseif($numreq > 100){$r='100';}
      ?>

      <?php
        $numpend=$this->db->query('SELECT * FROM po_pending')->num_rows();
        // if($numreq == 0){$r='0';}
        // elseif($numreq <= 99){$r=$numreq;}
        // elseif($numreq > 100){$r='100';}
      ?>

      <?php
        $numcan=$this->db->query('SELECT * FROM po_cancel')->num_rows();
        // if($numreq == 0){$r='0';}
        // elseif($numreq <= 99){$r=$numreq;}
        // elseif($numreq > 100){$r='100';}
      ?>

      <?php
        $numpo=$this->db->query('SELECT * FROM po')->num_rows();
        // if($numreq == 0){$r='0';}
        // elseif($numreq <= 99){$r=$numreq;}
        // elseif($numreq > 100){$r='100';}
      ?>


      

      <!-- top tiles -->
      <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
          <div class="count">
            <?php
              $user='admin'; 
              $query=$this->db->query("SELECT * FROM user WHERE kelas='$user'")->num_rows();
              echo $query;
            ?>
          </div>

          <span class="count_bottom">
            <?php
            if($query <= 5){$x='green';}
            elseif($query <= 10){$x='green';}
            elseif($query <= 20){$x='green';}
            elseif($query <= 30){$x='green';}
            elseif($query <= 40){$x='green';}
            elseif($query <= 50){$x='green';}
            elseif($query <= 60){$x='green';}
            elseif($query <= 70){$x='green';}
            elseif($query <= 80){$x='green';}
            elseif($query <= 90){$x='green';}
            elseif($query >= 100){$x='red';}
            ?>
            <i class="<?php echo $x;?>">
            <?php 
            if($query <= 5){echo "1%";}
            elseif($query <= 10){echo "10%;";}
            elseif($query <= 20){echo "20%;";}
            elseif($query <= 30){echo "30%;";}
            elseif($query <= 40){echo "40%;";}
            elseif($query <= 50){echo "50%;";}
            elseif($query <= 60){echo "60%;";}
            elseif($query <= 70){echo "70%;";}
            elseif($query <= 80){echo "80%;";}
            elseif($query <= 90){echo "90%;";}
            elseif($query > 100){echo "100%;";}
            ?> 
            </i>

             Hari ini
          </span>
        </div>
        
       
      </div>
      <!-- /top tiles -->

      <!-- 1 -->
      <div class="col-md-12 " > 
        <div class="panel panel-body" style="padding: 30px;" > <div class="x_title"> <h4>DASHBOARD</h4></div>
          <div class="row">

            <a href="#" data-toggle="modal" data-target="#">
                <div class="col-xs-2">
                    <span class="chart" data-percent=" <?php echo $numpo; ?>"> 
                      <!-- <span class="percent"></span> -->
                      <span style=""> <br><br> <h2><?php  echo $numpo;  ?></h2>  </span>
                      <span style=""> <br><br><br> JUMLAH PO   </span>
                    </span>
                    
                    
                    
                </div>
              </a>

              <a href="#" data-toggle="modal" data-target="#">
                <div class="col-xs-2">
                    <span class="chart" data-percent=" <?php echo $numreq; ?>"> 
                      <!-- <span class="percent"></span> -->
                      <span style=""> <br><br> <h2><?php  echo $numreq;  ?></h2>  </span>
                      <span style=""> <br><br><br> JUMLAH PO REQUEST  </span>
                    </span>
                </div>
              </a>

              <a href="#" data-toggle="modal" data-target="#">
                <div class="col-xs-2">
                    <span class="chart" data-percent="<?php echo $numpend; ?>"> 
                      <!-- <span class="percent"></span> -->
                      <span style=""> <br><br> <h2><?php echo $numpend; ?></h2>  </span>
                      <span style=""> <br><br><br> JUMLAH PO PENDING  </span>
                    </span>
                </div>
              </a>

              <a href="#" data-toggle="modal" data-target="#">
                <div class="col-xs-2">
                    <span class="chart" data-percent="<?php echo $numcan; ?>"> 
                      <!-- <span class="percent"></span> -->
                      <span style=""> <br><br> <h2><?php echo $numcan; ?></h2>  </span>
                      <span style=""> <br><br><br> JUMLAH PO CANCEL  </span>
                    </span>
                </div>
              </a>

          </div>
        </div>
      </div>
      <!-- 1 -->


      <!-- table 1 -->
      <div class="col-md-12 " > 
        <div class="panel panel-body" style="padding: 30px;" > <div class="x_title"> <h4>INFORMATION PO DELIVERED</h4></div>

          <table id="inproc" class="display table-bordered" style="width:98%;">
              <thead>
                  <tr class="text-center">
                      <th>Tanggal request</th>
                      <th>No request</th>
                      <th>Nama proyek</th>
                      <th>Quantity</th>
                      <th>Unit</th>
                      <th>Description</th>
                      <th>Pic</th>

                      <th>No purchase order</th>
                      <th>vendor</th>
                      <th>status</th>
                      <th>action</th>
                  </tr>
              </thead>

              <tbody>
                <?php
                $query=$this->db->query("SELECT * FROM po_process")->result();


                foreach ($query as $sel){ 
                $id = $sel->id;
                ?>
                <tr>
                    <td><?php echo $sel->tanggal_request; ?></td>
                    <td><?php echo $sel->no_request; ?></td>
                    <td><?php echo $sel->nama_proyek; ?></td>
                    <td><?php echo $sel->quantity; ?></td>
                    <td><?php echo $sel->unit; ?></td>
                    <td><?php echo $sel->description; ?></td>
                    <td><?php echo $sel->pic; ?></td>

                    <td><?php echo $sel->no_po; ?></td>
                    <td><?php echo $sel->vendor; ?></td>
                    <td><?php echo $sel->status; ?></td>

                    <td align="center"> 
                      <a href="<?php echo site_url('ctrl_ubah_delivered/ubah_delivered');?>?id=<?php echo $sel->id; ?>">
                        <button class="btn btn-primary">ubah</button>
                      </a>
                    </td>
                    
                    
                </tr>
                <?php } ?>
              </tbody>
          </table>

        </div>
      </div>
      <!-- table 1 -->


      <!-- table2 -->
      <div class="col-md-12 " > 
        <div class="panel panel-body" style="padding: 30px;" > <div class="x_title"> <h4>INFORMATION PO PENDING</h4></div>

          <table id="inpend" class="display table-bordered" style="width:98%;">
              <thead>
                  <tr class="text-center">
                      <th>Tanggal request</th>
                      <th>No request</th>
                      <th>Nama proyek</th>
                      <th>Quantity</th>
                      <th>Unit</th>
                      <th>Description</th>
                      <th>Pic</th>

                      <th>No purchase order</th>
                      <th>vendor</th>
                      <th>status</th>
                      <th>action</th>
                  </tr>
              </thead>

              <tbody>
                  <?php
                  $query=$this->db->query("SELECT * FROM po_pending")->result();


                  foreach ($query as $sel){ 
                  $id = $sel->id;
                  ?>
                  <tr>
                      <td><?php echo $sel->tanggal_request; ?></td>
                      <td><?php echo $sel->no_request; ?></td>
                      <td><?php echo $sel->nama_proyek; ?></td>
                      <td><?php echo $sel->quantity; ?></td>
                      <td><?php echo $sel->unit; ?></td>
                      <td><?php echo $sel->description; ?></td>
                      <td><?php echo $sel->pic; ?></td>

                      <td><?php echo $sel->no_po; ?></td>
                      <td><?php echo $sel->vendor; ?></td>
                      <td><?php echo $sel->status; ?></td>
                      <td align="center"> 
                        <a href="<?php echo site_url('ctrl_ubah_pending/ubah_pending');?>?id=<?php echo $sel->id; ?>">
                          <button class="btn btn-primary">ubah</button>
                        </a>
                      </td>
                      
                  </tr>
                  <?php } ?>
              </tbody>
          </table>

          
        </div>
      </div>
      <!-- table2 -->


      <!-- table3 -->
      <div class="col-md-12 " > 
        <div class="panel panel-body" style="padding: 30px;" > <div class="x_title"> <h4>INFORMATION PO CANCEL</h4></div>

          <table id="incan" class="display table-bordered" style="width:98%;">
              <thead>
                  <tr class="text-center">
                      <th>Tanggal request</th>
                      <th>No request</th>
                      <th>Nama proyek</th>
                      <th>Quantity</th>
                      <th>Unit</th>
                      <th>Description</th>
                      <th>Pic</th>

                      <th>No purchase order</th>
                      <th>vendor</th>
                      <th>status</th>
                  </tr>
              </thead>

              <tbody>
                  <?php
                  $query=$this->db->query("SELECT * FROM po_cancel")->result();


                  foreach ($query as $sel){ 
                  $id = $sel->id;
                  ?>
                  <tr>
                      <td><?php echo $sel->tanggal_request; ?></td>
                      <td><?php echo $sel->no_request; ?></td>
                      <td><?php echo $sel->nama_proyek; ?></td>
                      <td><?php echo $sel->quantity; ?></td>
                      <td><?php echo $sel->unit; ?></td>
                      <td><?php echo $sel->description; ?></td>
                      <td><?php echo $sel->pic; ?></td>

                      <td><?php echo $sel->no_po; ?></td>
                      <td><?php echo $sel->vendor; ?></td>
                      <td><?php echo $sel->status; ?></td>
                  </tr>
                  <?php } ?>
              </tbody>
          </table>

          
        </div>
      </div>
      <!-- table3 -->




    </div>
  </div>
  <!-- /page content -->




  <!-- footer content -->
  <footer>
    <div class="pull-right"> <a href="#"> IT DEV - 2018 </a> </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->


    <!-- jQuery -->
    <script src="<?php echo base_url();?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo base_url();?>/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>/vendors/jqvmap/dist/maps/jquery.vmap.usa.js"></script>
    <script src="<?php echo base_url();?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- easy-pie-chart -->
    <script src="<?php echo base_url();?>/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>/vendors/Chart.js/dist/Chart.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/build/js/custom.min.js"></script>


    <!-- datatables -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() 
      {
        $('#inproc').DataTable( {
            "pagingType": "full_numbers"
        } );

        $('#inpend').DataTable( {
            "pagingType": "full_numbers"
        } );
       $('#incan').DataTable( {
          "pagingType": "full_numbers"
        } );

       

        

      } );
    </script>
    <!-- datatables -->
    

  </body>
</html>