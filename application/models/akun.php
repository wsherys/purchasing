<!DOCTYPE html>
<html>
<head>
	<title></title>
	<div>
		
    
</head>
<body style="background-color: grey;">


<!-- Page Content Holder -->
    <div id="content">

        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="<?php echo site_url('form_login/logout');?>">logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

		<div class="well well-lg">
		<div class="h3 text-left" style="padding-bottom: 2%;"><b><?php $title="informasi data akun"; echo strtoupper($title);?></b></div>

			<?php
			$id=$this->session->userdata('id');
			$pp=$this->db->query("SELECT image FROM user WHERE id='$id' ")->result();
			foreach ($pp as $img){} 
			$ff=$img->image; 
			?>

			<br>
			<img src="<?php echo base_url('assets/'); ?><?php echo $ff;?>" title='<?php echo $ff; ?>' width="100px" height="100" class="img-circle" alt="Cinque Terre">
			</br></br>

			<div>
				<form method="post" action="<?php echo site_url('admin/pic');?>" enctype="multipart/form-data">
				<table cellpadding="8" >
				
				<?php
					$id=$this->session->userdata('id');
					$user=$this->db->query("SELECT * FROM user WHERE id='$id' ")->result();
					foreach ($user as $x){} 
				?>
				<tr>
				<td>Nama &nbsp;</td>
				<td>
					<input type="text" readonly="" value="<?php echo $x->nama; ?>" class="form-control">
					<input type="hidden" value="<?php echo $x->id; ?>" name="id" class="form-control" >
					<input type="hidden" value="<?php echo $x->nama; ?>" name="nama" class="form-control" >
				</td>
				</tr><tr><td>&nbsp;</td></tr>
				
				<tr>
				<td>Foto &nbsp;</td>
				<td><input type="file" name="foto" id="foto" class="form-control"></td>
				</tr><tr><td>&nbsp;</td></tr>

				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" value="Simpan" class="btn btn-primary">
					</td>
				</tr><tr><td>&nbsp;</td></tr>

				</table>

				
				</form>
			</div>
			
		</div>
        
    </div>


</div>

 <script type="text/javascript">
     $(document).ready(function () {
         $('#sidebarCollapse').on('click', function () {
             $('#sidebar').toggleClass('active');
             $(this).toggleClass('active');
         });
     });
 </script>









</body>
</html>