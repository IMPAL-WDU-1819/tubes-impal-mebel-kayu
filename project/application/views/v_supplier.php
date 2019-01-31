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
    .table .square {
        position: relative;
        width: 400px;     
        height: 140px;
        overflow: hidden;
        margin:5px 15px 5px 5px;
    }
    .table img {
        position: absolute;
        max-width: 100%;
        width: 100%;
        height: auto;
        top: 50%;     
        left: 50%;
        transform: translate( -50%, -50%);
        margin:0px auto;
    }
    .table img.landscape {
        height: 100%;
        width: auto;
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
        
        <?php include "v_dasbor_navbar.php"?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title?></h4>
                                <p class="category">ID Supplier: <?php echo $user["id_supplier"]?></p>
                            </div>
                            <div class="content">

                                <table id="table" class="table" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Ukuran</th>
                                            <th>Deskripsi</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($kayu->result_array() as $kayu_arr) { ?>
                                            <tr>
                                                <td style="width:340px;">
                                                    <div class="square"><img src="<?php echo base_url() ?>assets/upload/<?php echo $kayu_arr["image_kayu"]?>"></div>
                                                </td>
                                                <td style="vertical-align : middle;"><?php echo $kayu_arr["nama_kayu"]?></td>
                                                <td style="vertical-align : middle;"><?php echo $kayu_arr["ukuran_kayu"]?></td>
                                                <td style="vertical-align : middle;"><?php echo $kayu_arr["deskripsi_kayu"]?></td>
                                                <td style="vertical-align : middle;"><?php echo $kayu_arr["stok_kayu"]?></td>
                                                <td style="vertical-align : middle;">Rp. <?php echo $kayu_arr["harga_kayu"]?></td>
                                                <td style="vertical-align : middle;">
                                                    <button type="button" class="btn btn-fill btn-warning btn-lg" data-toggle="modal" data-target="#edit_<?php echo $kayu_arr["id_kayu"]?>">Edit</button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "v_dasbor_footer.php";?>

    </div>
</div>

<?php foreach($kayu->result_array() as $kayu_arr) { ?>
    <div class="modal fade" id="edit_<?php echo $kayu_arr["id_kayu"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kayu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url()?>supplier/edit_kayu" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>ID Kayu</label>
                                    <input type="number" class="form-control border-input" placeholder="ID Supplier" name="idkayu" value="<?php echo $kayu_arr["id_kayu"]?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Kayu</label>
                                    <input type="text" class="form-control border-input" placeholder="Nama Kayu" name="nama" value="<?php echo $kayu_arr["nama_kayu"]?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ukuran Kayu</label>
                                    <input required type="number" class="form-control border-input" name="ukuran" placeholder="Ukuran Kayu" value="<?php echo $kayu_arr["ukuran_kayu"]?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Stok Kayu</label>
                                    <input required type="number" class="form-control border-input" name="stok" placeholder="Stok Kayu" value="<?php echo $kayu_arr["stok_kayu"]?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Deskripsi Kayu</label>
                                    <textarea required rows="5" class="form-control border-input" name="deskripsi" placeholder="Deskripsi Kayu"><?php echo $kayu_arr["deskripsi_kayu"]?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Harga Kayu</label>
                                    <input type="number" class="form-control border-input" placeholder="Harga Kayu" name="harga" value="<?php echo $kayu_arr["harga_kayu"]?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-info btn-fill btn-wd" value="Simpan">
                        <button type="button" class="btn btn-fill btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $this->session->flashdata("message")?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-fill btn-secondary" data-dismiss="modal">Close</button>
            </div>
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

    <?php if ($this->session->flashdata("message")) { ?>
        <script type="text/javascript">
        $(window).on('load',function(){
            $('#modal').modal('show');
        });
        </script>
    <?php } ?>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>

    <script type="text/javascript">
        $("#menu_dasbor").addClass( "active" );
    </script>

</html>
