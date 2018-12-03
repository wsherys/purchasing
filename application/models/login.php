<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: skyblue;">

<div class="container-fluid">

	<div class="h1 text-center" >IT INVENTORY</div>

	<div class="row">
		<div class="col-sm-4" >&nbsp;</div><!-- left -->

		<form action="<?php echo site_url('form_login/login'); ?>" method="post">
		<div class="col-sm-4 well well-lg" style="background-color:none;">
			<div class="form-group">
				<label for="user">username:</label>
				<input type="text" name="username" class="form-control" id="user" maxlength="6">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" id="secret" class="form-control" id="password" maxlength="20">
				<input type="checkbox" id="radio1" name="radio1" value="on" onchange="ShowHide();" >
				<span class="glyphicon glyphicon-eye-close"></span>
				
			</div>
			<div class="form-group">
				<center>
					<input type="submit" class="btn btn-info" value="LOGIN">
				</center>
			</div>
		</div>
		</form>

	    <div class="col-sm-4" >&nbsp;</div><!-- right -->
	</div>

</div>

</body>
</html>