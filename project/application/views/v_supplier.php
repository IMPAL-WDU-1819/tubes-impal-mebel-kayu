<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?> | Sistem Informasi Mebel</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/datatables.min.css"/>
	<link rel="shortcut icon" href="<?php echo base_url() ?>img/favicon/icon.ico"/>
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">

	<?php foreach($kayu as $kayu_arr) { ?>
		<?php echo $kayu_arr["nama_kayu"]?>
		<?php echo $kayu_arr["ukuran_kayu"]?>
	<?php } ?>

	<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>js/datatables.min.js"></script>
	<script type="text/javascript">
	$(document).ready( function () {
	    $('#table').DataTable();
	});
	</script>
</body>
</html>