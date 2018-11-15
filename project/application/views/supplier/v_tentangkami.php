<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url()?>assets/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/fontawesome-all.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $title?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url()?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url()?>assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url()?>assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url()?>assets/css/themify-icons.css" rel="stylesheet">

    <style type="text/css">
    .profile img {
        border-radius: 50%;
        -webkit-transition: -webkit-transform .8s ease-in-out;
        transition: transform .5s ease-in-out;
    }
    .profile img:hover {
      -webkit-transform: rotate(360deg);
              transform: rotate(360deg);
    }
    .profile span {
        font-size: 20px;
    }
    </style>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url()?>" class="simple-text">
                    <?php echo $company?>
                </a>
            </div>

            <?php include "v_dasbor_sidebar.php"?>
    	</div>
    </div>

    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title?></h4>
                            </div>
                            <div class="content profile">
                                <div class="row" style="margin-bottom: 60px; margin-top: 20px;">
                                    <div class="col-md-6">
                                        <center>
                                            <img style="width: 300px; border-radius: 50%;" src="<?php echo base_url() ?>assets/img/aditya.jpg"><br><br>
                                            <span>
                                                ADITYA EKA BAGASKARA<br>
                                                IF-40-11<br>
                                                1301164222
                                            </span>
                                        </center>
                                    </div>
                                    <div class="col-md-6">
                                        <center>
                                            <img style="width: 300px; border-radius: 50%;" class="rounded-circle" src="<?php echo base_url() ?>assets/img/ahmad.jpg"><br><br>
                                            <span>
                                                AHMAD RIZKY PRAYOGI<br>
                                                IF-40-11<br>
                                                130116XXXX
                                            </span>
                                        </center>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 40px;">
                                    <div class="col-md-6">
                                        <center>
                                            <img style="width: 300px; border-radius: 50%;" class="rounded-circle" src="<?php echo base_url() ?>assets/img/johan.jpg"><br><br>
                                            <span>
                                                JOHAN ANTONIUS SALIM<br>
                                                IF-40-11<br>
                                                130116XXXX
                                            </span>
                                        </center>
                                    </div>
                                    <div class="col-md-6">
                                        <center>
                                            <img style="width: 300px; border-radius: 50%;" class="rounded-circle" src="<?php echo base_url() ?>assets/img/fetra.jpg"><br><br>
                                            <span>
                                                FETRA MOIRA FIERMANSYAH<br>
                                                IF-40-11<br>
                                                130116XXXX
                                            </span>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "v_dasbor_footer.php";?>

    </div>
</div>

<!-- Tambah Kayu -->
<div class="modal fade" id="tambahKayu" tabindex="-1" role="dialog" aria-labelledby="tambahKayu" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kayu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('supplier/add_kayu');?>
                <div class="modal-body">
                    <div class="row">
                        <div style="display: none;" class="col-md-12">
                            <div class="form-group">
                                <label>ID Supplier</label>
                                <input type="number" class="form-control border-input" placeholder="ID Supplier" name="idsupplier" value="<?php echo $user["id_supplier"]?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Kayu</label>
                                <input type="text" class="form-control border-input" placeholder="Nama Kayu" name="nama" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ukuran Kayu</label>
                                <input required type="number" class="form-control border-input" name="ukuran" placeholder="Ukuran Kayu" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Stok Kayu</label>
                                <input required type="number" class="form-control border-input" name="stok" placeholder="Stok Kayu" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi Kayu</label>
                                <textarea required rows="5" class="form-control border-input" name="deskripsi" placeholder="Deskripsi Kayu"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Harga Kayu</label>
                                <input type="number" class="form-control border-input" placeholder="Harga Kayu" name="harga" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Foto Kayu</label>
                                <input name="foto" type="file" class="form-control-file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Tambahkan Kayu</button>
                    <button type="button" class="btn btn-fill btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url()?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url()?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url()?>assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url()?>assets/js/demo.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/datatables.min.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#table').DataTable();
        });
    </script>

    <script type="text/javascript">
        $("#menu_about").addClass( "active" );
    </script>

</html>
