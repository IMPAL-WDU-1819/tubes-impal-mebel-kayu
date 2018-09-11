<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?> | Sistem Informasi Mebel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fontawesome-all.css">
	<link rel="shortcut icon" href="<?php echo base_url() ?>img/favicon/icon.ico"/>
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet"> 
</head>
<body>
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 150px">
			<div class="col-lg-4" style="border-top: 5px solid purple; border-bottom: 5px solid purple; background-color: white; box-shadow: 0px 0px 10px #1234;">
				<form class="login" id="login" method="post" action="<?php echo base_url() ?>login">
					<center>
						<h2 style="margin-top: 20px"><?php echo $title ?></h2><br>
					</center>
					<?php if ($this->session->flashdata()) { ?>
	    				<div class="alert alert-warning" role="alert">
							<span class="fa fa-exclamation-circle"></span>&nbsp;&nbsp;<?php echo $this->session->flashdata('message') ?>
						</div>
	    			<?php } ?>
					<div class="form-group">
	     				<label for="username">Username</label>
	      				<input type="text" class="form-control" placeholder="adityaeka26" name="username" required>
	    			</div>
	    			<div class="form-group">
	      				<label for="password">Password</label>
	      				<input type="password" class="form-control" placeholder="123456789" name="password" required>
	    			</div>
	    			<div class="form-group">
					  	<label for="login_as">Login Sebagai</label>
					  	<select class="login_as form-control" id="login_as" name="login_as">
					    	<option value="supplier">Supplier</option>
					    	<option value="toko">Toko</option>
					    	<option value="reseller">Reseller</option>
					    	<option value="ceo">CEO</option>
					 	</select>
					</div>
	    			<input type="submit" class="btn btn-primary" value="Masuk" style="margin-bottom: 20px; margin-top: 10px; width: 100%;">
    			</form>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.js"></script>	
</body>
</html>