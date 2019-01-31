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

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.fancybox.min.css" />

    <!--  Fonts and icons     -->
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url()?>assets/css/themify-icons.css" rel="stylesheet">

    <style type="text/css">
    .table {
        width: 100%; 
        word-break: break-all;
    }
    .table .square {
        position: relative;
        width: 300px;     
        height: 100px;
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
    @media only screen and (max-width: 1400px) {
        .table .square {
            width: 200px;
        }
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

            <?php include "v_dasbor_sidebar.php" ?>            

    	</div>
    </div>

    <div class="main-panel">
        
        <?php include "v_dasbor_navbar.php" ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Daftar Mebel</h4>
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
                                        <?php foreach($mebel->result_array() as $mebel_arr) { 
                                            if ($mebel_arr['stok_mebel']>0) {?>
                                            <tr>
                                                <td>
                                                    <div class="square"><a data-caption="<?php echo $mebel_arr["nama_mebel"]?>" data-fancybox="gallery" href="<?php echo base_url() ?>assets/upload/<?php echo $mebel_arr["image_mebel"]?>"><img src="<?php echo base_url() ?>assets/upload/<?php echo $mebel_arr["image_mebel"]?>"></a></div>
                                                </td>
                                                <td style="vertical-align : middle;"><?php echo $mebel_arr["nama_mebel"]?></td>
                                                <td style="vertical-align : middle;"><?php echo $mebel_arr["ukuran_mebel"]?></td>
                                                <td style="vertical-align : middle;"><?php echo $mebel_arr["deskripsi_mebel"]?></td>
                                                <td style="vertical-align : middle;"><?php echo $mebel_arr["stok_mebel"]?></td>
                                                <td style="vertical-align : middle;">Rp. <?php echo $mebel_arr["harga_mebel"]?></td>
                                                <td style="vertical-align : middle;">
                                                    <button type="button" class="btn btn-fill btn-warning btn-md" data-toggle="modal" data-target="#edit_<?php echo $mebel_arr["id_mebel"]?>">Beli</button>
                                                </td>
                                            </tr>
                                        <?php 
                                    } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Daftar Pembelian</h4>
                            </div>
                            <div class="content">
                                <table id="table" class="table datapembelian" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>ID Pembelian</th>
                                            <th>Nama Mebel</th>
                                            <th>Jumlah</th>
                                            <th>Total Harga</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($jual_mebel->result_array() as $jual_mebel_arr) { ?>
                                            <tr>
                                                <td style="vertical-align : middle;"><?php echo $jual_mebel_arr["id_jual_mebel"]?></td>
                                                <td style="vertical-align : middle;"><?php echo $jual_mebel_arr["nama_mebel"]?></td>
                                                <td style="vertical-align : middle;"><?php echo $jual_mebel_arr["jumlah_mebel"]?></td>
                                                <td style="vertical-align : middle;"><?php echo $jual_mebel_arr["jumlah_mebel"]*$jual_mebel_arr["harga_mebel"]?></td>
                                                <td style="vertical-align : middle;"><?php echo $jual_mebel_arr["tanggal_jual_mebel"]?></td>
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

        <?php include "v_dasbor_footer.php" ?>

    </div>
</div>

<?php foreach($mebel->result_array() as $mebel_arr) { ?>
    <div class="modal fade" id="edit_<?php echo $mebel_arr["id_mebel"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Beli <?php echo $mebel_arr["nama_mebel"]?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?php echo base_url()?>reseller/buy_mebel/<?php echo $mebel_arr["id_mebel"]?>">
                    <div class="modal-body">
                        <input style="display: none;" type="number" class="form-control border-input" name="idreseller" value="<?php echo $user["id_reseller"]?>">
                        Jumlah: <input required type="number" class="border-input" style="border-radius: 4px;" min="1" max="<?php echo $mebel_arr["stok_mebel"]?>" type="number" name="jumlah">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-fill btn-primary" name="submit" value="Beli Mebel">
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

    <script src="<?php echo base_url()?>assets/js/jquery.fancybox.min.js"></script>

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
            $('#table').DataTable({
                responsive:true
            });
        } );
    </script>

    <script type="text/javascript">
        $('[data-fancybox="gallery"]').fancybox({
            transitionEffect: "rotate",
            animationEffect: "zoom-in-out"
        });
    </script>

    <script type="text/javascript">
        $("#menu_dasbor").addClass( "active" );
    </script>

</html>
