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


    


  </head>

  <body>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="clearfix"></div>
            <div class="row">

              <!-- 1 -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Request <small>&nbsp;</small></h2>
                    
                    

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <?php 

                    // if(empty($no_request))
                    // {
                    //   echo '
                    //   <div class="alert alert-danger">
                    //     <strong>Kesalahan!</strong> kesalahan pada no request atau no request kosong!.
                    //   </div>
                    //   ';
                    // }
                    // elseif (!preg_match("/^[\/a-zA-Z0-9]*$/",$no_request)) {
                    //   echo '
                    //   <div class="alert alert-danger">
                    //     <strong>Kesalahan!</strong> kesalahan pada no request atau no request kosong!.
                    //   </div>
                    //   ';
                    // }
                    // elseif(strlen($no_request) < 5)
                    // {
                    //   echo '
                    //   <div class="alert alert-danger">
                    //     <strong>Kesalahan!</strong> kesalahan pada no request kurang dari 5 karakter!.
                    //   </div>
                    //   ';
                    // }
                    if(empty($nama_proyek))
                    {
                      echo '
                      <div class="alert alert-danger">
                        <strong>Kesalahan!</strong> kesalahan pada nama proyek atau nama proyek kosong!.
                      </div>
                      ';
                    }
                    elseif(empty($description))
                    {
                      echo '
                      <div class="alert alert-danger">
                        <strong>Kesalahan!</strong> kesalahan pada deskripsi atau deskripsi kosong!.
                      </div>
                      ';
                    }
                    elseif(empty($quantity))
                    {
                      echo '
                      <div class="alert alert-danger">
                        <strong>Kesalahan!</strong> kesalahan pada quantity atau quantity kosong!.
                      </div>
                      ';
                    }
                    elseif(!preg_match("/^[0-9.]+$/",$quantity))
                    {
                      echo '
                      <div class="alert alert-danger">
                        <strong>Kesalahan!</strong> kesalahan pada quantity atau quantity kosong!.
                      </div>
                      ';
                    }
                    

                    elseif(empty($unit))
                    {
                      echo '
                      <div class="alert alert-danger">
                        <strong>Kesalahan!</strong> kesalahan pada unit atau unit kosong!.
                      </div>
                      ';
                    }
                    elseif($unit=='pilih')
                    {
                      echo '
                      <div class="alert alert-danger">
                        <strong>Kesalahan!</strong> kesalahan pada unit atau unit kosong!.
                      </div>
                      ';
                    }

                    elseif(empty($pic))
                    {
                      echo '
                      <div class="alert alert-danger">
                        <strong>Kesalahan!</strong> kesalahan pada pic atau pic kosong!.
                      </div>
                      ';
                    }
                    elseif($pic=='pilih')
                    {
                      echo '
                      <div class="alert alert-danger">
                        <strong>Kesalahan!</strong> kesalahan pada pic atau pic kosong!.
                      </div>
                      ';
                    }

                    elseif(empty($tanggal_request))
                    {
                      echo '
                      <div class="alert alert-danger">
                        <strong>Kesalahan!</strong> kesalahan pada tanggal request atau tanggal request kosong!.
                      </div>
                      ';
                    }
                    ?>
                    

                    <form action="<?php echo site_url('admin/proses_request');?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >No Request </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input name="no_request"  value="<?php echo $no_request; ?>" placeholder="harap masukkan no request" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_proyek">Nama proyek <span class="required">*</span>
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input name="nama_proyek" id="nama_proyek" required="required" value="<?php echo $nama_proyek; ?>" placeholder="harap masukkan nama proyek" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantity">Quantity <span class="required">*</span>
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="quantity" id="quantity" required="required" value="<?php echo $quantity; ?>" placeholder="harap masukkan quantity" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="unit">Unit <span class="required">*</span>
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <!-- <input name="unit" id="unit" required="required" class="form-control col-md-7 col-xs-12"> -->
                          <select name="unit" id="unit" required="required" value="<?php echo $unit; ?>" class="form-control col-md-7 col-xs-12" >
                            <option value="<?php echo $unit; ?>"><?php echo $unit; ?></option>
                            <option value="unit">unit</option>
                            <option value="pcs">pcs</option>
                            <option value="btg">btg</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input name="description" id="description" required="required" value="<?php echo $description; ?>" placeholder="harap masukkan deskripsi" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pic">PIC <span class="required">*</span>
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <!-- <input name="unit" id="unit" required="required" class="form-control col-md-7 col-xs-12"> -->
                          <select name="pic" id="pic" required="required" " class="form-control col-md-7 col-xs-12" >
                            <option value="<?php echo $pic; ?>"><?php echo $pic; ?></option>
                            <option value="arjuna">arjuna</option>
                            <option value="ade">ade</option>
                            <option value="herdi">herdi</option>
                            <option value="pisca">pisca</option>
                            <option value="sahab">sahab</option>
                            <option value="yanti">yanti</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_request">Tanggal request <span class="required">*</span>
                        </label>
                        <div class='input-group date col-md-6 col-sm-6 col-xs-12' id='datereq'>
                            <input  name="tanggal_request"  placeholder="masukkan tanggal" value="<?php echo $tanggal_request; ?>" class="form-control col-md-7 col-xs-12" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>

                      <?php
                        // nama
                        $id=$this->session->userdata('id');
                        $logic=$this->db->query("SELECT * FROM user WHERE id='$id' ")->result();
                        foreach ($logic as $x){} $nama=$x->nama; 
                        // nama
                      ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user">&nbsp; <span class="required">&nbsp; </span> </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="user" id="user" required="required" value="<?php echo $nama; ?>"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                        </div>
                      </div>

                    </form>

                  </div>
                </div>
              </div>

            <!-- 1 -->


            <!-- 2 -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DATA PO REQUEST <small>&nbsp;</small></h2>
                    
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
                                  <th>Tanggal request</th>
                                  <th>No request</th>
                                  <th>Nama proyek</th>
                                  <th>Quantity</th>
                                  <th>Unit</th>
                                  <th>Description</th>
                                  <th>Pic</th>

                                  <th>action</th>
                              </tr>
                          </thead>

                          <tbody>
                              <?php
                              $query=$this->db->query("SELECT * FROM po_request")->result();


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
                                  
                                  <td align="center"> 
                                    <a href="<?php echo site_url('ctrl_ubah_request/ubah_request');?>?id=<?php echo $sel->id; ?>">
                                      <button class="btn btn-primary">proses</button>
                                    </a>

                                    <a href="<?php echo site_url('ctrl_hapus_form/hapus_data');?>?id=<?php echo $sel->id; ?>">
                                      <button class="btn btn-danger">hapus</button>
                                    </a> 
                                  </td>
                              </tr>
                              <?php } ?>
                        </table>

                  </div>
                </div>
              </div>
            <!-- 2 -->

            
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


    

  </body>
</html>