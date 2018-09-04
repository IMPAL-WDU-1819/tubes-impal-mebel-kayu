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
				<form method="post" action="">
					<center>
						<h2 style="margin-top: 20px"><?php echo $title ?></h2><br>
					</center>
					<?php if ($this->session->flashdata()) { ?>
	    				<div class="alert alert-danger" role="alert">
							<span class="fa fa-exclamation-circle"></span>&nbsp;&nbsp;<?php echo $this->session->flashdata('message') ?>
						</div>
	    			<?php } ?>
					<div class="form-group">
	     				<label for="username">Masukkan Username :</label>
	      				<input type="text" class="form-control" placeholder="adityaeka26" name="username">
	    			</div>
	    			<div class="form-group">
	      				<label for="password">Masukkan Password :</label>
	      				<input type="password" class="form-control" placeholder="123456789" name="password">
	    			</div>
	    			 <div class="form-group">
					  <label for="sel1">Login Sebagai :</label>
					  <select class="form-control" id="sel1">
					    <option>Supplier</option>
					    <option>Toko</option>
					    <option>Reseller</option>
					    <option>CEO</option>
					  </select>
					</div> 
	    			<input type="submit" class="btn btn-primary" value="Sign In" style="margin-bottom: 20px; margin-top: 10px; width: 100%;">
    			</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.js"></script>
	<script type="text/javascript">
		var bootstrap_enabled = (typeof $().emulateTransitionEnd == 'function');
	</script>
</body>
</html>