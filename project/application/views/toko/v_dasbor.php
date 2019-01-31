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

    <link href="<?php echo base_url()?>assets/css/graph.css" rel="stylesheet">

    <!--  Fonts and icons     -->
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url()?>assets/css/themify-icons.css" rel="stylesheet">

    <style type="text/css">
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
                        <!-- Statistik Penjualan Mebel -->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Statistik Penjualan Mebel per Hari</h4>
                            </div>
                            <div class="content">
                                <?php $max = 0?>
                                <ul class="chart">
                                    <?php foreach($statistik->result_array() as $statistik_arr) { 
                                        if ($statistik_arr["stok_terjual"] > $max) {
                                            $max = $statistik_arr["stok_terjual"];
                                        }
                                    } ?>
                                    <?php foreach($statistik->result_array() as $statistik_arr) { ?>
                                        <li>
                                            <span style="height:<?php echo $statistik_arr["stok_terjual"]/$max*100?>%" title="<?php echo $statistik_arr["hari"]?>-<?php echo $statistik_arr["bulan"]?>-2018 (<?php echo $statistik_arr["stok_terjual"]?> Mebel)"></span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!-- Data Penjualan Mebel -->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Penjualan Mebel</h4>
                            </div>
                            <div class="content">
                                <table id="table" class="table datapenjualan" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>ID Penjualan</th>
                                            <th>Nama Kayu</th>
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
                        <!-- Daftar Mebel -->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Daftar Mebel</h4>
                            </div>
                            <div class="content">
                                <table id="table" class="table daftarmebel" style="width:100%;">
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
                                        <?php foreach($mebel->result_array() as $mebel_arr) { ?>
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
                                                    <button type="button" class="btn btn-fill btn-warning btn-md" data-toggle="modal" data-target="#edit_<?php echo $mebel_arr["id_mebel"]?>">Edit</button>
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
        <?php include "v_dasbor_footer.php" ?>
    </div>
</div>

<!-- Edit Mebel -->
<?php foreach($mebel->result_array() as $mebel_arr) { ?>
    <div class="modal fade" id="edit_<?php echo $mebel_arr["id_mebel"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Mebel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url()?>toko/edit_mebel" method="post">
                    <div class="modal-body">
                        <div class="row" style="display: none;">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>ID Mebel</label>
                                    <input type="number" class="form-control border-input" placeholder="ID Mebel" name="idmebel" value="<?php echo $mebel_arr["id_mebel"]?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Mebel</label>
                                    <input type="text" class="form-control border-input" placeholder="Nama Mebel" name="nama" value="<?php echo $mebel_arr["nama_mebel"]?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ukuran Mebel</label>
                                    <input required type="number" class="form-control border-input" name="ukuran" placeholder="Ukuran Mebel" value="<?php echo $mebel_arr["ukuran_mebel"]?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Stok Mebel</label>
                                    <input required type="number" class="form-control border-input" name="stok" placeholder="Stok Mebel" value="<?php echo $mebel_arr["stok_mebel"]?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Deskripsi Mebel</label>
                                    <textarea required rows="5" class="form-control border-input" name="deskripsi" placeholder="Deskripsi Mebel"><?php echo $mebel_arr["deskripsi_mebel"]?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Harga Mebel</label>
                                    <input type="number" class="form-control border-input" placeholder="Harga Kayu" name="harga" value="<?php echo $mebel_arr["harga_mebel"]?>">
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

<!-- Modal Peringatan -->
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

<!-- Tambah Mebel -->
<div class="modal fade" id="tambahMebel" tabindex="-1" role="dialog" aria-labelledby="tambahKayu" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Mebel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('toko/add_mebel');?>
                <div class="modal-body">
                    <div class="row">
                        <div style="display: none;" class="col-md-12">
                            <div class="form-group">
                                <label>ID Toko</label>
                                <input type="number" class="form-control border-input" placeholder="ID Toko" name="idtoko" value="<?php echo $user["id_toko"]?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Mebel</label>
                                <input type="text" class="form-control border-input" placeholder="Nama Mebel" name="nama" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ukuran Mebel</label>
                                <input required type="number" class="form-control border-input" name="ukuran" placeholder="Ukuran Mebel" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Stok Mebel</label>
                                <input required type="number" class="form-control border-input" name="stok" placeholder="Stok Mebel" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi Mebel</label>
                                <textarea required rows="5" class="form-control border-input" name="deskripsi" placeholder="Deskripsi Mebel"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Jenis Kayu</label>
                                <select class="form-control border-input" name="idkayu">
                                    <?php foreach ($kayu->result_array() as $kayu_arr) { ?>
                                        <option value="<?php echo $kayu_arr['id_kayu']?>"><?php echo $kayu_arr['nama_kayu']?> (Stok : <?php echo $kayu_arr['stok_kayu']?> Kayu)</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Harga Mebel</label>
                                <input type="number" class="form-control border-input" placeholder="Harga Mebel" name="harga" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Foto Mebel</label>
                                <input name="foto" type="file" class="form-control-file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Tambahkan Mebel</button>
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
        $('[data-fancybox="gallery"]').fancybox({
            transitionEffect: "rotate",
            animationEffect: "zoom-in-out"
        });
    </script>

    <script type="text/javascript">
        $(document).ready( function () {
            $('.daftarmebel').DataTable({
                responsive:true
            });
            $('.datapenjualan').DataTable({
                responsive:true
            });
        } );
    </script>

    <script type="text/javascript">
        $("#menu_dasbor").addClass( "active" );
    </script>

</html>
