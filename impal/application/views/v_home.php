<?php 
	// echo "<pre>";
	// var_dump($this->session->userdata());
	// exit();
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?> | Green House</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fontawesome-all.css">
	<link rel="shortcut icon" href="<?php echo base_url() ?>img/favicon/icon.ico"/>
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet"> 
</head>
<body>
	<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					 		Dropdown
					  	</button>
					  	<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
					    	<button class="dropdown-item" type="button">Action</button>
					    	<button class="dropdown-item" type="button">Another action</button>
					    	<button class="dropdown-item" type="button">Something else here</button>
					  	</div>
					</div>

	<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.js"></script>
	<script src="<?php echo base_url() ?>js/owl.carousel.js"></script>
	<script>
	$(document).ready(function() {
		$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:20,
		    nav:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:4
		        }
		    }
		})
	})
	</script>
</body>
</html>