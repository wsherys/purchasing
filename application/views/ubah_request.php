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

          <!-- Modal auto backdrop-->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">DATA PROCESS REQUEST</h4>
                </div>
                <div class="modal-body">

                  

                  <?php 
                    $id = $_GET['id'];

                    $qubh=$this->db->query("SELECT * FROM po_request WHERE id='".$id."' ")->result();
                    foreach ($qubh as $key) 
                    {


                      // if(empty($key->no_request))
                      // {
                      //   echo '
                      //   <div class="alert alert-danger">
                      //     <strong>Kesalahan!</strong> kesalahan pada no request atau no request kosong!.
                      //   </div>
                      //   ';
                      // }
                      // elseif (!preg_match("/^[\/a-zA-Z0-9]*$/",$key->no_request)) {
                      //   echo '
                      //   <div class="alert alert-danger">
                      //     <strong>Kesalahan!</strong> kesalahan pada no request atau no request kosong!.
                      //   </div>
                      //   ';
                      // }
                      if(empty($key->nama_proyek))
                      {
                        echo '
                        <div class="alert alert-danger">
                          <strong>Kesalahan!</strong> kesalahan pada nama proyek atau nama proyek kosong!.
                        </div>
                        ';
                      }
                      elseif(empty($key->description))
                      {
                        echo '
                        <div class="alert alert-danger">
                          <strong>Kesalahan!</strong> kesalahan pada deskripsi atau deskripsi kosong!.
                        </div>
                        ';
                      }
                      elseif(empty($key->quantity))
                      {
                        echo '
                        <div class="alert alert-danger">
                          <strong>Kesalahan!</strong> kesalahan pada quantity atau quantity kosong!.
                        </div>
                        ';
                      }
                      elseif(!preg_match("/^[0-9.]+$/",$key->quantity))
                      {
                        echo '
                        <div class="alert alert-danger">
                          <strong>Kesalahan!</strong> kesalahan pada quantity atau quantity kosong!.
                        </div>
                        ';
                      }
                      

                      elseif(empty($key->unit))
                      {
                        echo '
                        <div class="alert alert-danger">
                          <strong>Kesalahan!</strong> kesalahan pada unit atau unit kosong!.
                        </div>
                        ';
                      }
                      elseif($key->unit=='pilih')
                      {
                        echo '
                        <div class="alert alert-danger">
                          <strong>Kesalahan!</strong> kesalahan pada unit atau unit kosong!.
                        </div>
                        ';
                      }

                      elseif(empty($key->pic))
                      {
                        echo '
                        <div class="alert alert-danger">
                          <strong>Kesalahan!</strong> kesalahan pada pic atau pic kosong!.
                        </div>
                        ';
                      }
                      elseif($key->pic=='pilih')
                      {
                        echo '
                        <div class="alert alert-danger">
                          <strong>Kesalahan!</strong> kesalahan pada pic atau pic kosong!.
                        </div>
                        ';
                      }

                      elseif(empty($key->tanggal_request))
                      {
                        echo '
                        <div class="alert alert-danger">
                          <strong>Kesalahan!</strong> kesalahan pada tanggal request atau tanggal request kosong!.
                        </div>
                        ';
                      }

                  ?>


                  <form action="<?php echo site_url('ctrl_ubah_request/proses_request');?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_request">No Request 
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input readonly="" name="no_request" id="no_request" required="required" value="<?php echo $key->no_request;?>" placeholder="harap masukkan no request" class="form-control col-md-7 col-xs-12">

                          <input type="hidden" name="no_request" id="no_request" required="required" value="<?php echo $key->no_request;?>" placeholder="harap masukkan no request" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" name="id" id="id" required="required" value="<?php echo $id;?>"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_proyek">Nama proyek 
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input readonly="" name="nama_proyek" id="nama_proyek" required="required" value="<?php echo $key->nama_proyek;?>" placeholder="harap masukkan nama proyek" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" name="nama_proyek" id="nama_proyek" required="required" value="<?php echo $key->nama_proyek;?>" placeholder="harap masukkan nama proyek" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantity">Quantity 
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input type="number" readonly="" name="quantity" id="quantity" required="required" value="<?php echo $key->quantity;?>" placeholder="harap masukkan quantity" class="form-control col-md-7 col-xs-12">
                          <input type="hidden"  name="quantity" id="quantity" required="required" value="<?php echo $key->quantity;?>" placeholder="harap masukkan quantity" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="unit">Unit 
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input name="unit" readonly="" id="unit" required="required" value="<?php echo $key->unit;?>" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" name="unit"  id="unit" required="required" value="<?php echo $key->unit;?>" class="form-control col-md-7 col-xs-12">

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description 
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="description" id="description" required="required" value="<?php echo $key->description;?>" placeholder="harap masukkan deskripsi" class="form-control col-md-7 col-xs-12">
                          <input readonly="" name="description" id="description" required="required" value="<?php echo $key->description;?>" placeholder="harap masukkan deskripsi" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pic">PIC 
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="pic" id="pic" required="required" value="<?php echo $key->pic;?>" class="form-control col-md-7 col-xs-12">
                          <input readonly="" name="pic" id="pic" required="required" value="<?php echo $key->pic;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_request">Tanggal request 
                        </label>
                        <div class='input-group date col-md-6 col-sm-6 col-xs-12' id='datereq'>
                            <input readonly="" name="tanggal_request"  placeholder="masukkan tanggal" value="<?php echo $key->tanggal_request;?>" class="form-control col-md-7 col-xs-12" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input type="hidden" name="tanggal_request"  placeholder="masukkan tanggal" value="<?php echo $key->tanggal_request;?>" class="form-control col-md-7 col-xs-12" />
                            
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user"> 
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="user" id="user" required="required" value="<?php echo $nama;?>"  class="form-control col-md-7 col-xs-12">
                          <!-- <input readonly="" name="user" id="user" required="required" value="<?php echo $nama;?>"  class="form-control col-md-7 col-xs-12"> -->
                        </div>
                      </div>


                      <br><br><div class="x_title"></div><br><br>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_po"> Purchase order <span class="required">*</span>
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input name="no_po" id="no_po" required="required" value="<?php if(empty($purchase_order)){echo"";}else{echo $purchase_order;} ?>"  placeholder="harap masukkan no purchase order" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vendor"> Vendor <span class="required">*</span>
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          <input name="vendor" id="vendor" required="required" value="<?php if(empty($vendor)){echo"";}else{echo $vendor;} ?>"  placeholder="harap masukkan vendor" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status"> Status <span class="required">*</span>
                        </label>
                        <div class="input-group col-md-6 col-sm-6 col-xs-12">
                          
                          <select name="status" id="status" required="required" value="<?php if(empty($status)){echo"";}else{echo $status;} ?>" class="form-control col-md-7 col-xs-12" >
                            <option value=""> pilih </option>
                            <?php 
                            $nopo=$key->no_request; 
                            if(empty($nopo)){echo "<option value='delivered'> delivered </option>";} 
                            elseif(!empty($nopo)){echo "<option value='delivered'> delivered </option><option value='pending'> pending </option>";}
                            ?>

                          </select>

                        </div>
                      </div>


                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Proses</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                        </div>
                      </div>

                    </form>

                  <?php } ?>

                </div>

                <div class="modal-footer">
                  <a href="<?php echo site_url('admin/request'); ?>">
                    <button type="button" class="btn btn-default" >Close</button>
                  </a>
                </div>

              </div>
              
            </div>
          </div>
          <!-- Modal auto backdrop-->
        
      </div>
    </div>


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
        
        $('#excpu').DataTable( {
            "pagingType": "full_numbers"
        } );
        $('#expsu').DataTable( {
            "pagingType": "full_numbers"
        } );
        $('#exram').DataTable( {
            "pagingType": "full_numbers"
        } );
        $('#exvga').DataTable( {
            "pagingType": "full_numbers"
        } );
        $('#exlcd').DataTable( {
            "pagingType": "full_numbers"
        } );
        $('#exmotherboard').DataTable( {
            "pagingType": "full_numbers"
        } );
        $('#exhardisk').DataTable( {
            "pagingType": "full_numbers"
        } );
        $('#exkeyboard').DataTable( {
            "pagingType": "full_numbers"
        } );
        $('#exmouse').DataTable( {
            "pagingType": "full_numbers"
        } );

        $('#expc').DataTable( {
            "pagingType": "full_numbers"
        } );

      } );
    </script>
    <!-- datatables -->
    
    <!-- jquery-maskmoney-master -->
    <script src="<?php echo base_url();?>/assets/jquery-maskmoney-master/dist/jquery.maskMoney.js"></script>
    <script src="<?php echo base_url();?>/assets/jquery-maskmoney-master/dist/jquery.maskMoney.min.js"></script>

    <script>
      $(document).ready(function(){
        $('#angka1').maskMoney();
        $('#angka2').maskMoney({prefix:'US$'});
        $('#angka3').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0});
        $('#angka4').maskMoney();

        $('#hbcpu').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0});
        
      });
    </script>
    <!-- jquery-maskmoney-master -->

    <!-- modal backdrop -->
    <script>
    $(document).ready(function(){
        $("#myModal").modal({backdrop: "static"});
        });
    </script>
    <!-- modal backdrop -->


  </body>
</html>