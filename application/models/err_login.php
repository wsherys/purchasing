<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: skyblue;">

<div class="container-fluid">

	<div class="h1 text-center">IT INVENTORY</div>

	<div class="row">
		<div class="col-sm-4" >&nbsp;</div><!-- left -->

		<div class="col-sm-4 well well-lg" style="background-color:none;">

			<div>
				<!-- alert -->
				<?php

        			$cek_user=$this->db->query("SELECT * FROM user WHERE username='$user' && password='$pass' ")->num_rows();
					if(empty($user))
			        {
			           echo "
			           <div class='alert alert-danger'>
						  <strong>Pesan!</strong> username atau password kosong
						</div>
			           ";
			        }
			        elseif(empty($pass))
			        {
			           echo "
			           <div class='alert alert-danger'>
						  <strong>Pesan!</strong> username atau password kosong
						</div>
			           ";
			        }
			        elseif(!preg_match("/^[a-z0-9]/",$user))
			        {
			        	echo "
			           <div class='alert alert-danger'>
						  <strong>Pesan!</strong> username salah
						</div>
			           ";
			        }
			        elseif($cek_user == 0)
			        {
			            echo "
			           <div class='alert alert-danger'>
						  <strong>Pesan!</strong> username atau password tidak benar
						</div>
			           ";
			        }
			        elseif($ol == 503)
			        {
			            echo "
			           <div class='alert alert-warning'>
						  <strong>Pesan!</strong> sedang dalam perbaikan
						</div>
			           ";
			        }


				?>	
			</div>

			<form action="<?php echo site_url('form_login/login'); ?>" method="post">
			<div class="form-group has-error has-feedback">
				<label for="user">username:</label>
				<input type="text" name="username" class="form-control" id="user" maxlength="6">
			</div>
			<div class="form-group has-error has-feedback">
				<label for="password">Password:</label>
				<input type="password" name="password" id="secret" class="form-control" id="password" maxlength="20">
			</div>
			

			<div class="form-group">
				<input type="checkbox" id="radio1" name="radio1" value="on" onchange="ShowHide();">
				<span class="glyphicon glyphicon-eye-close"></span> 
				<span>Tampilkan sandi</span> 
				<br><br>
				
				<center>
					<input type="submit" class="btn btn-info" value="LOGIN">
				</center>
			</div>
			</form>
			
		</div>

	    <div class="col-sm-4" >&nbsp;</div><!-- right -->
	</div>

</div>

</body>
</html>