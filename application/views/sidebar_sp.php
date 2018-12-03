<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/build/css/custom.min.css" rel="stylesheet">
    
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    
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

    
  
    <title> PROCUREMENT</title>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0; padding-left: 15px;">
              <a href="<?php echo site_url('admin/index');?>" class="site_title"> <span><!-- PROCUREMENT --></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic" >

                <p style=" margin-top: -5px; margin-bottom: 5px; margin-left: 50px;"><!-- foto profil -->
                    <?php
                    $id=$this->session->userdata('id');
                    $pp=$this->db->query("SELECT image FROM user WHERE id='$id' ")->result();
                    foreach ($pp as $img){} 
                    $ff=$img->image; 
                    ?>
                    <br>
                    <img src="<?php echo base_url('assets/'); ?><?php echo $ff;?>" title='<?php echo $ff; ?>' width="100px" height="100px" class="img-circle" alt="Cinque Terre">
                    </br></br>
                </p>

              </div>

              <div class="profile_info" style="margin-top: 40%; margin-left: -40px; margin-right: -10px;">

               <?php 
                $id=$this->session->userdata('id');
                $logic=$this->db->query("SELECT * FROM user WHERE id='$id' ")->result();
                foreach ($logic as $x){} $nama=$x->nama; $user=$x->username;

                $cek_nama=$this->db->query("SELECT * FROM user WHERE nama='$nama' ")->result();
                foreach ($cek_nama as $y){} $kelas=$y->kelas;

                echo "<span style='margin-left: 10px; '>";
                echo $nama;
                echo "</span>";

                
                
                ?>




              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo site_url('admin/index');?>"><i class="fa fa-home"></i> Dashboard </a></li>
                  
                  <li>
                    <a href="<?php echo site_url('admin/request_sp');?>"><i class=""></i> 
                      <span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;&nbsp; Purchase order 
                    </a>
                  </li>

                </ul>
              </div>

              <div class="menu_section">
                <h3>superadmin</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="<?php echo site_url('admin/akun');?>"><i class=""></i> 
                      <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp; User account 
                    </a>
                  </li>
                </ul>
              </div>

              <div class="menu_section">
                <h3>Bug fixer</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="#"><i class=""></i> 
                      <span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;&nbsp; Report bug 
                    </a>
                  </li>
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url('admin/logout');?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">
                    
                    <p >
                      <?php 
                      $id=$this->session->userdata('id');
                      $logic=$this->db->query("SELECT * FROM user WHERE id='$id' ")->result();
                      foreach ($logic as $x){} $nama=$x->nama; $user=$x->username;
                      $cek_nama=$this->db->query("SELECT * FROM user WHERE nama='$nama' ")->result();
                      foreach ($cek_nama as $y){} $kelas=$y->kelas;

                      echo "<div style='text-align: center; margin-top: -40px;'>";
                      echo $user;
                      echo "&nbsp;";
                      echo "<span class='fa fa-angle-down'></span>";
                      echo "</div>";
                      
                      ?>
                    </p>


                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profil</a></li>
                    <li>
                      <a href="javascript:;">
                        <!-- <span class="badge bg-red pull-right">50%</span> -->
                        <span>Pengaturan</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Bantuan</a></li>
                    <li><a href="<?php echo site_url('admin/logout');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">0</span>
                  </a>
                  
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
            
            
  
  </body>
</html>
