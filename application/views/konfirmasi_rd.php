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
            <div class="modal-dialog modal-sm">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-center">KONFIRMASI REQUEST</h4>
                </div>
                <div class="modal-body">
                  <p>data form request akan diubah menjadi <b><?php echo $status;?></b>?</p>


                  <form action="<?php echo site_url('ctrl_ubah_request/f_delivered');?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <input type="hidden" name="id" id="id" required="required" value="<?php if(empty($id)){echo"";}else{echo $id;} ?>"  class="form-control col-md-7 col-xs-12">
                    <input type="hidden" name="no_request" id="no_request" required="required" value="<?php echo $no_request;?>" placeholder="harap masukkan no request" class="form-control col-md-7 col-xs-12">
                    <input type="hidden" name="nama_proyek" id="nama_proyek" required="required" value="<?php echo $nama_proyek;?>" placeholder="harap masukkan nama proyek" class="form-control col-md-7 col-xs-12">
                    <input type="hidden"  name="quantity" id="quantity" required="required" value="<?php echo $quantity;?>" placeholder="harap masukkan quantity" class="form-control col-md-7 col-xs-12">
                    <input type="hidden" name="unit"  id="unit" required="required" value="<?php echo $unit;?>" class="form-control col-md-7 col-xs-12">
                    <input type="hidden" name="description" id="description" required="required" value="<?php echo $description;?>" placeholder="harap masukkan deskripsi" class="form-control col-md-7 col-xs-12">
                    <input type="hidden" name="pic" id="pic" required="required" value="<?php echo $pic;?>" class="form-control col-md-7 col-xs-12">
                    <input type="hidden" name="tanggal_request"  placeholder="masukkan tanggal" value="<?php echo $tanggal_request;?>" class="form-control col-md-7 col-xs-12" />
                   
                   <?php
                      // nama
                      $idn=$this->session->userdata('id');
                      $logic=$this->db->query("SELECT * FROM user WHERE id='$idn' ")->result();
                      foreach ($logic as $x){} $nama=$x->nama; 
                      // nama
                    ?>

                    <input type="hidden" name="user" id="user" required="required" value="<?php echo $nama;?>"  class="form-control col-md-7 col-xs-12">
                    <input type="hidden" name="no_po" id="no_po" required="required" value="<?php if(empty($no_po)){echo"";}else{echo $no_po;} ?>"  placeholder="harap masukkan no purchase order" class="form-control col-md-7 col-xs-12">
                    <input type="hidden" name="vendor" id="vendor" required="required" value="<?php if(empty($vendor)){echo"";}else{echo $vendor;} ?>"  placeholder="harap masukkan vendor" class="form-control col-md-7 col-xs-12">
                    <input type="hidden" name="status" id="status" required="required" value="<?php if(empty($status)){echo"";}else{echo $status;} ?>"  placeholder="harap masukkan status" class="form-control col-md-7 col-xs-12">

                    <center>
                      <button type="submit" class="btn btn-success">Ya</button>

                      <a href="<?php echo site_url('admin/request'); ?>">
                        <button type="button" class="btn btn-danger" >Tidak</button>
                      </a>
                    </center>

                    </form>
                  


                </div>

                &nbsp;

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