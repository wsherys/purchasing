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
                  <h4 class="modal-title">DATA PROCESS USER</h4>
                </div>
                <div class="modal-body">

                  <?php 
                    $id = $_GET['id'];

                    $qubh=$this->db->query("SELECT * FROM user WHERE id='".$id."' ")->result();
                    foreach ($qubh as $key) 
                    {


                      if(empty($key->nama))
                      {
                        echo '
                        <div class="alert alert-danger">
                          <strong>Kesalahan!</strong> kesalahan pada nama atau nama kosong!.
                        </div>
                        ';
                      }
                      elseif(empty($key->password))
                      {
                        echo '
                        <div class="alert alert-danger">
                          <strong>Kesalahan!</strong> kesalahan pada password atau password kosong!.
                        </div>
                        ';
                      }
                      elseif(strlen($key->password) < 10)
                      {
                        echo '
                        <div class="alert alert-danger">
                          <strong>Kesalahan!</strong> kesalahan password tidak boleh kurang dari 10 !.
                        </div>
                        ';
                      }
                      

                  ?>

                <form action="<?php echo site_url('ctrl_ubah_user/proses_user');?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama 
                    </label>

                    <div class="input-group col-md-6 col-sm-6 col-xs-12">
                      <input type="nama" readonly=""  name="nama" value="<?php echo $key->nama; ?>" class="form-control col-md-7 col-xs-12">
                      <input type="hidden"  name="nama" value="<?php echo $key->nama; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Username 
                    </label>
                    <div class="input-group col-md-6 col-sm-6 col-xs-12">
                      <input type="username" readonly="" name="username" value="<?php echo $key->username; ?>"  class="form-control col-md-7 col-xs-12">

                      <input type="hidden" name="id" value="<?php echo $id;?>"  class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Password 
                    </label>

                    <div class="input-group col-md-6 col-sm-6 col-xs-12">
                      <input type="password"  name="password"  class="form-control col-md-7 col-xs-12">
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
                  <a href="<?php echo site_url('admin/akun'); ?>">
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