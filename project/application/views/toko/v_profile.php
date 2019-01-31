<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/favicon.ico">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url()?>assets/img/favicon.ico">
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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url()?>assets/css/themify-icons.css" rel="stylesheet">

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
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title?></h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo base_url()?>toko/update_profile" method="post">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Perusahaan</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Perusahaan" value="<?php echo $company?>">
                                            </div>
                                        </div>
                                        <div style="display: none;" class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input required type="text" name="username" class="form-control border-input" placeholder="Username" value="<?php echo $user["user_toko"]?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input required type="text" class="form-control border-input" disabled placeholder="Username" value="<?php echo $user["user_toko"]?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input required type="email" name="email" class="form-control border-input" placeholder="Email" value="<?php echo $user["email_toko"]?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Depan</label>
                                                <input required type="text" class="form-control border-input" name="namadepan" placeholder="Nama Depan" value="<?php echo $user["nama_toko"]?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Belakang</label>
                                                <input required type="text" class="form-control border-input" name="namabelakang" placeholder="Nama Belakang" value="<?php echo $user["namabelakang_toko"]?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Kecamatan</label>
                                                <input required type="text" class="form-control border-input" name="kecamatan" placeholder="Kecamatan" value="<?php echo $user["kecamatan_toko"]?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Kota</label>
                                                <input required type="text" class="form-control border-input" name="kota" placeholder="Kota" value="<?php echo $user["kota_toko"]?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Negara</label>
                                                <input required type="text" class="form-control border-input" name="negara" placeholder="Negara" value="<?php echo $user["negara_toko"]?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Kode Pos</label>
                                                <input required type="number" class="form-control border-input" name="kodepos" placeholder="Kode Pos" value="<?php echo $user["kodepos_toko"]?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea required rows="5" class="form-control border-input" name="tentang" placeholder="Here can be your description" value="Mike"><?php echo $user["tentang_toko"]?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profil</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="<?php echo base_url()?>assets/img/background.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="<?php echo base_url()?>assets/upload/<?php echo $user["foto_toko"]?>" alt="..."/>
                                  <h4 class="title"><?php echo $user["nama_toko"]?> <?php echo $user["namabelakang_toko"]?><br />
                                     <small>@<?php echo $user["user_toko"]?></small>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "<?php echo $user["tentang_toko"]?>"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5><?php echo $jumlah_kayu["COUNT(*)"]?><br /><small>Jumlah Kayu</small></h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Rp. <?php echo $pendapatan?><br /><small>Pendapatan</small></h5>
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




<!-- Tambah Kayu 
<div class="modal fade" id="tambahMebel" role="dialog" aria-labelledby="tambahKayu">
    <div class="modal-dialog">
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
</div>-->

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
                <button type="button" class="btn btn-fill btn-secondary" data-dismiss="modal" href="<?php echo base_url() ?>page/toko_profile">Close</button>
            </div>
        </div>
    </div>
</div>

    <<div class="modal fade" id="tambahMebel" role="dialog" aria-labelledby="tambahKayu">
    <div class="modal-dialog">
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
        $('[data-fancybox="tentang"]').fancybox({
            animationEffect: "zoom-in-out"
        });
    </script>

    <script type="text/javascript">
        $("#menu_profile").addClass( "active" );
    </script>

</html>
