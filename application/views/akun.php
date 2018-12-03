<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PROCUREMENT</title>

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
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url();?>/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url();?>/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url();?>/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url();?>/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Animate.css -->
    <link href="<?php echo base_url();?>/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url();?>/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url();?>/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="<?php echo base_url();?>/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/vendors/cropper/dist/cropper.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/build/css/custom.min.css" rel="stylesheet">

    <!-- lihat sandi  -->
    <script type="text/javascript">
        function ShowHide() 
        {
            if (document.getElementById('radio1').checked) 
            {
                document.getElementById('secret').type = 'text';
            } 
            else 
            {
                document.getElementById('secret').type = 'password';
            }
        }
    </script>
    


  </head>

  <body>
        <!-- page content -->
        <div class="right_col" role="main">
          
          <div class="clearfix"></div>
            <div class="row">

              <!-- 1 -->
              <div class="col-md-12 " > 
                <div class="panel panel-body" style="padding: 30px;" > <div class="x_title"> <h4>USER ACCOUNT</h4></div>

                  <?php
                  $id=$this->session->userdata('id');
                  $pp=$this->db->query("SELECT image FROM user WHERE id='$id' ")->result();
                  foreach ($pp as $img){} 
                  $ff=$img->image; 
                  ?>

                  <br>
                  <img src="<?php echo site_url('assets/'); ?><?php echo $ff;?>" title='<?php //echo $ff; ?>' width="100px" height="100" class="img-circle" >
                  </br></br>
                  <?php
                    $id=$this->session->userdata('id');
                    $user=$this->db->query("SELECT * FROM user WHERE id='$id' ")->result();
                    foreach ($user as $x){} 
                  ?>

                  <div>
                    <form method="post" action="<?php echo site_url('admin/pic');?>" enctype="multipart/form-data">

                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >ID </label>
                      <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <input type="" readonly="" value="<?php echo $x->id; ?>" name="id" class="form-control col-md-7 col-xs-12"> 
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama user </label>
                      <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <input name="nama"  readonly="" value="<?php echo $x->nama; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Foto  </label>
                      <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <input type="file" name="foto" id="foto" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >&nbsp;  </label>
                      <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <button type="submit" class="btn btn-success">submit</button>
                      </div>
                     </div>

                    </form>
                  </div>

                </div>
              </div>
              <!-- 1 -->



              <!-- 2 -->
              <div class="col-md-12 " > 
                <div class="panel panel-body" style="padding: 30px;" > <div class="x_title"> <h4>CREATE USER ACCOUNT</h4></div>

                  <div>
                    <form method="post" action="<?php echo site_url('admin/form_akun');?>" enctype="multipart/form-data">


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama </label>
                      <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama" maxlength="17" placeholder="nama maximum 17 character" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Username </label>
                      <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="username" maxlength="10" placeholder="username maximum 10 character"  class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Password </label>
                      <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <input type="password" id="secret" name="password" placeholder="masukkan password maximum 20 character" maxlength="20" class="form-control col-md-7 col-xs-12">
                        <input type="checkbox" id="radio1"  value="on" onchange="ShowHide();"> Tampilkan password

                      </div>
                    </div>
                   

                    <!-- <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Foto  </label>
                      <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <input type="file" name="foto" id="foto" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div> -->


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >&nbsp;  </label>
                      <div class="input-group col-md-6 col-sm-6 col-xs-12">
                        <button type="submit" class="btn btn-success">submit</button>
                      </div>
                     </div>

                    </form>
                  </div>

                </div>
              </div>
              <!-- 2 -->


             <!-- 3 -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>USER ACCOUNT CONTROL <small>&nbsp;</small></h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <table id="exrequest" class="display table-bordered" style="width:98%;">
                      <thead>
                          <tr class="text-center">
                              <th>kelas</th>
                              <th>nama</th>
                              <th>username</th>
                              <th>image</th>
                              
                              <th>action</th>
                          </tr>
                      </thead>

                      <tbody>
                          <?php
                          $query=$this->db->query("SELECT * FROM user")->result();


                          foreach ($query as $sel){ 
                          $id = $sel->id;
                          ?>
                          <tr>
                            <td><?php echo $sel->kelas; ?></td>
                            <td><?php echo $sel->nama; ?></td>
                            <td><?php echo $sel->username; ?></td>
                            <td><?php echo $sel->image; ?></td>

                              
                              <td align="center"> 
                                <a href="<?php echo site_url('ctrl_ubah_user/ubah_user');?>?id=<?php echo $sel->id; ?>">
                                  <button class="btn btn-primary">proses</button>
                                </a>

                                <!-- <a href="<?php echo site_url('ctrl_hapus_user/hapus_user');?>?id=<?php echo $sel->id; ?>">
                                  <button class="btn btn-danger">hapus</button>
                                </a>  -->
                              </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                        
                      </table>

                  </div>
                </div>
              </div>
            <!-- 3 -->


              




            



              </div>
            </div>
          </div>
        </div>


        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           <a href="#"> IT DEV - 2018 </a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url();?>/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url();?>/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url();?>/vendors/google-code-prettify/src/prettify.js"></script>

    <!-- Switchery -->
    <script src="<?php echo base_url();?>/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url();?>/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url();?>/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url();?>/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url();?>/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo base_url();?>/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/build/js/custom.min.js"></script>

    <!-- FastClick -->
    <script src="<?php echo base_url();?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>/vendors/iCheck/icheck.min.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url();?>/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="<?php echo base_url();?>/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="<?php echo base_url();?>/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    
    <!-- easy-pie-chart -->
    <script src="<?php echo base_url();?>/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>/vendors/DateJS/build/date.js"></script>
    
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
     <!-- jQuery Sparklines -->
    <script src="<?php echo base_url();?>/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/build/js/custom.min.js"></script>


    <!-- Initialize datetimepicker -->
    <script>
        // $('#myDatepicker').datetimepicker();
        // $('#myDatepickerr').datetimepicker();
        
        $('#datereq').datetimepicker({
            format: 'DD/MM/YYYY'
        });

        
        // $('#myDatepicker3').datetimepicker({
        //     format: 'hh:mm A'
        // });
        
        // $('#myDatepicker4').datetimepicker({
        //     ignoreReadonly: true,
        //     allowInputToggle: true
        // });

        // $('#datetimepicker6').datetimepicker();
        
        // $('#datetimepicker7').datetimepicker({
        //     useCurrent: false
        // });
        
        // $("#datetimepicker6").on("dp.change", function(e) {
        //     $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        // });
        
        // $("#datetimepicker7").on("dp.change", function(e) {
        //     $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        // });
    </script>
    <!-- bootstrap-daterangepicker -->

    <!-- datatables -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() 
      {
        $('#exrequest').DataTable( {
            "pagingType": "full_numbers"
        } );

        $('#exproc').DataTable( {
            "pagingType": "full_numbers"
        } );

        $('#expo').DataTable( {
            "pagingType": "full_numbers"
        } );

        

      } );
    </script>
    <!-- datatables -->




    

  </body>
</html>